<x-layout>
    <x-masthead title="Accedi al tuo Account"/>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6">
            <form
            method="POST"
            action="{{route('login')}}"
            class="rounded-5 p-5 shadow bg-body-secondary my-4"
            >
            @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Inserisci la tua Mail</label>
                  <input type="email" class="form-control" name='email' id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Inserisci la tua Password</label>
                  <input type="password" class="form-control" name='password' id="password">
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
              </form>
          </div>
        </div>
      </div>
</x-layout>