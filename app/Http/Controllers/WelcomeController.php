<?php

namespace App\Http\Controllers;
use App\Replay;
use App\Twitte;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

	public function index() {
		$twittes = Twitte::orderby('id', 'desc')->paginate(100);
		return view('welcome', compact('twittes'));
	}

	public function search(Request $request) {

		if ($request->table == 'twitte') {
			$search = Twitte::where('body', 'like', '%' . $request->body . '%');
			$searchResults = $search->orWhere('date', 'like', '%' . $request->body . '%')->get();
			return view('search.twitte.result', compact('searchResults'));
		} else {
			$search = Replay::where('body', 'like', '%' . $request->body . '%');
			$searchResults = $search->orWhere('date', 'like', '%' . $request->body . '%')->get();
			return view('search.replay.result', compact('searchResults'));
		}

	}

}
