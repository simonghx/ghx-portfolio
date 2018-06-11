@extends('adminlte::page')

@section('title', 'Admin - Create technology')

@section('content_header')
    <h1>Ajout d'une technologie</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
      <div class="box">
        <div class="box-body">
          <form action="{{route('technologies.store')}}" method="POST">
            @csrf
        
            <div class="form-group">
              <label for="">Nom de la technologie :</label>
              @if($errors->has('nom'))
                <div class="text-danger">{{$errors->first('nom')}}</div>
              @endif
              <input type="text" name="nom" id="" class="form-control" placeholder="" value="{{old('nom')}}">
              
            </div>
            <button type="submit" class="btn btn-success">Enregistrer</button>
            <a name="" id="" class="btn btn-danger" href="{{route('technologies.index')}}" role="button">Cancel</a>
          </form>

        </div>
      </div>
    </div>
</div>
@stop