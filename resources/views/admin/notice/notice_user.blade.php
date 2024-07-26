<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avisos" />
    @endslot
    
    @slot('body')
        @include('admin.notice.partials.user.notice_user_table')
    @endslot
</x-pages.index>
