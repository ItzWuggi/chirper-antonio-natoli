<div class="container p-3">
    <div class="row">
        @foreach ($chirps as $chirp)    
        {{-- @dd($chirp->tag) --}}
        <div class="col-12 col-md-4 my-3">
            <div class="card" style="width: 18rem;  ">
                <div class="card-body ">
                    <h5 class="card-title">{{$chirp->title}}</h5>
                    <p class="card-text">{{$chirp->content}}</p>
                    <div>
                        <a href="{{route('chirp.show', compact('chirp'))}}" class="btn btn-primary mb-3">Vai al dettaglio</a>
                        <a href="{{route('chirp.edit', compact('chirp'))}}" class="btn btn-success mb-3">Modifica il chirp</a>
                    </div>
                    <button  wire:click="destroy({{$chirp}})" class="btn btn-danger mb-2">Elimina</button> 
                    <h6>Creato dall'utente {{$chirp->user->name}}</h6>
                    @foreach ($chirp->tags as $tag )
                    <h6>#{{$tag->tag}}</h6> 
                    @endforeach
                    {{-- //che succede qua?? --}}
                </div>
            </div>
        </div>
        
        
        @endforeach
    </div>
</div>