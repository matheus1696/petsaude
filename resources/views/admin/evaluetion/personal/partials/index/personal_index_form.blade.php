<x-form.input col="12" label="Título" name="title" value="{{$dbEvaluetionPersonal->title ?? ''}}" />

<x-form.select col="12" label="Tipo" id="type" name="type">
    <option @isset($dbEvaluetionPersonal)  @if("Auto avaliação" == $dbEvaluetionPersonal->type) selected @endif @endisset> Auto avaliação </option>
    <option @isset($dbEvaluetionPersonal)  @if("Avaliação de pares" == $dbEvaluetionPersonal->type) selected @endif @endisset> Avaliação de pares </option>
    <option @isset($dbEvaluetionPersonal)  @if("Avaliação Tutoria" == $dbEvaluetionPersonal->type) selected @endif @endisset> Avaliação Tutoria </option>
    <option @isset($dbEvaluetionPersonal)  @if("Avaliação Preceptoria" == $dbEvaluetionPersonal->type) selected @endif @endisset> Avaliação Preceptoria </option>
    <option @isset($dbEvaluetionPersonal)  @if("Avaliação Estudantes" == $dbEvaluetionPersonal->type) selected @endif @endisset> Avaliação Estudantes </option>
</x-form.select>

<x-form.select col="12" label="Para" id="to_specific_group_id" name="to_specific_group_id">
    <option value="all" @isset($dbEvaluetionPersonal) @if($dbEvaluetionPersonal->to_specific_group_id === NULL) selected @endif @endisset>Todos os usuários</option>
    @foreach ($dbOrganizations as $dbOrganization)
        <option value="{{$dbOrganization->id}}" @isset($dbEvaluetionPersonal)  @if($dbOrganization->id === $dbEvaluetionPersonal->to_specific_group_id) selected @endif @endisset>
            {{$dbOrganization->acronym}} -  {{$dbOrganization->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.input type="date" col="6" label="Início" name="date_start" value="{{$dbEvaluetionPersonal->date_start ?? ''}}" />

<x-form.input type="date" col="6" label="Fim" name="date_end" value="{{$dbEvaluetionPersonal->date_end ?? ''}}" />

<x-form.textarea col="12" label="Descrição" name="description" value="{{$dbEvaluetionPersonal->description ?? ''}}" />