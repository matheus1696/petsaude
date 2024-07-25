<!-- Adicionar Item -->
<div class="inline-block">
    <!-- Modal toggle -->
    <button data-toggle="modal" data-target="#modalNotice" class="px-2 py-1 text-xs text-white bg-purple-700 rounded-lg shadow-md hover:bg-purple-600" type="button">
        <i class="fas fa-plus"></i>
        <span class="ml-1 font-semibold">Add. Aviso</span>
    </button>

    <div id="modalNotice" class="modal fade" role="dialog" aria-labelledby="modalNotice" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-lg font-semibold modal-title" id="modalNotice">Criar Aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-4 modal-body">
                    <x-form.form method="create" route="{{route('notices.store')}}">    
                        <x-form.input col="6" label="Título" name="title"/>
                    
                        <x-form.select col="2" label="Tipo" id="notice_level_id" name="notice_level_id">
                            @foreach ($dbNoticeLevels as $dbNoticeLevel)
                                <option value="{{$dbNoticeLevel->id}}">
                                    {{$dbNoticeLevel->title}}
                                </option>
                            @endforeach
                        </x-form.select>
                    
                        <x-form.select col="4" label="Para" id="to_specific_users" name="to_specific_users">
                            <option value="all">Todos os usuários</option>
                            @foreach ($dbOrganizations as $dbOrganization)
                                <option value="{{$dbOrganization->id}}" class="line-climp-1">
                                    {{$dbOrganization->acronym}} -  {{$dbOrganization->title}}
                                </option>
                            @endforeach
                        </x-form.select>
                    
                        <x-form.textarea col="12" label="Aviso" name="description"/>
                    </x-form.form>
                </div>
            </div>
        </div>
    </div>
</div>