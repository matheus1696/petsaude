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

<x-table.table :db="$dbEvaluetionTasks">
    @slot('thead')
        <x-table.th>Questões</x-table.th>
        <x-table.th class="w-10">Tipo</x-table.th>
        <x-table.th class="w-10">Ordem</x-table.th>
        <x-table.th class="w-28"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionTasks as $dbEvaluetionTask)
            <x-table.tr>
                <x-table.td>
                    <div class="flex items-center">{!!$dbEvaluetionTask->question!!}</div>
                </x-table.td>
                <x-table.td>{{$dbEvaluetionTask->type}}</x-table.td>
                <x-table.td>{{$dbEvaluetionTask->order}}</x-table.td>
                <x-table.td>
                    <x-button.minButtonModalEdit id="Evaluetion_{{$dbEvaluetionTask->id}}" title="Questão">

                        <x-form.form route="{{route('evaluetions.taskUpdate',['evaluetion'=>$dbEvaluetionTask->id])}}" method="edit">
                            
                            <x-form.select col="12" label="Tipo" id="type" name="type">
                                <option value="Texto" @if($dbEvaluetionTask->type === "Texto") selected @endif>Texto</option>
                                <option value="Múltipla" @if($dbEvaluetionTask->type === "Múltipla") selected @endif>Múltipla Escolha</option>
                            </x-form.select>
    
                            <x-form.textarea col="12" label="Questão" name="question" value="{{$dbEvaluetionTask->question}}"/>

                            <x-form.textarea col="12" label="Descrição" name="description" value="{{$dbEvaluetionTask->description}}"/>
                            
                        </x-form.form>
                        
                    </x-button.minButtonModalEdit>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>