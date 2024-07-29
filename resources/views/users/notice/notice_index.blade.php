<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avisos" />
    @endslot
    
    @slot('body')
        @include('users.notice.partials.index.notice_index_board')
    @endslot
</x-pages.index>
