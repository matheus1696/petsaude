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
                <x-table.td class="line-climp-3 text-justify">{{$dbNotice->description}}</x-table.td>
                <x-table.td class="line-climp-3 text-justify">{{$dbNotice->Para}}</x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>