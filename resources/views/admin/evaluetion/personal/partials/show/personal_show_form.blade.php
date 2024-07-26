<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalEvaluetionPersonalTask" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Nova Pergunta</span>
    </button>

    <div id="modalEvaluetionPersonalTask" class="modal fade" role="dialog" aria-labelledby="modalEvaluetionPersonalTask" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalEvaluetionPersonalTask">Criar Pergunta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    <x-form.form method="create" route="{{route('evaluetion_personal_tasks.store')}}">
                        <input hidden name="evaluetion_personal_id" value="{{$dbEvaluetionPersonals->id}}">
                        <x-form.input col="12" label="Pergunta" name="title"/>

                        <x-form.select col="12" label="Tipo" id="type" name="type">
                            <option value="Múltipla">Múltipla Escolha</option>
                            <option value="Texto Livre">Texto</option>
                        </x-form.select>
                    
                        <x-form.textarea col="12" label="description" name="description"/>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>