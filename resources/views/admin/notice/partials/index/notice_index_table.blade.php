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

<x-table.table :db="$dbNotices">
    @slot('thead')
        <x-table.th class="w-32">Título</x-table.th>
        <x-table.th>Descrição</x-table.th>
        <x-table.th class="w-32">Para</x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbNotices as $dbNotice)
            <x-table.tr>
                <x-table.td>{{$dbNotice->title}}</x-table.td>
                <x-table.td class="line-climp-3 text-justify">{!!$dbNotice->description!!}</x-table.td>
                <x-table.td class="line-climp-3 text-center">{{$dbNotice->to_specific_users}}</x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>