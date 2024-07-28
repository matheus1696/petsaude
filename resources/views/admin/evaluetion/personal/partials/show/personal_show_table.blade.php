<x-table.table :db="$dbEvaluetionPersonalTasks">
    @slot('thead')
        <x-table.th>Pergunta</x-table.th>
        <x-table.th class="w-40">Tipo</x-table.th>        
        <x-table.th class="w-24">Ordem</x-table.th>
        <x-table.th class="w-32"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonalTasks as $dbEvaluetionPersonalTask)
            <x-table.tr>
                <x-table.td class="text-justify">{{$dbEvaluetionPersonalTask->title}}</x-table.td>
                <x-table.td>
                    @if ($dbEvaluetionPersonalTask->type == 'Múltipla')
                        <x-button.minButtonShow btnTitle="Multipla Escolha" route="{{route('evaluetion_personals.taskShow',['task'=>$dbEvaluetionPersonalTask->id])}}" />
                    @else
                        {{$dbEvaluetionPersonalTask->type}}
                    @endif
                </x-table.td> 
                <x-table.td>
                    <div>
                        <form action="{{route('evaluetion_personals.taskOrder',['task'=>$dbEvaluetionPersonalTask->id])}}" method="post" id="autoSubmitFormOrder_{{$dbEvaluetionPersonalTask->id}}">
                            @csrf @method('PUT')
                            <select name="order" class="select2 w-full" onchange="document.getElementById('autoSubmitFormOrder_{{$dbEvaluetionPersonalTask->id}}').submit()">
                                @for ($order = 1; $order <= $dbEvaluetionPersonalTasks->count(); $order++)                                        
                                    <option value="{{$order}}" @if ($dbEvaluetionPersonalTask->order == $order) selected @endif> {{$order}}º </option>
                                @endfor
                            </select>
                        </form>
                    </div>
                </x-table.td>
                <x-table.td>
                    <x-button.minButtonModalEdit title="Alterar Pergunta" id="EvaluetionPersonalTask_{{$dbEvaluetionPersonalTask->id}}">
                        <x-form.form route="{{route('evaluetion_personals.taskUpdate',['task'=>$dbEvaluetionPersonalTask->id])}}" method="edit">
                            @include('admin.evaluetion.personal.partials.show.personal_show_form')
                        </x-form.form>
                    </x-button.minButtonModalEdit>
                    <x-button.minButtonDelete route="{{route('evaluetion_personals.taskDestroy',['task'=>$dbEvaluetionPersonalTask->id])}}"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>