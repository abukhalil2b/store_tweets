<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replay extends Model {
	protected $fillable = ['date', 'body', 'name', 'info', 'img', 'retweet_number', 'like_number', 'vid', 'link', 'category', 'twitte_id', 'user_id'];
	public function replays() {
		return $this->belongsTo(Twitte::class);
	}
}
