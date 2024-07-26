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

<x-table.table :db="$dbEvaluetionPersonals">
    @slot('thead')
        <x-table.th class="w-48">Título</x-table.th>
        <x-table.th>Descrição</x-table.th>
        <x-table.th class="w-40">Para</x-table.th>
        <x-table.th class="w-24"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonals as $dbEvaluetionPersonal)
            <x-table.tr>
                <x-table.td>{{$dbEvaluetionPersonal->title}}</x-table.td>
                <x-table.td class="line-climp-3 text-justify">{!!$dbEvaluetionPersonal->description!!}</x-table.td>
                <x-table.td class="line-climp-3 text-center">
                    @if ($dbEvaluetionPersonal->to_specific_group_id === NULL)
                        Todos os Usuários
                    @else
                        {{$dbEvaluetionPersonal->to_specific_group_id}}
                    @endif
                </x-table.td>                
                <x-table.td>
                    <x-button.minButtonShow route="{{route('evaluetion_personals.show',['evaluetion_personal'=>$dbEvaluetionPersonal->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>