<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminSeederTable::class);
         $this->call(DesignateTableSeed::class);
         $this->call(MaritalStatusTableSeed::class);
         $this->call(StatusTableSeed::class);
    }
}
