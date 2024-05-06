<x-layout>
    <x-masthead title="Vedi chirp"/>
    {{-- @dd($chirp) --}}
    <livewire:one-chirp 
    :chirp="$chirp"
    />

</x-layout>