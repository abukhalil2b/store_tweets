<?php

namespace App\Http\Controllers;
use App\Twitte;
use Auth;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class TwitteController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function create() {
		return view('admin.twitte.create');
	}

	public function store(Request $request) {
		$request->validate([
			'body' => 'required',
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
