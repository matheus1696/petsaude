<div class="flex flex-col justify-between overflow-hidden bg-yellow-500 rounded-lg shadow-md"> 
        <div class="px-1 py-2">
            <p class="px-3 text-sm text-center text-black min-h-14">{{$item->title}}</p>
            <h5 class="text-lg text-center text-black">
                @foreach ($dbContacts as $dbContact)
                    @if ($dbContact->establishment_id === $item->id)
                        @if ($dbContact->type_contact === "Main")
                            {{$dbContact->contact}}
                        @endif
                    @endif
                @endforeach
            </h5>
        </div>   
           
        <a href=" {{ route('contacts.show',['contact'=>$item->id]) }} ">            
            <div class="py-2 text-xs font-semibold text-center text-white bg-purple-900 shadow-lg hover:bg-purple-800">
                <span class="pr-2">Lista de Ramais Internos</span>
                <i class="fas fa-arrow-circle-right"></i>                            
            </div>
        </a>
</div>