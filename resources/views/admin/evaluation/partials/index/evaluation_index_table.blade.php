<x-table.table>
    @slot('thead')
        <x-table.th>Tipo</x-table.th>
        <x-table.th class="w-32">Início</x-table.th>
        <x-table.th class="w-32">Fim</x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluations as $dbEvaluation)
            <x-table.tr>
                <x-table.td>{{$dbEvaluation->type}}</x-table.td>
                <x-table.td>{{$dbEvaluation->date_start}}</x-table.td>
                <x-table.td>{{$dbEvaluation->date_end}}</x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>