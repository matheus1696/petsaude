@if ($errors->any())
    <div class="relative px-4 py-3 mb-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
        <span class="block sm:inline">Ops! encontramos um erro ao enviar o formulário. Você poderia, por gentileza, revisar os campos?</span>
        <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<x-table.table>
    @slot('thead')
        <x-table.th>Pergunta</x-table.th>
        <x-table.th class="w-40">Tipo</x-table.th>
        <x-table.th class="w-32"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonalTaskMultiples as $dbEvaluetionPersonalTask)
            <x-table.tr>
                <x-table.td class="line-climp-3 text-justify">{{$dbEvaluetionPersonalTask->title}}</x-table.td>
                <x-table.td class="text-center">
                    @if ($dbEvaluetionPersonalTask->type == 'Múltipla')
                        <x-button.minButtonShow route="{{route('task_multiples.show',['task_multiple'=>$dbEvaluetionPersonalTask->id])}}" />
                    @else
                        {{$dbEvaluetionPersonalTask->type}}
                    @endif
                </x-table.td> 
                <x-table.td>
                    <x-button.minButtonModalEdit id="EvaluetionPersonalTask_{{$dbEvaluetionPersonalTask->id}}" title="Alterar Pergunta">

                        <x-form.form route="{{route('evaluetion_personal_tasks.update',['evaluetion_personal_task'=>$dbEvaluetionPersonalTask->id])}}" method="edit">
                           
                            <x-form.input col="12" label="Pergunta" name="title" value="{{$dbEvaluetionPersonalTask->title}}"/>

                            <x-form.select col="12" label="Tipo" id="type" name="type">
                                <option value="Múltipla" @if($dbEvaluetionPersonalTask->type === "Múltipla") selected @endif>Múltipla Escolha</option>
                                <option value="Texto Livre" @if($dbEvaluetionPersonalTask->type === "Texto Livre") selected @endif>Texto</option>
                            </x-form.select>
                        
                            <x-form.textarea col="12" label="description" name="description" value="{{$dbEvaluetionPersonalTask->description}}"/>
                            
                        </x-form.form>
                        
                    </x-button.minButtonModalEdit>
                    <x-button.minButtonDelete route="{{route('evaluetion_personal_tasks.destroy',['evaluetion_personal_task'=>$dbEvaluetionPersonalTask->id])}}"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>