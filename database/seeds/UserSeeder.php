<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::truncate();
		User::create([
			'name' => 'الإدارة',
			'email' => 'admin@mail.com',
			'password' => Hash::make('11112222'),
		]);
	}
}
