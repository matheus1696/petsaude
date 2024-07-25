<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="{{$dbEvaluetion->title}}" />
    @endslot
    
    @slot('body')
    

    <div class="flex justify-between px-2 pb-2">
        <h3 class="text-lg font-semibold"></h3>
        @include('admin.evaluetion.partials.show.evaluetion_show_form')
    </div>
        @include('admin.evaluetion.partials.show.evaluetion_show_table')
    @endslot
</x-pages.index>
