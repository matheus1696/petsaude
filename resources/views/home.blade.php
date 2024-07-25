<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Olá, {{$dbUser->name}}"/>
    @endslot
    @slot('body')
        <div class="flex flex-col md:flex-row  gap-2">
            <div class="flex-1 font-semibold">
                Informações PET
            </div>
            <div class="w-72">
                <h3 class="py-2 font-semibold text-center ">Quadros de Avisos</h3>
                <ul class="flex flex-col gap-5 text-gray-700">
                    @if ($alertPassword)
                        <li class="max-h-20 bg-red-300 rounded-xl shadow-lg p-2 hover:bg-red-400 hover:text-gray-950 transition-all duration-500">
                            <h4 class="py-1 line-clamp-1 text-xs font-bold">- Alerta de Alteração de Senha</h4>
                            <p class="text-xs">No primeiro acesso recomendamos a substituição da senha, <span class="italic underline font-semibold rounded-full px-1"><a href="" class="text-black">clique aqui</a></span> para realizar a troca da senha</p>
                        </li>
                    @endif
                    @foreach ($dbNotices as $dbNotice)
                        <li>
                            <button 
                                data-toggle="modal"
                                data-target="#modalNotice_{{$dbNotice->id}}"
                                    class="max-h-28 w-full {{$dbNotice->NoticeLevel->color}} rounded-xl shadow-lg p-2 hover:{{$dbNotice->NoticeLevel->color_hover}} hover:text-gray-950 transition-all duration-500 inline-block"
                                type="button"
                            >
                                <h4 class="pl-2 text-xs text-start line-clamp-1 font-bold">- {{$dbNotice->title}}</h4>
                                <p class="pl-2 text-xs py-1 text-start line-clamp-3">{{$dbNotice->description}}, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi facere corrupti sit, nam nihil quos. Laboriosam corrupti doloribus dolorem rem labore sed deserunt, mollitia vero incidunt? Architecto corporis ratione exercitationem.</p>
                                <p class="w-full text-end text-xs italic">{{date("d/m/Y", strtotime($dbNotice->created_at,))}}</p>
                            </button>
                            
                            <div class="modal fade" id="modalNotice_{{$dbNotice->id}}" role="dialog" aria-labelledby="modalNotice_{{$dbNotice->id}}" aria-hidden="true">
                                <div class="text-left modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-lg" id="modalNotice_{{$dbNotice->id}}">{{$dbNotice->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-justify">{{$dbNotice->description}}, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi facere corrupti sit, nam nihil quos. Laboriosam corrupti doloribus dolorem rem labore sed deserunt, mollitia vero incidunt? Architecto corporis ratione exercitationem.</p>
                                            
                                            <div class="mt-10 flex justify-end">
                                                <a href="{{route('notices.markRead',['notice'=>$dbNotice->id])}}" class="text-sm bg-purple-600 hover:bg-purple-700 shadow-lg rounded-lg text-white px-2 py-1">Marca como Lido</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        
        
    @endslot
</x-pages.index>
