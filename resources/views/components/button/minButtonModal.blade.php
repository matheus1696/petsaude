<div class="inline-block">
    <!-- Modal toggle -->
    <button 
        title="{{$title}}"
        data-toggle="modal"
        data-target="#min_Button_Modal_{{$id}}"
        class="px-2 py-1 m-1 text-xs rounded-lg text-{{$textoColor ?? 'white'}} bg-{{$bgColor ?? 'purple'}}-700 hover:bg-{{$bgColor ?? 'purple'}}-900"
        type="button"
    >
        <div class="flex items-center justify-center gap-2">
            <i class="{{$icon ?? "fas fa-pen"}} text-xs"></i>
            @isset($btnTitle)
                <span class="font-semibold">{{$btnTitle}}</span>
            @endisset
        </div>
    </button>

    <div class="modal fade" id="min_Button_Modal_{{$id}}" role="dialog" aria-labelledby="min_Button_Modal_{{$id}}" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="min_Button_Modal_{{$id}}">{{$title ?? $btnTitle}}</h5>
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
