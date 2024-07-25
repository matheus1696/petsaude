<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalNotice" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Nova Questão</span>
    </button>

    <div id="modalNotice" class="modal fade" role="dialog" aria-labelledby="modalNotice" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalNotice">Nova Avaliação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    <x-form.form method="create" route="{{route('evaluetions.taskStore')}}">
                        <input hidden name="evaluetion_id" value="{{$dbEvaluetion->id}}">
                    
                        <x-form.select col="12" label="Tipo" id="type" name="type">
                            <option value="Texto">Texto</option>
                            <option value="Múltipla">Múltipla Escolha</option>
                        </x-form.select>

                        <x-form.textarea col="12" label="Questão" name="question"/>                        

                        <x-form.textarea col="12" label="Descrição" name="description"/>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>