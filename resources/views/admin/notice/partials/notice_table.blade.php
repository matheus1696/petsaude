<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Título</x-table.th>
        <x-table.th>Descrição</x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>{{$item->description}}</x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>