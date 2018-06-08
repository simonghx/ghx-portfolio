<?php

use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Technology::create([
            'nom' => 'Laravel',
        ]);
        App\Technology::create([
            'nom' => 'WordPress',
        ]);
        App\Technology::create([
            'nom' => 'VueJS',
        ]);

      
    }
}

