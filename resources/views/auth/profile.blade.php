<x-layout>
    <x-masthead title="I tuoi Chirps"/>
    <div class="container">
        <div class="row">
            <div class="col-12">@dd($chirps)
                
                @if (Auth::id() == $chirp->user->id)
                <livewire:card-chirp/>

                @endif
            </div>
        </div>
    </div>
</x-layout>