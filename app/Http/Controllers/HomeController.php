<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Twitte;
use App\Country;
use Illuminate\Http\Request;
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

	
	public function countryCreate() {
		$countries = Country::all();
		return view('setting.country_create', compact('countries'));
	}

	public function countryStore(Request $request) {
		$this->validate($request,['name'=>'required']);
		Country::create(['name'=>$request->name]);
		return redirect()->back()->with(['status'=>'success','message'=>'تم']);
	}

	public function countryEdit(Country $country) {
		return view('setting.country_edit', compact('country'));
	}

	public function countryUpdate(Request $request) {
		Country::where('id',$request->id)->update(['name'=>$request->name]);
		return redirect()->route('country.create')->with(['status'=>'success','message'=>'تم']);
	}
}
