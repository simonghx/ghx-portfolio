@extends('layouts.front')

@section('content')
  <section id="project" class="section-padding">
    <div class="container">
      <div class="row mb-5">
        <div class="col-sm-12 text-center">
          <img class="img-fluid" src="{{Storage::disk('images')->url($project->image)}}" alt="Image {{$project->titre}}">
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <h1>{{$project->titre}}</h1>
          <p class="lead-lg max-width-700 mb-60">{{$project->desc}}</p>
          <hr>
          <h6>Technologies used :</h6>
            @foreach($project->technologies as $technology)
            <span class="badge badge-dark">{{$technology->nom}}</span>
            @endforeach

        </div>
        
      </div>
      
      

    </div>

  </section>
@endsection