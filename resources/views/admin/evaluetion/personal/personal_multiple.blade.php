<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Pergunta: {{$dbEvaluetionPersonalTask->title}}" 
            routeBack="{{route('evaluetion_personals.show',['evaluetion_personal'=>$dbEvaluetionPersonalTask->id])}}"
        />
    @endslot
    
    @slot('body')
        <div class="flex justify-between px-2 pb-2 mt-5">
            <h3 class="text-lg font-semibold">Seleções</h3>
            @include('admin.evaluetion.personal.partials.multiple.personal_multiple_form')
        </div>
        @include('admin.evaluetion.personal.partials.multiple.personal_multiple_table')
    @endslot
</x-pages.index>
