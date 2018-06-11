@extends('adminlte::page')

@section('title', 'Admin - Edit project')

@section('content_header')
    <h1>Modification de projet</h1>
@stop

@section('content')
    <div class="row">
    <div class="col-md-8">
        <div class="box">
            
            <div class="box-body">
                <form action="{{route('projects.update', ['project'=>$project->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                  <div class="form-group">
                  <label for="">Titre</label>
                  @if($errors->has('titre'))
                  <div class="text-danger">{{$errors->first('titre')}}</div>
                  @endif
                  <input type="text" name="titre" id="titre" class="form-control {{$errors->has('titre') ? 'border-danger':''}}" placeholder="Le titre du projet" value="{{old('titre', $project->titre)}}">
                    <div class="form-group">
                      <label for="">Description du projet</label>
                      @if($errors->has('desc'))
                      <div class="text-danger">{{$errors->first('desc')}}</div>
                      @endif
                      <textarea class="form-control {{$errors->has('desc') ? 'border-danger':''}}" name="desc" id="desc" rows="10">{{ old('desc',$project->desc)}}</textarea>
                    </div>
                    @if($project->image != null)
                        <div class="col-md-3">
                            <img class="img-fluid" src="{{Storage::disk('images')->url($project->image)}}" alt="">
                            <p>{{Storage::disk('images')->size($project->image)}}</p>
                            <hr>
                        </div>
                    @endif
                    <div class="custom-file"  data-bsfileupload>
                        <label class="custom-file-label" for="customFile">Uploader une autre image</label>
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                    </div>
                </div>
                  </div>
                  <button type="submit" class="btn btn-warning">Enregistrer</button>
                  <a name="" id="" class="btn btn-danger" href="{{route('projects.show', ['project'=>$project->id])}}" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop