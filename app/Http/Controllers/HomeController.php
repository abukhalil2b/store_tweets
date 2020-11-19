<?php

namespace App\Http\Controllers;
use App\Twitte;

class HomeController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function home() {
		$twittes = Twitte::orderby('id', 'desc')->paginate(100);
		return view('home', compact('twittes'));
	}
}
