<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( User::count() == 0 ){

           User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'remember_token' => str_random(60),
                'status' => 1
            ]);
        }
    }
}
