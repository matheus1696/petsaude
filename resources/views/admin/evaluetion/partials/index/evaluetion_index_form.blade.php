<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalNotice" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Nova avaliação</span>
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
                    <x-form.form method="create" route="{{route('evaluetions.store')}}">    
                        <x-form.input col="12" label="Título da Avaliação" name="title"/>   
                        <x-form.input type="date" col="6" label="Data de Início" name="date_start" min="{{date('Y-m-d',strtotime('-1 month'))}}" max="{{date('Y-m-d',strtotime('+2 month'))}}"/>
                        <x-form.input type="date" col="6" label="Data de Fim" name="date_end"  min="{{date('Y-m-d',strtotime('-1 month'))}}" max="{{date('Y-m-d',strtotime('+2 month'))}}"/>
                    
                        <x-form.select col="12" label="Avaliado" id="occupation_id" name="occupation_id">
                            @foreach ($dbOccupations as $dbOccupation)
                                <option value="{{$dbOccupation->id}}">
                                    {{$dbOccupation->title}}
                                </option>
                            @endforeach
                        </x-form.select>
                    
                        <x-form.textarea col="12" label="Descrição" name="description"/>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>