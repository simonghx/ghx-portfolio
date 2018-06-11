<?php

namespace App\Http\Controllers;

use App\Project;
use App\Technology;
use Illuminate\Http\Request;
use App\Services\ImageResizing;

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
        $projects = Project::with('clients', 'technologies')->get()->sortByDesc('created_at');
        // $projects = Project::all();
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
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->titre = $request->titre;
        $project->desc = $request->desc;
        if ($request->image != null) {   

            $project->image = $this->imageResizing->imageStore($request->image);

        }
        $project->client_id = 1;

        $project->save();
        return redirect()->route('projects.index');
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
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->titre = $request->titre;
        $project->desc = $request->desc;
        if ($request->image != null) {   

            $this->imageResizing->imageDelete($project->image);
            $project->image = $this->imageResizing->imageStore($request->image);

        }
        $project->client_id = 1;
        $project->save();
        return redirect()->route('projects.show', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
