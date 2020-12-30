<?php

namespace App\Http\Controllers;
use App\Twitte;
use Auth;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class TwitteController extends Controller {

	public function create() {
		$twittes = Twitte::orderby('id', 'desc')->paginate(100);
		return view('admin.twitte.create', compact('twittes'));
	}

	public function show($id) {
		$twitte = Twitte::find($id);
		return view('admin.twitte.show', compact('twitte'));
	}

	public function store(Request $request) {
		if ($request->source != 'clip') {
			$request->validate([
				'body' => 'required',
			]);
		}
		$request->validate([
			'replay_number' => 'required',
			'retweet_number' => 'required',
			'like_number' => 'required',
			'date' => 'required',
		]);

		$request['user_id'] = Auth::user()->id;
		$imgPath = NULL;
		if ($request->hasFile('img')) {
			$extension = $request->img->getClientOriginalExtension();
			$imgPath = $request->file('img')->storeAs(
				$request->category, time() . '.' . $extension
			);

		}

		Twitte::create(array_merge($request->all(), ['img' => $imgPath]));
		return redirect()->route('home')->with(['status' => 'تم']);
	}

}
