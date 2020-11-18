<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitte extends Model {
	protected $fillable = ['date', 'title', 'body', 'img', 'vid', 'link', 'category', 'source', 'user_id'];
	public function replays() {
		return $this->hasMany(Replay::class);
	}
}
