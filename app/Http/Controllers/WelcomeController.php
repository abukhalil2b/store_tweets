<?php

namespace App\Http\Controllers;
use App\Twitte;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

	public function index() {
		$fikrTweets = Twitte::where('category', 'fikr')->paginate(30);
		$aqeedaTweets = Twitte::where('category', 'aqeeda')->paginate(30);
		return view('welcome', compact('fikrTweets', 'aqeedaTweets'));
	}

	public function search(Request $request) {
		$search = Twitte::where('body', 'like', '%' . $request->body . '%');
		$searchResults = $search->orWhere('date', 'like', '%' . $request->body . '%')->get();
		return view('search.result', compact('searchResults'));
	}

}
