<div class="py-4">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 mt-2.5">
        @foreach ($dbEvaluetionPersonalReleaseds as $dbEvaluetionPersonalReleased)
            <button 
                data-toggle="modal"
                data-target="#modalEvaluetionPersonal_{{$dbEvaluetionPersonalReleased->id}}"
                class="max-h-60 w-full rounded-xl shadow-lg p-2 hover:text-gray-950 transition-all duration-500 inline-block bg-purple-300 hover:bg-purple-400"
                type="button"
            >
                <h4 class="py-1 text-start line-clamp-1 text-center font-semibold">{{$dbEvaluetionPersonalReleased->title}}</h4>
                <div class="px-2 text-sm py-1 text-justify text-start line-clamp-5">{!!$dbEvaluetionPersonalReleased->description!!}</div>
                <p class="w-full text-end text-xs italic">Prazo até: {{date("d/m/Y", strtotime($dbEvaluetionPersonalReleased->date_end,))}}</p>
            </button>
    
            <div class="modal fade" id="modalEvaluetionPersonal_{{$dbEvaluetionPersonalReleased->id}}" role="dialog" aria-labelledby="modalEvaluetionPersonal_{{$dbEvaluetionPersonalReleased->id}}" aria-hidden="true">
                <div class="text-left modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-lg" id="modalEvaluetionPersonal_{{$dbEvaluetionPersonalReleased->id}}">{{$dbEvaluetionPersonalReleased->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-sm">
                            <div class="border-b border-gray-400 pb-3">
                                <p><span class="font-semibold">Título:</span> {{$dbEvaluetionPersonalReleased->title}} </p>
                                <p><span class="font-semibold">Início:</span> {{$dbEvaluetionPersonalReleased->date_start}}</p>
                                <p><span class="font-semibold">Até:</span> {{$dbEvaluetionPersonalReleased->date_end}}</p>
                            </div>
                            <div class="py-3">
                                <p class="font-semibold">Descrição</p>
                                <p class="text-justify">{!!$dbEvaluetionPersonalReleased->description!!}</p>
                            </div>

                            <div class="py-2">
                                <a href="{{route('evaluetion_personals.responseShow',['evaluetion_personal'=>$dbEvaluetionPersonalReleased->id])}}" class="block w-full py-2 text-center bg-purple-800 hover:bg-purple-600 text-white shadown-xl rounded-lg">Responder</a>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>