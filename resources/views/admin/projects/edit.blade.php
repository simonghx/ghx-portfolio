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
                <form action="{{route('projects.update', ['project' => $project->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                  <div class="form-group">
                    <label for="titre">Titre du projet :</label>
                    @if($errors->has('titre'))
                    <div class="text-danger">{{$errors->first('titre')}}</div>
                    @endif
                  <input type="text" name="titre" id="titre" class="form-control {{$errors->has('titre')?'border-danger':''}}" placeholder="Le titre du projet" value="{{old('titre', $project->titre)}}">
                </div>
                <div class="form-group">
                    <label for="">Description du projet :</label>
                    @if($errors->has('desc'))
                    {{-- @foreach($errors->get('contenu') as $error) --}}
                <div class="text-danger">{{$errors->first('desc')}}</div>
                {{-- @endforeach --}}
                @endif
                <textarea class="form-control {{$errors->has('desc')?'border-danger':''}}" name="desc" id="desc" rows="3">{{old('desc', $project->desc)}}</textarea>
                </div>
                
                <div class="form-group">
                     @if($project->image != null)
                        <div class="col-md-3">
                            <img class="img-fluid" src="{{Storage::disk('images')->url($project->image)}}" alt="">
                            <p>{{Storage::disk('images')->size($project->image)}}</p>
                            <hr>
                        </div>
                    @endif
                    @if($errors->has('image'))
                        @foreach($errors->get('image') as $error)
                        <div class="text-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="custom-file"  data-bsfileupload>
                        <label class="custom-file-label" for="customFile">Uploader une image</label>
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                    </div>
                
                </div>

                <div class="form-group">
                    <label for="client">Nom du client :</label>
                    @if($errors->has('client'))
                    <div class="text-danger">{{$errors->first('client')}}</div>
                    @endif
                  <input type="text" name="client" id="client" class="form-control {{$errors->has('client')?'border-danger':''}}" placeholder="Le nom du client" value="{{old('client', $project->client)}}">
                </div>

                <div class="form-group">
                    <label>Choix de la technologie utilisée :</label>
                    @if($errors->has('technologyid'))
                    <div class="text-danger">{{$errors->first('technologyid')}}</div>
                    @endif
                    @foreach($technologies as $technology)
                    <div class="form-check my-2">
                    
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="technologyid[]" id="" value="{{$technology->id}}" @foreach($project->technologies as $tech){{old('technologyid', ( $tech->id == $technology->id) ? 'checked':'')}} @endforeach>
                         
                        {{$technology->nom}}
                    </label>
                    
                    </div>
                    @endforeach
                </div>
                    
                  <button type="submit" class="btn btn-warning">Modifier</button>
                    <a name="" id="" class="btn btn-danger" href="{{route('projects.show', ['project' => $project->id])}}" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop

@push('js')
<script src="{{asset('js/lib/bstrp-change-file-input-value.js')}}"></script>
@endpush