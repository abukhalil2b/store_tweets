<?php

namespace App\Http\Controllers;
use App\Replay;
use App\Twitte;
use Auth;
use Illuminate\Http\Request;

class ReplayController extends Controller {

	public function __construct() {
		// $this->middleware('auth');
	}

	public function create($twitte_id) {
		$twitte = Twitte::find($twitte_id);
		return view('admin.replay.create', compact('twitte'));
	}

	public function store(Request $request) {
		$request->validate([
			'body' => 'required',
			'name' => 'required',
		]);
		$request['user_id'] = Auth::user()->id;
		$imgPath = NULL;
		if ($request->hasFile('img')) {
			$extension = $request->img->getClientOriginalExtension();
			$imgPath = $request->file('img')->storeAs(
				'twitte' . $request->twitte_id, time() . '.' . $extension
			);

		}
		Replay::create(array_merge($request->all(), ['img' => $imgPath]));
		return redirect()->route('home')->with(['status' => 'تم']);
	}
}
