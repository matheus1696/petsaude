<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avisos" />
    @endslot
    
    @slot('body')
    

    <div class="flex justify-between px-2 pb-2">
        <h3 class="text-lg font-semibold"></h3>
        @include('admin.evaluetion.personal.partials.index.personal_index_form')
    </div>
        @include('admin.evaluetion.personal.partials.index.personal_index_table')
    @endslot
</x-pages.index>
