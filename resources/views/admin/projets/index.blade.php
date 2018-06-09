@extends('adminlte::page')

@section('title', 'GHX - Projets')

@section('content_header')
    <h1>Gestionnaire des projets</h1>
@stop

@section('content')

<a name="" id="" class="btn btn-primary" href="{{route('projets.create')}}" role="button">Ajouter un projet</a>

<div class="row">
  @foreach($projects as $project)
    <div class="card text-white bg-dark col-3 m-3">
      <div class="card-header">
        <h5>{{$project->titre}}</h5>
      </div>
      <div class="card-body">
        <p class="card-text">{{$project->desc}}</p>

        <hr>

        <h5>{{$project->clients->company}}</h5>
        @foreach($project->technologies as $technology)
          <span class="badge badge-light">{{$technology->nom}}</span>
        @endforeach
        {{-- <span class="badge badge-light">{{$project->technologies[0]->nom}}</span> --}}
    </div>
    <div class="card-footer">
      <a href="{{route('projets.show', ['project' => $project->id])}}" class="btn btn-primary" role="button">Voir</a>
      </div>
    </div>
    @endforeach
</div>
@stop