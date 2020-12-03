<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpreadsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('spreads', function (Blueprint $table) {
			$table->id();
			$table->integer('twitte_id')->unsigned();
			$table->integer('country_id')->unsigned();
			$table->integer('number')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('spreads');
	}
}
