<!-- Inicio de Componentização do Conteiner -->
<div class="md:w-1/2 m-auto py-12">
    <x-conteiner>
        <h3 class="mb-3 text-lg font-semibold text-center">Dados Bancários</h3>

        @if (isset($db->CompanyOccupation->title))

            @if ($db->CompanyOccupation->title == "Estudante Voluntário")
                <div class="h-40 flex justify-center items-center pb-3">
                    Estudante Voluntário
                </div>                    
            @else
                <div class="px-1 mb-4 mt-2 flex flex-col gap-4">
                    <div class="text-sm">            
                        <p class="mb-2"><strong>Tipo de Conta:</strong> </p>
                        <p class="p-2 rounded-lg bg-gray-200">{{$db->bank_account_type ?? ''}}</p>
                    </div>
                    <div class="text-sm">            
                        <p class="mb-2"><strong>Banco:</strong> </p>
                        <p class="p-2 rounded-lg bg-gray-200">{{$db->bank_name ?? ''}}</p>
                    </div>
                    <div class="text-sm">            
                        <p class="mb-2"><strong>Agência:</strong> </p>
                        <p class="p-2 rounded-lg bg-gray-200">{{$db->bank_agency ?? ''}}</p>
                    </div>
                    <div class="text-sm">
                        <p class="mb-2"><strong>Conta - DV:</strong></p>
                        <p class="p-2 rounded-lg bg-gray-200">{{$db->bank_account ?? ''}}</p>
                    </div>
                </div>                    
            @endif
            
        @else        
            <div class="h-40 flex justify-center items-center pb-3">
                Participante sem Grupo ou Função Atribuida
            </div>                
        @endif
    </x-conteiner>
    <div class="text-center">
        <p class="text-xs text-gray-400">* Em caso de alterações, entre em contato pelo email: cnep.caruaru@gmail.com.br ou pelo nosso whatsapp: (81)9-98384-4299</p>
    </div>
</div>