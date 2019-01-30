<?php

use App\Designate;
use Illuminate\Database\Seeder;

class DesignateTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( Designate::count() == 0 ){

            Designate::create([ 'Name' => 'Member' ]);
            Designate::create([ 'Name' => 'Guest' ]);
            Designate::create([ 'Name' => 'Mentee' ]);
        }
    }
}
