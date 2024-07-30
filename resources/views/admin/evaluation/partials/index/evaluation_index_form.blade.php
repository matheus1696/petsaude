<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalEvaluetion" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Nova avaliação</span>
    </button>

    <div id="modalEvaluetion" class="modal fade" role="dialog" aria-labelledby="modalEvaluetion" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalEvaluetion">Criar avaliação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    <x-form.form route="{{route('evaluations.store')}}" method="create">
                        <x-form.input label="Título" name="title" />
                        <x-form.select label="Grupo" name="type">
                            <option value="all">Todos os Usuário</option>
                            @foreach ($dbOrganizations as $dbOrganization)
                                <option value="{{$dbOrganization}}">{{$dbOrganization->acronym}} - {{$dbOrganization->title}}</option>
                            @endforeach
                        </x-form.select>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>