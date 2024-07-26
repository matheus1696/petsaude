<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalEvaluetionPersonal" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Nova auto avaliação</span>
    </button>

    <div id="modalEvaluetionPersonal" class="modal fade" role="dialog" aria-labelledby="modalEvaluetionPersonal" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalEvaluetionPersonal">Criar Auto Avaliação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    <x-form.form method="create" route="{{route('evaluetion_personals.store')}}">    
                        <x-form.input col="12" label="Título" name="title"/>

                        <x-form.select col="12" label="Para" id="to_specific_group_id" name="to_specific_group_id">
                            <option value="all">Todos os usuários</option>
                            @foreach ($dbOrganizations as $dbOrganization)
                                <option value="{{$dbOrganization->id}}" class="line-climp-1">
                                    {{$dbOrganization->acronym}} -  {{$dbOrganization->title}}
                                </option>
                            @endforeach
                        </x-form.select>
                    
                        <x-form.textarea col="12" label="description" name="description"/>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>