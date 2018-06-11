<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Client::class,10)->create()->each(function($client){
        //     $client->projects()->save(factory(App\Project::class)->make());
        // });

        
    //    $projects = App\Project::all();
       factory(App\Project::class,10)->create()->each(function($project){
           $project->technologies()->attach(rand(1,3));
       });
    }
}
