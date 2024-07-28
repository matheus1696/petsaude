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