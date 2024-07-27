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
        <x-table.th class="w-40">Seleção</x-table.th>
        <x-table.th>Descrição</x-table.th>
        <x-table.th class="w-32"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonalTaskMultiples as $dbEvaluetionPersonalTaskMultiple)
            <x-table.tr>
                <x-table.td>{{$dbEvaluetionPersonalTaskMultiple->title}}</x-table.td>
                <x-table.td class="line-climp-1 text-justify">{!!$dbEvaluetionPersonalTaskMultiple->description!!}</x-table.td>
                <x-table.td>
                    <x-button.minButtonModalEdit id="EvaluetionPersonalTask_{{$dbEvaluetionPersonalTaskMultiple->id}}" title="Alterar Seleção">

                        <x-form.form method="edit" route="{{route('task_multiples.update',['task_multiple'=>$dbEvaluetionPersonalTaskMultiple->id])}}">
                            <input hidden name="task_id" value="{{$dbEvaluetionPersonalTask->id}}">
                            <x-form.input col="12" label="Seleção" name="title" value="{{$dbEvaluetionPersonalTaskMultiple->title}}"/>
                        
                            <x-form.textarea col="12" label="Descrição do Campo" name="description" value="{{$dbEvaluetionPersonalTaskMultiple->description}}"/>
                        </x-form.form>
                        
                    </x-button.minButtonModalEdit>
                    <x-button.minButtonDelete route="{{route('task_multiples.destroy',['task_multiple'=>$dbEvaluetionPersonalTaskMultiple->id])}}"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>