<x-table.table :db="$dbEvaluetionPersonalTasks">
    @slot('thead')
        <x-table.th>Pergunta</x-table.th>
        <x-table.th class="w-40">Tipo</x-table.th>
        <x-table.th class="w-32"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonalTasks as $dbEvaluetionPersonalTask)
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
                    <x-button.minButtonModalEdit title="Alterar Pergunta" id="EvaluetionPersonalTask_{{$dbEvaluetionPersonalTask->id}}">
                        <x-form.form route="{{route('evaluetion_personals.update',['task'=>$dbEvaluetionPersonalTask->id])}}" method="edit">
                            @include('admin.evaluetion.personal.partials.show.personal_show_form')
                        </x-form.form>
                    </x-button.minButtonModalEdit>
                    <x-button.minButtonDelete route="{{route('evaluetion_personals.destroy',['task'=>$dbEvaluetionPersonalTask->id])}}"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>