<x-form.input col="12" label="Pergunta" name="title" value="{{$dbEvaluetionPersonalTask->title ?? ''}}"/>

<x-form.select col="12" label="Tipo" id="type" name="type">
    <option value="Múltipla" @isset($dbEvaluetionPersonalTask) @if($dbEvaluetionPersonalTask->type === "Múltipla") selected @endif @endisset>Múltipla Escolha</option>
    <option value="Texto Livre" @isset($dbEvaluetionPersonalTask) @if($dbEvaluetionPersonalTask->type === "Texto Livre") selected @endif @endisset>Texto</option>
</x-form.select>