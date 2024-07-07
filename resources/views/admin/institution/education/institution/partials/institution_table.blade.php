<x-table.table :db="$db">
    @slot('thead')
        <x-table.th class="w-28">Sigla</x-table.th>
        <x-table.th>Instituição</x-table.th>
        <x-table.th class="w-28">Status</x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->acronym}}</x-table.td>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('financial_blocks.update',['financial_block'=>$item->id])}}" name="status"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>