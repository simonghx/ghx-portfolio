<!-- Portfolio Item -->
  <div  @foreach($project->technologies as $technology) class="portfolio-item {{$technology->slug}}" @endforeach >
      <div class="portfolio-box">
      <a  href="{{route('modal', ['project' => $project->id])}}" title="Portfolio {{$project->titre}}">
              <div class="portfolio-image-wrap">
                  <img src="{{Storage::disk('thumbnails')->url($project->image)}}" alt="" />
              </div>
              <div class="portfolio-caption-mask">
                  <div class="portfolio-caption-text">
                      <div class="portfolio-caption-tb-cell mb-5">
                          <h5 class="alt-title">{{$project->titre}}</h5>
                          <p>{{$project->client}}</p>
                      </div>
                      <div class="portfolio-caption-tb-cell">
                          @foreach($project->technologies as $technology)
                          <span class="badge badge-light text-dark">{{$technology->nom}}</span>
                          @endforeach
                      </div>
                  </div>
              </div>
          </a>
      </div>
  </div>
  <!-- End Portfolio Item -->