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

<x-table.table :db="$dbEvaluetions">
    @slot('thead')
        <x-table.th>Título</x-table.th>
        <x-table.th class="w-60">Avaliado</x-table.th>
        <x-table.th class="w-28">Data Início</x-table.th>
        <x-table.th class="w-28">Data Fim</x-table.th>
        <x-table.th class="w-28"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetions as $dbEvaluetion)
            <x-table.tr>
                <x-table.td>{{$dbEvaluetion->title}}</x-table.td>
                <x-table.td>{{$dbEvaluetion->CompanyOccupation->title}}</x-table.td>
                <x-table.td>{{date('d/m/Y', strtotime($dbEvaluetion->date_start))}}</x-table.td>
                <x-table.td>{{date('d/m/Y', strtotime($dbEvaluetion->date_end))}}</x-table.td>
                <x-table.td> <a href="{{route('evaluetions.show', ['evaluetion'=>$dbEvaluetion->id])}}">Questões</a> </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>