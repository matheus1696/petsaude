
<x-form.input col="8" label="Título" name="title"/>

<x-form.select col="6" label="Tipo" id="notice_level_id" name="notice_level_id">
    @foreach ($dbNoticeLevels as $dbNoticeLevel)
        <option value="{{$dbNoticeLevel->id}}">
            {{$dbNoticeLevel->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Para" id="to_specific_user_id" name="to_specific_user_id">
    <option value="all">Todos os usuários</option>
    @foreach ($dbOrganizations as $dbOrganization)
        <option value="{{$dbOrganization->id}}">
            {{$dbOrganization->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.textarea col="12" label="Aviso" name="description"/>