<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Twitte;

// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel;

class HomeController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function home() {
		$twittes = Twitte::orderby('id', 'desc')->paginate(100);
		return view('home', compact('twittes'));
	}

	public function export(Excel $excel) {
		// return (new UsersExport)->download('users.xlsx');
		// return $excel->download(new UsersExport, 'user.pdf', Excel::DOMPDF);
		return $excel->download(new UsersExport, 'user.xlsx');
	}
}
