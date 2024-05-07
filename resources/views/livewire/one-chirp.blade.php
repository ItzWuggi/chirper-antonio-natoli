<div class="container justify-content-center d-flex">
    <div class="row">
        <div class="col-12 col-md-6 ">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$chirp->title}}</h5>
                  <p class="card-text">{{$chirp->content}}</p>
                  @foreach ($chirp->tags as $tag )
                  <p class="card-text">#{{$tag->tag}}</p>
                  @endforeach
                  <a href="{{route('welcome')}}" class="card-link">Torna indietro</a>
                </div>
              </div>
        </div>
    </div>
</div>
