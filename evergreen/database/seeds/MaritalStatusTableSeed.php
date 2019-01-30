<?php

use App\MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( MaritalStatus::count() == 0 ){

            MaritalStatus::create([ 'Name' => 'Single' ]);
            MaritalStatus::create([ 'Name' => 'Married' ]);
            MaritalStatus::create([ 'Name' => 'Widow' ]);
            MaritalStatus::create([ 'Name' => 'Others' ]);
        }
    }
}
