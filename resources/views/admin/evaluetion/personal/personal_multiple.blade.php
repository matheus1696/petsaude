<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Pergunta: {{$dbEvaluetionPersonalTasks->title}}" 
            routeBack="{{route('evaluetion_personals.show',['evaluetion_personal'=>$dbEvaluetionPersonalTasks->evaluetion_personal_id])}}"
        />
    @endslot
    
    @slot('body')
        <div class="flex justify-between px-2 pb-2 mt-5">
            <h3 class="text-lg font-semibold">Seleções</h3>
            <x-button.buttonModal btnTitle="Novo Tipo de Seleção" id="evaluetion_task">
                <x-form.form method="create" route="{{route('evaluetion_personals.taskMultipleStore',['task'=>$dbEvaluetionPersonalTasks->id])}}">
                    @include('admin.evaluetion.personal.partials.multiple.personal_multiple_form')
                </x-form.form>
            </x-button.buttonModal>
        </div>
        @include('admin.evaluetion.personal.partials.multiple.personal_multiple_table')
    @endslot
</x-pages.index>
