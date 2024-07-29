<div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    @foreach ($dbNotices as $dbNotice)
        <button 
        data-toggle="modal"
        data-target="#modalNotice_{{$dbNotice->id}}"
            class="max-h-32 w-full rounded-xl shadow-lg p-2 hover:text-gray-950 transition-all duration-500 inline-block @if($dbNotice->mark_read) bg-gray-300 hover:bg-gray-400 @else {{$dbNotice->NoticeBoard->NoticeLevel->color}} hover:{{$dbNotice->NoticeBoard->NoticeLevel->color_hover}} @endif"
        type="button"
        >
            <h4 class="pl-2 text-xs text-start line-clamp-1 font-bold">- {{$dbNotice->NoticeBoard->title}}</h4>
            <div class="pl-2 text-xs py-1 text-start line-clamp-4">{!!$dbNotice->NoticeBoard->description!!} Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum fugiat vitae minus libero accusamus, hic reprehenderit recusandae enim consequuntur nobis error culpa dicta rerum consequatur veritatis exercitationem explicabo quia minima!</div>
            <p class="w-full text-end text-xs italic">{{date("d/m/Y", strtotime($dbNotice->created_at,))}}</p>
        </button>

        <div class="modal fade" id="modalNotice_{{$dbNotice->id}}" role="dialog" aria-labelledby="modalNotice_{{$dbNotice->id}}" aria-hidden="true">
            <div class="text-left modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-lg" id="modalNotice_{{$dbNotice->id}}">{{$dbNotice->NoticeBoard->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify">{{$dbNotice->NoticeBoard->description}}</p>
                        
                        <div class="mt-10 flex justify-end">
                            <a href="{{route('notices.markRead',['notice'=>$dbNotice->id])}}" class="text-sm bg-purple-600 hover:bg-purple-700 shadow-lg rounded-lg text-white px-2 py-1">
                                @if ($dbNotice->mark_read)
                                    Desmarca como Lido
                                @else
                                    Marca como Lido
                                @endif
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>