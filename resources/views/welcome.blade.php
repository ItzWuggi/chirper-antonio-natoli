<x-layout>
    <x-masthead title="Homepage"/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
              <x-error/>
              <x-message/>
                <form class="rounded-4 shadow bg-light-subtle p-4 my-5 "
              wire:submit="store"
                >          
                  <div class="mb-3">
                    <label for="title" class="form-label">Inserisci il titolo dell'articolo</label>
                    <input wire:model='title'  wire:model.blur="title" type="text" class="form-control" id="title" >
                    @error('title')<div class="text-danger fw-bolder "> {{ $message }} </div>@enderror
                  </div>
                  <div class="mb-3">
                    <label for="subtitle" class="form-label">Inserisci il sottotitolo dell'articolo</label>
                    <input wire:model='subtitle'  wire:model.blur="subtitle"  type="text" class="form-control" id="subtitle" >
                    @error('subtitle')<div class="text-danger fw-bolder  "> {{ $message }} </div>@enderror
                  </div>
                  <div class="mb-3">
                    <label for="body" class="form-label">Inserisci il corpo dell'articolo</label>
                      <textarea wire:model='body'  wire:model.blur="body" id="body" class="form-control me-3" cols="30" rows="10"></textarea>
                      @error('body')<div class="text-danger fw-bolder  "> {{ $message }} </div>@enderror
                    </div>
                  <button wire:submit='store'   class="btn btn-success">Crea un articolo</button>
                  </form>
            </div>
        </div>
      </div>


</x-layout>