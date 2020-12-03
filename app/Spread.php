<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spread extends Model {
	protected $fillable = ['twitte_id', 'number', 'country_id'];
	public function twitte() {
		return $this->belongsTo(Twitte::class);
	}

	public function country() {
		return $this->belongsTo(Country::class);
	}
}
