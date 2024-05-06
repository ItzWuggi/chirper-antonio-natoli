<div class="container p-3">
    <div class="row">
        @foreach ($chirps as $chirp)    
        <div class="col-12 col-md-4 my-3">
            <div class="card" style="width: 18rem;  ">
                <div class="card-body">
                    <h5 class="card-title">{{$chirp->title}}</h5>
                    <p class="card-text">{{$chirp->content}}</p>
                    <a href="{{route('chirp.show', compact('chirp'))}}" class="btn btn-primary mb-3">Vai al dettaglio</a>
                    <a href="{{route('chirp.edit', compact('chirp'))}}" class="btn btn-success mb-3">Modifica il chirp</a>
                    <button  wire:click="destroy({{$chirp}})" class="btn btn-danger">Elimina</button>
                </div>
            </div>
        </div>
        

        @endforeach
    </div>
</div>