<x-layout>
    <x-masthead title="Registrati"/>
    <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6">
            <form
            class="rounded-5 p-4 shadow bg-body-secondary my-4"
            method="POST"
            action="{{route('register')}}"
            >
            @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Inserisci la tua Mail</label>
                  <input type="email" class="form-control" name='email' id="email">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Inserisci Nome Utente</label>
                    <input type="text" class="form-control" name='name' id="name">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Inserisci la tua Password</label>
                  <input type="password" class="form-control" name='password' id="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma la tua Password</label>
                    <input type="password" class="form-control" name='password_confirmation' id="confirmPassword">
                </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
              </form>
          </div>
        </div>
      </div>
</x-layout>