<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button
        title="{{$btnTitle}}"
        data-toggle="modal"
        data-target="#modalForm_{{$id}}"
        class="px-2 py-1 text-xs rounded-lg shadow-md text-{{$textoColor ?? 'white'}} bg-{{$bgColor ?? 'purple'}}-700 hover:bg-{{$bgColor ?? 'purple'}}-600" type="button"
    >
        <i class="{{$icon ?? 'fas fa-check'}}"></i>
        <span class="ml-1 font-semibold">{{$btnTitle ?? ''}}</span>
    </button>

    <div id="modalForm_{{$id}}" class="modal fade" role="dialog" aria-labelledby="modalForm_{{$id}}" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalForm_{{$id}}">{{$btnTitle}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>