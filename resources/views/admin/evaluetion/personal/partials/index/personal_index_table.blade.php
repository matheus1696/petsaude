<x-table.table :db="$dbEvaluetionPersonals">
    @slot('thead')
        <x-table.th class="w-60">Título</x-table.th>
        <x-table.th class="w-32">Início</x-table.th>
        <x-table.th class="w-32">Fim</x-table.th>
        <x-table.th>Descrição</x-table.th>
        <x-table.th class="w-40">Grupo</x-table.th>
        <x-table.th class="w-24">Liberado</x-table.th>
        <x-table.th class="w-32">Ações</x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbEvaluetionPersonals as $dbEvaluetionPersonal)
            <x-table.tr>
                <x-table.td>{{$dbEvaluetionPersonal->title}}</x-table.td>
                <x-table.td>
                    @if ($dbEvaluetionPersonal->date_start == NULL) @else
                        {{date("d/m/Y",strtotime($dbEvaluetionPersonal->date_start))}}
                    @endif
                </x-table.td>
                <x-table.td>
                    @if ($dbEvaluetionPersonal->date_end == NULL) @else
                        {{date("d/m/Y",strtotime($dbEvaluetionPersonal->date_end))}}
                    @endif
                </x-table.td>
                <x-table.td class="text-justify"><div class="max-h-40 line-clamp-3">{!!$dbEvaluetionPersonal->description!!}</div></x-table.td>
                
                <x-table.td class="line-climp-3 text-center">
                    @if ($dbEvaluetionPersonal->to_specific_group_id === NULL)
                        Todos os Usuários
                    @else
                        <div class="max-h-40 line-clamp-3">
                            {{$dbEvaluetionPersonal->CompanyOrganization->acronym}} - {{$dbEvaluetionPersonal->CompanyOrganization->title}}
                        </div>
                    @endif
                </x-table.td>                 
                
                <x-table.td>
                    <x-button.buttonStatus condition="{{$dbEvaluetionPersonal->released}}" route="{{route('evaluetion_personals.released',['evaluetion_personal'=>$dbEvaluetionPersonal->id])}}" name="released" />
                </x-table.td>               
                
                <x-table.td>
                    <x-button.minButtonShow title="Acessar perguntas" route="{{route('evaluetion_personals.show',['evaluetion_personal'=>$dbEvaluetionPersonal->id])}}"/>
                    <x-button.minButtonModal title="Alterar avaliação" id="EvaluetionPersonal_{{$dbEvaluetionPersonal->id}}">                            
                        <x-form.form method="edit" route="{{route('evaluetion_personals.update',['evaluetion_personal'=>$dbEvaluetionPersonal->id])}}">
                            @include('admin.evaluetion.personal.partials.index.personal_index_form')
                        </x-form.form>
                    </x-button.minButtonModal>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>