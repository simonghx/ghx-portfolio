@extends('adminlte::page')

@section('title', 'Admin - Technologies')

@section('content_header')
    <h1>Liste des technologies</h1>
@stop

@section('content')
  <div class="mb-4">
    <a name="" id="" class="btn btn-success" href="{{route('technologies.create')}}" role="button">Ajouter une technologie</a>

  </div>

    <table class="table table-dark">
      <thead>
        <tr class="row mx-1">
          <th class="col-md-1">#</th>
          <th class="col-md-8">Nom</th>
          <th class="col-md-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($technologies as $technology)
        <tr class="row mx-1">
          <td class="col-md-1" scope="row">{{$loop->iteration}}</td>
          <td class="col-md-8">{{$technology->nom}}</td>
          <td class="col-md-3">
            <a name="" id="" class="btn btn-light" href="{{route('technologies.edit', ['technology' => $technology->id])}}" role="button">Modifier</a>
            <form class="d-inline" action="{{route('technologies.destroy', ['technology' => $technology->id])}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
@stop