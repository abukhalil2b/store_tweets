<?php

namespace App\Http\Controllers;
use App\Country;
use App\Spread;
use Illuminate\Http\Request;

class SpreadController extends Controller {

	public function create($twitte_id) {
		$countries = Country::all();
		$spreads = Spread::where('twitte_id', $twitte_id)->get();
		return view('admin.spread.create', compact('twitte_id', 'spreads', 'countries'));
	}

	public function store(Request $request) {
		$this->validate($request, [
			'twitte_id' => 'required',
			'country_id' => 'required',
			'number' => 'required',

		]);
		Spread::create(['twitte_id' => $request->twitte_id, 'country_id' => $request->country_id, 'number' => $request->number]);
		return redirect()->back()->with(['status' => 'تم']);
	}

}
