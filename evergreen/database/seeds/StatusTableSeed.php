<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( Status::count() == 0 ){

            Status::create([ 'Name' => 'Mrs' ]);
            Status::create([ 'Name' => 'Miss' ]);
            Status::create([ 'Name' => 'Pastor' ]);
            Status::create([ 'Name' => 'Dr' ]);
        }
    }
}
