<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avisos" />
    @endslot
    
    @slot('body')
        @include('admin.institution.education.notice.partials.notice_form')
        <hr>
        @include('admin.institution.education.notice.partials.notice_table')
    @endslot
</x-pages.index>
