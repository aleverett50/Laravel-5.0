<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {

	DB::table('users')->delete();
	
	User::create([ 'email' => 'alexe@wts-group.com', 'first_name' => 'AL', 'last_name' => 'Everett', 'password' => Hash::make('pass') ]);

    }



}