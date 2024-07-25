<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avisos" />
    @endslot
    
    @slot('body')
        @include('admin.notice.partials.notice_form')
        @include('admin.notice.partials.notice_table')
    @endslot
</x-pages.index>
