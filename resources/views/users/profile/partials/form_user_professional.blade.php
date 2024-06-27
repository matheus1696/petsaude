<!-- Inicio de Componentização do Conteiner -->
<div class="md:w-1/2 m-auto py-12">
    <x-conteiner>
        <h3 class="mb-3 text-lg font-semibold text-center">Dados do Profissionais</h3>

        <div class="px-1 mb-4 mt-2 flex flex-col gap-4">
            <div class="text-sm">            
                <p class="mb-2"><strong>Grupo:</strong> </p>
                <p class="p-2 rounded-lg bg-gray-200">{{$db->CompanyOrganization->acronym ?? ''}} {{$db->CompanyOrganization->title ?? ''}} </p>
            </div>
            <div class="text-sm">
                <p class="mb-2"><strong>Função no Grupo:</strong></p>
                <p class="p-2 rounded-lg bg-gray-200">{{$db->CompanyOccupation->title ?? ''}}</p>
            </div>
        </div>
    </x-conteiner>
    <div class="text-center">
        <p class="text-xs text-gray-400">* Em caso de alterações, entre em contato pelo email: cnep.caruaru@gmail.com.br ou pelo nosso whatsapp: (81)9-98384-4299</p>
    </div>
</div>