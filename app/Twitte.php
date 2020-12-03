<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitte extends Model {
	protected $fillable = ['date', 'title', 'body', 'img', 'retweet_number', 'like_number', 'replay_number', 'vid', 'link', 'category', 'source', 'user_id'];
	public function replays() {
		return $this->hasMany(Replay::class);
	}

	public function spreads() {
		return $this->hasMany(Spread::class);
	}

}
