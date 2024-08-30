<!-- Search -->
<x-search.formSearch>
    <x-search.selectSearch label="Nome" id="searchEmail" class="flex-1">
        @foreach ($dbUsers as $dbUser)
            <option 
                value="{{$dbUser->email}}"
                @isset($search['searchEmail'])
                    @if($dbUser->email == $search['searchEmail']) selected @endif
                @endisset
            >
                {{$dbUser->name}} - {{$dbUser->email}}
            </option>
        @endforeach
    </x-search.selectSearch>
</x-search.formSearch>