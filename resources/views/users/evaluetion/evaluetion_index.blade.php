<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avaliações" />
    @endslot
    
    @slot('body')
        @include('users.evaluetion.partials.index.evaluetion_index_board')
    @endslot
</x-pages.index>
