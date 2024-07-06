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
            <div class="w-80">
                <h3 class="py-2 font-semibold text-center ">Quadros de Avisos</h3>
                <ul class="text-xs flex flex-col gap-2 text-gray-700">
                    @if (!$alertPassword)                        
                        <li class="max-h-20 bg-red-300 rounded-xl shadow-lg p-2 hover:bg-red-400 hover:text-gray-950 transition-all duration-500">
                            <h4 class="line-clamp-1 font-bold">- Alerta de Alteração de Senha</h4>
                            <p>No primeiro acesso recomendamos a substituição da senha, <span class="italic underline font-semibold  rounded-full px-1"><a href="" class="text-black">clique aqui</a></span> para realizar a troca da senha</p>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        
        
    @endslot
</x-pages.index>
