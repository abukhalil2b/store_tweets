<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplaysTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('replays', function (Blueprint $table) {
			$table->id();
			$table->date('date')->nullable();
			$table->text('body');
			$table->string('name')->nullable();
			$table->string('info')->nullable();
			$table->string('job')->nullable();
			$table->integer('retweet_number')->default(0);
			$table->integer('like_number')->default(0);
			$table->string('img')->nullable();
			$table->string('vid')->nullable();
			$table->string('link')->nullable();
			$table->string('category');
			$table->integer('twitte_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('replays');
	}
}
