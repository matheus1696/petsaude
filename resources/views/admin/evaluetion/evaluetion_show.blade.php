<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header
            title="{{$dbEvaluetion->title}}" 
            routeBack="{{route('evaluetions.index')}}"
        />
    @endslot
    
    @slot('body')
        <div class="flex justify-between mt-5 px-2 pb-2">
            <h3 class="text-lg font-semibold"></h3>
            @include('admin.evaluetion.partials.show.evaluetion_show_form')
        </div>
            @include('admin.evaluetion.partials.show.evaluetion_show_table')
    @endslot
</x-pages.index>
