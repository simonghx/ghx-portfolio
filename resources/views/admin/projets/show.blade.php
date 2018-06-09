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
      </div>
      <div class="box-footer">
      
        {{-- <span class="badge badge-dark">{{$project->technologies->nom}}</span> --}}
        
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        Actions
      </div>
      <div class="box-body">
        <a name="" id="" class="btn btn-warning" href="{{route('projets.edit',  ['project'=>$project->id])}}" role="button">Modifier</a>
        <form class="d-inline" action="{{route('projets.destroy',  ['project' =>$project->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"  role="button">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
@stop