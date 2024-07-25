<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Olá, {{$dbUser->name}}"/>
    @endslot
    @slot('body')
        <div class="flex flex-col md:flex-row gap-2">
            <div class="flex-1">
                Informações PET
            </div>
            <div class="w-72">
                <h3 class="py-2 font-semibold text-center ">Quadros de Avisos</h3>
                <ul class="text-xs flex flex-col gap-2 text-gray-700">
                    @if ($alertPassword)
                        <li class="max-h-20 bg-red-300 rounded-xl shadow-lg p-2 hover:bg-red-400 hover:text-gray-950 transition-all duration-500">
                            <h4 class="line-clamp-1 font-bold">- Alerta de Alteração de Senha</h4>
                            <p>No primeiro acesso recomendamos a substituição da senha, <span class="italic underline font-semibold rounded-full px-1"><a href="" class="text-black">clique aqui</a></span> para realizar a troca da senha</p>
                        </li>
                    @endif
                    @foreach ($dbNotices as $dbNotice)
                        <li>
                            <a href="" class="max-h-24 w-full {{$dbNotice->NoticeLevel->color}} rounded-xl shadow-lg p-2 hover:{{$dbNotice->NoticeLevel->color_hover}} hover:text-gray-950 transition-all duration-500 inline-block">
                                <h4 class="pl-2 line-clamp-1 font-bold">- {{$dbNotice->title}}</h4>
                                <p class="pl-2 line-clamp-3">{{$dbNotice->description}}, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi facere corrupti sit, nam nihil quos. Laboriosam corrupti doloribus dolorem rem labore sed deserunt, mollitia vero incidunt? Architecto corporis ratione exercitationem.</p>
                                <p class="w-full text-end text-xs italic">{{date("d/m/Y", strtotime($dbNotice->created_at,))}}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        
        
    @endslot
</x-pages.index>
