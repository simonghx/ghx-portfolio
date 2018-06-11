<?php

namespace App\Http\Controllers;

use App\Technology;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTechnology;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnology $request)
    {
        $technology = new Technology;
        $technology->nom = $request->nom;

        if($technology->save()) {
            return redirect()->route('technologies.index')->with(["status"=>"success", "message" => 'La technologie a bien été enregistrée']);
        } else {
            return redirect()->route('technologies.index')->with(["status"=>"danger", "message" => 'Une erreur est survenue']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreTechnology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technology $technology)
    {
        $technology->nom = $request->nom;

        if($technology->save()) {
            return redirect()->route('technologies.index')->with(["status"=>"success", "message" => 'La technologie a bien été enregistrée']);
        } else {
            return redirect()->route('technologies.index')->with(["status"=>"danger", "message" => 'Une erreur est survenue']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        if($technology->delete()){
            return redirect()->route('technologies.index')->with(["status"=>"success", "message" => 'La technologie a bien été supprimée']);
        } else {
            return redirect()->route('technologies.index')->with(["status"=>"danger", "message" => 'Une erreur est survenue']);
        }
    }
}
