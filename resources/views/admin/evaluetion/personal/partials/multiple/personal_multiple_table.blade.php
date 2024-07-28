<x-table.table>
    @slot('thead')
        <x-table.th class="w-40">Seleção</x-table.th>
        <x-table.th>Descrição</x-table.th>
        <x-table.th class="w-24">Order</x-table.th>
        <x-table.th class="w-24">Nota</x-table.th>
        <x-table.th class="w-32"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonalTaskMultiples as $dbEvaluetionPersonalTaskMultiple)
            <x-table.tr>
                <x-table.td>{{$dbEvaluetionPersonalTaskMultiple->title}}</x-table.td>
                <x-table.td class="line-climp-1 text-justify">{!!$dbEvaluetionPersonalTaskMultiple->description!!}</x-table.td>
                <x-table.td>
                    <div>
                        <form action="{{route('evaluetion_personals.taskMultipleOrder',['multiple'=>$dbEvaluetionPersonalTaskMultiple->id])}}" method="post" id="autoSubmitFormOrder_{{$dbEvaluetionPersonalTaskMultiple->id}}">
                            @csrf @method('PUT')
                            <select name="order" class="select2 w-full" onchange="document.getElementById('autoSubmitFormOrder_{{$dbEvaluetionPersonalTaskMultiple->id}}').submit()">
                                @for ($order = 1; $order <= $dbEvaluetionPersonalTaskMultiples->count(); $order++)
                                    <option value="{{$order}}" @if ($dbEvaluetionPersonalTaskMultiple->order == $order) selected @endif> {{$order}}º </option>
                                @endfor
                            </select>
                        </form>
                    </div>
                </x-table.td>
                <x-table.td>                    
                    <div>
                        <form action="{{route('evaluetion_personals.taskMultipleValue',['multiple'=>$dbEvaluetionPersonalTaskMultiple->id])}}" method="post" id="autoSubmitFormValue_{{$dbEvaluetionPersonalTaskMultiple->id}}">
                            @csrf @method('PUT')
                            <select name="value" class="select2 w-full" onchange="document.getElementById('autoSubmitFormValue_{{$dbEvaluetionPersonalTaskMultiple->id}}').submit()">
                                @for ($value = 1; $value <= $dbEvaluetionPersonalTaskMultiples->count(); $value++)
                                    <option value="{{$value}}" @if ($dbEvaluetionPersonalTaskMultiple->value == $value) selected @endif> {{$value}} </option>
                                @endfor
                            </select>
                        </form>
                    </div>
                </x-table.td>
                <x-table.td>
                    <x-button.minButtonModalEdit id="EvaluetionPersonalTask_{{$dbEvaluetionPersonalTaskMultiple->id}}" title="Alterar Seleção">

                        <x-form.form method="edit" route="{{route('evaluetion_personals.taskMultipleUpdate',['multiple'=>$dbEvaluetionPersonalTaskMultiple->id])}}">
                            @include('admin.evaluetion.personal.partials.multiple.personal_multiple_form')
                        </x-form.form>
                        
                    </x-button.minButtonModalEdit>
                    <x-button.minButtonDelete route="{{route('evaluetion_personals.taskMultipleDestroy',['multiple'=>$dbEvaluetionPersonalTaskMultiple->id])}}"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>