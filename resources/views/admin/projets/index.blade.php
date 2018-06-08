@extends('adminlte::page')

@section('title', 'GHX - Projets')

@section('content_header')
    <h1>Gestionnaire des projets</h1>
@stop

@section('content')

<a name="" id="" class="btn btn-primary" href="{{route('projets.create')}}" role="button">Ajouter un projet</a>

<div class="row">
  @foreach($projets as $projet)
    <div class="card text-white bg-dark col-3 m-3">
      <div class="card-header">
        <h5>{{$projet->titre}}</h5>
      </div>
      <div class="card-body">
        <p class="card-text">{{$projet->desc}}</p>
       
    </div>
    <div class="card-footer">
       <a href="{{route('projets.show', ['projet'=> $projet->id])}}" class="btn btn-primary">Voir</a>
      </div>
    </div>
    @endforeach
</div>
@stop