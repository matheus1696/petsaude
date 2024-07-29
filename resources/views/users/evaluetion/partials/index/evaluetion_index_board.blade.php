<div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-2.5">
    @foreach ($dbEvaluetionPersonals as $dbEvaluetionPersonal)
        <button 
            data-toggle="modal"
            data-target="#modalEvaluetionPersonal_{{$dbEvaluetionPersonal->id}}"
                class="max-h-32 w-full rounded-xl shadow-lg p-2 hover:text-gray-950 transition-all duration-500 inline-block @if($dbEvaluetionPersonal->mark_read) bg-gray-300 hover:bg-gray-400 @else {{$dbEvaluetionPersonal->color}} hover:{{$dbEvaluetionPersonal->color_hover}} @endif"
            type="button"
        >
            <h4 class="pl-2 text-xs text-start line-clamp-1 font-bold">- {{$dbEvaluetionPersonal->title}}</h4>
            <div class="pl-2 text-xs py-1 text-start line-clamp-4">{!!$dbEvaluetionPersonal->description!!}</div>
            <p class="w-full text-end text-xs italic">{{date("d/m/Y", strtotime($dbEvaluetionPersonal->created_at,))}}</p>
        </button>

        <div class="modal fade" id="modalEvaluetionPersonal_{{$dbEvaluetionPersonal->id}}" role="dialog" aria-labelledby="modalEvaluetionPersonal_{{$dbEvaluetionPersonal->id}}" aria-hidden="true">
            <div class="text-left modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-lg" id="modalEvaluetionPersonal_{{$dbEvaluetionPersonal->id}}">{{$dbEvaluetionPersonal->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-justify">{{$dbEvaluetionPersonal->description}}</p>
                        
                        <div class="mt-10 flex justify-end">
                            <a href="{{route('notices.markRead',['notice'=>$dbEvaluetionPersonal->id])}}" class="text-sm bg-purple-600 hover:bg-purple-700 shadow-lg rounded-lg text-white px-2 py-1">
                                @if ($dbEvaluetionPersonal->mark_read)
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