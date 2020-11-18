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
			$table->string('body');
			$table->string('name');
			$table->string('info');
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
