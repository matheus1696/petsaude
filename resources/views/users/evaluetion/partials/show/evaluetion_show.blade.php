<div>
    <form action="{{route('evaluetion_personals.responseStore',['evaluetion_personal'=>$dbEvaluetionPersonal->id])}}" method="post">
        @csrf
        @foreach ($dbEvaluetionPersonalTasks as $dbEvaluetionPersonalTask)
            <div class="py-3">
                <p class="text-justify"><span class="font-semibold">{{$dbEvaluetionPersonalTask->order}}</span> - {{$dbEvaluetionPersonalTask->title}}</p>
                <p>{!!$dbEvaluetionPersonalTask->description!!}</p>
                
                @if ($dbEvaluetionPersonalTask->type == "Múltipla")                
                    @isset($dbEvaluetionPersonalTaskMultiples)
                        <div class="py-2">
                            <ul>
                                @foreach ($dbEvaluetionPersonalTaskMultiples as $dbEvaluetionPersonalTaskMultiple)
                                    @if ($dbEvaluetionPersonalTaskMultiple->task_id == $dbEvaluetionPersonalTask->id)
                                        <li>
                                            <div class="flex flex-row items-center gap-2">
                                                <input type="radio" name="evaluetionResponse_{{$dbEvaluetionPersonalTask->id}}" id="evaluetionResponse_{{$dbEvaluetionPersonalTaskMultiple->id}}" value="{{$dbEvaluetionPersonalTaskMultiple->value}}" required>
                                                <p class="font-semibold">{{$dbEvaluetionPersonalTaskMultiple->title}}:</p>
                                                <p>{!!$dbEvaluetionPersonalTaskMultiple->description!!}</p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endisset
                @endif
                
                @if ($dbEvaluetionPersonalTask->type == "Texto Livre")
                    <div class="flex justify-center items-center">
                        <div class="w-full py-3">
                            <div>
                                <textarea name="evaluetionResponse_{{$dbEvaluetionPersonalTask->id}}" class="summernote w-full"></textarea>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach

        <div class="w-full">
            <button type="submit" class="py-2 text-center bg-purple-700 hover:bg-purple-800 shadown-lg rounded-lg w-full text-white">Enviar</button>
        </div>
    </form>
</div>