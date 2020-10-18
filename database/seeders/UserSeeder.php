<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'username' => 'user_test', 
        	'password' => Hash::make('pass_test'), 
        	'api_token' => Str::random(60),
            'status' => true
        ]);
    }
}
