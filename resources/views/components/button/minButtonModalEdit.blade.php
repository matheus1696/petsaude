<div class="inline-block">
    <!-- Modal toggle -->
    <button 
        data-toggle="modal"
        data-target="#modalEdit_{{$id}}"
        class="px-2 py-1 m-1 text-xs text-black bg-{{$color ?? 'yellow'}}-400 rounded-lg shadow-md hover:bg-{{$color ?? 'yellow'}}-500"  
        type="button"
    >
        <div class="flex items-center justify-center gap-2">
            <i class="{{$icon ?? "fas fa-pen"}} text-xs"></i>
            @isset($btnTitle) 
                <span class="font-semibold">{{$btnTitle}}</span>
            @endisset
        </div>
    </button>

    <div class="modal fade" id="modalEdit_{{$id}}" role="dialog" aria-labelledby="modalLabelEdit_{{$id}}" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabelEdit_{{$id}}">{{$title}}</h5>
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
