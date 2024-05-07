<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <x-error/>
          <x-message/>
            <form class="rounded-4 shadow bg-light-subtle p-4 my-5 "
          wire:submit="updateChirp"
            >          
              <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo del tuo chirp</label>
                <input  wire:model.blur="title" type="text" class="form-control" id="title" >
                @error('title')<div class="text-danger fw-bolder "> {{ $message }} </div>@enderror
              </div>
              <div class="mb-3">
                <label for="content" class="form-label">Inserisci il corpo del tuo chirp</label>
                  <textarea  wire:model.blur="content" id="content" class="form-control me-3" cols="30" rows="10"></textarea>
                  @error('content')<div class="text-danger fw-bolder  "> {{ $message }} </div>@enderror
                </div>
                <div class="mb-3">
                  <label for="tags" class="form-label">Modifica i tag del tuo chirp</label>
                  <input
                  wire:model.blur="tags" type="text" class="form-control" id="tags" >
                  @error('tag')<div class="text-danger fw-bolder "> {{ $message }} </div>@enderror
                </div> 
              <button wire:submit='updateChirp'   class="btn btn-success">Modifica un chirp</button>
              </form>
        </div>
    </div>
  </div>