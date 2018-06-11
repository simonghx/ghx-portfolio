@extends('adminlte::page')

@section('title', 'Admin - Edit technology')

@section('content_header')
    <h1>Modification d'une technologie</h1>
@stop

@section('content')
  <form action="{{route('technologies.store')}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="">Nom de la technologie :</label>
      @if($errors->has('nom'))
        <div class="text-danger">{{$errors->first('nom')}}</div>
      @endif
      <input type="text" name="nom" id="" class="form-control" placeholder="" value="{{old('nom', $technology->nom)}}">
      
    </div>
    <button type="submit" class="btn btn-success">Enregistrer</button>
    <a name="" id="" class="btn btn-danger" href="{{route('admin.technologies.index')}}" role="button">Cancel</a>
  </form>
@stop