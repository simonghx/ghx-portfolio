@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <h1>{{$projet->titre}}</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="box">
      <div class="box-body">
        {{$projet->desc}}
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        Actions
      </div>
      <div class="box-body">
        <a name="" id="" class="btn btn-warning" href="{{route('projets.edit',  ['projet'=>$projet->id])}}" role="button">Modifier</a>
        <form action="{{route('projets.destroy',  ['projet'=>$projet->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-warning"  role="button">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
@stop