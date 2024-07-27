<x-form.input col="12" label="Título" name="title" value="{{$dbEvaluetionPersonal->title ?? ''}}" />

<x-form.select col="12" label="Para" id="to_specific_group_id" name="to_specific_group_id">
    <option value="all" @isset($dbEvaluetionPersonal) @if($dbEvaluetionPersonal->to_specific_group_id === NULL) selected @endif @endisset>Todos os usuários</option>
    @foreach ($dbOrganizations as $dbOrganization)
        <option value="{{$dbOrganization->id}}" @isset($dbEvaluetionPersonal)  @if($dbOrganization->id === $dbEvaluetionPersonal->to_specific_group_id) selected @endif @endisset>
            {{$dbOrganization->acronym}} -  {{$dbOrganization->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.textarea col="12" label="Descrição" name="description" value="{{$dbEvaluetionPersonal->description ?? ''}}" />