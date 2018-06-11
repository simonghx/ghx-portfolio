@extends('adminlte::page')

@section('title', 'Admin - Création de projet')

@section('content_header')
    <h1>Ajout de projet</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            
            <div class="box-body">
                <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                  <div class="form-group">
                    <label for="titre">Titre du projet :</label>
                    @if($errors->has('titre'))
                    <div class="text-danger">{{$errors->first('titre')}}</div>
                    @endif
                  <input type="text" name="titre" id="titre" class="form-control {{$errors->has('titre')?'border-danger':''}}" placeholder="Le titre du projet" value="{{old('titre')}}">
                </div>
                <div class="form-group">
                    <label for="">Description du projet :</label>
                    @if($errors->has('desc'))
                    {{-- @foreach($errors->get('contenu') as $error) --}}
                <div class="text-danger">{{$errors->first('desc')}}</div>
                {{-- @endforeach --}}
                @endif
                <textarea class="form-control {{$errors->has('desc')?'border-danger':''}}" name="desc" id="desc" rows="3">{{old('desc')}}</textarea>
                </div>
                
                <div class="form-group">
                    <img src="" alt="">
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
                  <input type="text" name="client" id="client" class="form-control {{$errors->has('client')?'border-danger':''}}" placeholder="Le nom du client" value="{{old('client')}}">
                </div>

                <div class="form-group">
                    <label>Choix de la technologie utilisée :</label>
                    @if($errors->has('technologyid'))
                    <div class="text-danger">{{$errors->first('technologyid')}}</div>
                    @endif
                    @foreach($technologies as $technology)
                    <div class="form-check my-2">
                    
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="technologyid[]" id="" value="{{$technology->id}}">
                        {{$technology->nom}}
                    </label>
                    
                    </div>
                    @endforeach
                </div>
                    
                  <button type="submit" class="btn btn-warning">Créer</button>
                    <a name="" id="" class="btn btn-danger" href="{{route('projects.index')}}" role="button">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop

@push('js')
<script src="{{asset('js/lib/bstrp-change-file-input-value.js')}}"></script>
@endpush