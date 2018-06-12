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
            'slug' => 'laravel',
        ]);
        App\Technology::create([
            'nom' => 'WordPress',
            'slug' => 'wordpress',
        ]);
        App\Technology::create([
            'nom' => 'VueJS',
            'slug' => 'vuejs',
        ]);

      
    }
}

