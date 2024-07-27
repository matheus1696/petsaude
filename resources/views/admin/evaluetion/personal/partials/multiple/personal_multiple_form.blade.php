<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalEvaluetionPersonalTaskMultiple" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Novo campo de escolha</span>
    </button>

    <div id="modalEvaluetionPersonalTaskMultiple" class="modal fade" role="dialog" aria-labelledby="modalEvaluetionPersonalTaskMultiple" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalEvaluetionPersonalTaskMultiple">Criar campo de escolha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    <x-form.form method="create" route="{{route('task_multiples.store')}}">
                        <input hidden name="task_id" value="{{$dbEvaluetionPersonalTask->id}}">
                        <x-form.input col="12" label="Seleção" name="title"/>
                    
                        <x-form.textarea col="12" label="Descrição do Campo" name="description"/>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>