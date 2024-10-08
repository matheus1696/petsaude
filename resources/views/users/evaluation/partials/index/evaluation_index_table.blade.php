<x-table.table>
    @slot('thead')
        <x-table.th>Nome</x-table.th>
        <x-table.th class="w-40">Função</x-table.th>
        <x-table.th class="w-60 hidden md:table-cell">Avaliação</x-table.th>
        <x-table.th class="w-14"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbGroup as $dbUser)
            <x-table.tr>
                <x-table.td> <span class="line-clamp-2">{{$dbUser->name}}</span> </x-table.td>
                <x-table.td>{{$dbUser->CompanyOccupation->classification ?? "Sem função atribuida"}}</x-table.td>                
                <x-table.td class="hidden md:table-cell">
                    @if (Auth::user()->id == $dbUser->id)
                        Auto Avaliação
                    @elseif (Auth::user()->CompanyOccupation->classification == $dbUser->CompanyOccupation->classification)
                        Avaliação de Pares
                    @else
                        @if ($dbUser->CompanyOccupation->classification == "Tutor")
                            Avaliação do Tutor
                        @endif

                        @if ($dbUser->CompanyOccupation->classification == "Preceptor")
                            Avaliação do Preceptor
                        @endif

                        @if ($dbUser->CompanyOccupation->classification == "Estudante")
                            Avaliação do Estudante
                        @endif
                    @endif
                </x-table.td>
                <x-table.td>
                    @php
                        $respondido = false;
                    @endphp
                    @foreach ($dbResponses as $dbResponse)
                        @if ($dbResponse->user_id_evaluated == $dbUser->id)
                            @php
                                $respondido = true;
                                break;
                            @endphp
                        @endif
                    @endforeach
                    
                    @if ($respondido)
                        Respondido
                    @else
                        <x-button.minButtonShow icon="" btnTitle="Responder" route="{{route('evaluations.show',['evaluation'=>$dbUser->id])}}" />
                    @endif
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>