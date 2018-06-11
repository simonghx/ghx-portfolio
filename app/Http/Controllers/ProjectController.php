<?php

namespace App\Http\Controllers;

use App\Project;
use App\Technology;

use Illuminate\Http\Request;
use App;
use App\Services\ImageResizing;
use App\Http\Requests\StoreProject;

class ProjectController extends Controller
{
    public function __construct(ImageResizing  $imageResizing){
        $this->imageResizing = $imageResizing;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('technologies')->get()->sortByDesc('created_at');
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Technology $technologies)
    {
        $technologies = Technology::all();
        return view('admin.projects.create', compact('technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {
        $request->validated();
        $project = new Project;
        $project->titre = $request->titre;
        $project->desc = $request->desc;
        if($request->image != null) {   

            $project->image = $this->imageResizing->imageStore($request->image);

        }

        $project->client = $request->client;
        
        
        if ($project->save()){
            foreach ($request->technologyid as $technology) {
                $project->technologies()->attach($technology);
            }

            return redirect()->route('projects.show', ['project' => $project->id])->with(["status"=>"success", "message" => 'Votre projet a bien été enregistré']);

        } else {
            return redirect()->route('projects.index')->with(["status"=>"danger", "message" => 'Une erreur est survenue, veuillez réessayer plus tard']);
        }

        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Technology $technologies)
    {
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProject $request, Project $project)
    {
        $request->validated();
        $project->titre = $request->titre;
        $project->desc = $request->desc;
        if($request->image != null) {   

            $this->imageResizing->imageDelete($project->image);
            $project->image = $this->imageResizing->imageStore($request->image);
        }

        $project->client = $request->client;

       if ($project->save()){
            foreach ($request->technologyid as $technology) {
                $project->technologies()->detach();
                $project->technologies()->attach($technology);
            }

           return redirect()->route('projects.show', ['project' => $project->id])->with(["status"=>"success", "message" => 'Votre projet a bien été enregistré']);
       } else {
           return redirect()->route('projects.index')->with(["status"=>"danger", "message" => 'Une erreur est survenue, veuillez réessayer plus tard']);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {  
        if($project->delete()) {

            $project->technologies()->detach();

            if($project->image != null) {
                $this->imageResizing->imageDelete($project->image);
            }
            return redirect()->route('projects.index')->with(["status"=>"success", "message" => 'Votre projet a bien été supprimé']);
        } else {
            return redirect()->route('projects.index')->with(["status"=>"danger", "message" => 'Une erreur est survenue, veuillez réessayer plus tard']);
        }
    }
}
