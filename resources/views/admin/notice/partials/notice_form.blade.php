<x-conteiner>
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
</x-conteiner>