@extends('adminlte::page')

@section('title', 'Admin - Projet')

@section('content_header')
  <h1>Page projet</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-header">
        <h3>{{$project->titre}}</h3>
      </div>
      <div class="box-body">
        <p>{{$project->desc}}</p>

        @if($project->image != null)
          <div class="row">
              <div class="col-md-4">
                  <h4>Original :</h4>
                  <img class="img-fluid" src="{{Storage::disk('images')->url($project->image)}}" alt="">
                  <p>{{Storage::disk('images')->size($project->image)}}</p>
              </div>
              <div class="col-md-4">
                  
                  <h4>Thumbnail :</h4>
                  <img class="" src="{{Storage::disk('thumbnails')->url($project->image)}}" alt="">
                  <p>{{Storage::disk('thumbnails')->size($project->image)}}</p>
              </div>
              <div class="col-md-4">
                  
                  <h4>Miniature :</h4>
                  <img class="" src="{{Storage::disk('miniature')->url($project->image)}}" alt="">
                  <p>{{Storage::disk('miniature')->size($project->image)}}</p>
              </div>
          </div>
          <hr>               
          
        @endif
      </div>
      <div class="box-footer">

        <h3>{{$project->client}}</h3>
      
        @foreach($project->technologies as $technology)
          <span class="badge badge-dark">{{$technology->nom}}</span>
        @endforeach
        
        
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        Actions
      </div>
      <div class="box-body">
        <a name="" id="" class="btn btn-warning" href="{{route('projects.edit',  ['project'=>$project->id])}}" role="button">Modifier</a>
        <form class="d-inline" action="{{route('projects.destroy',  ['project' => $project->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"  role="button">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
@stop