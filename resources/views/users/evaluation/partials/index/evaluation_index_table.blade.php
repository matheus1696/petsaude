<x-table.table>
    @slot('thead')
        <x-table.th>Nome</x-table.th>
        <x-table.th class="w-60">Função</x-table.th>
        <x-table.th class="w-60">Avaliação</x-table.th>
        <x-table.th class="w-20"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($dbGroup as $dbUser)
            <x-table.tr>
                <x-table.td>{{$dbUser->name}}</x-table.td>
                <x-table.td>{{$dbUser->CompanyOccupation->classification ?? "Sem função atribuida"}}</x-table.td>                
                <x-table.td>
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
                    @foreach ($dbResponses as $dbResponse)
                        @if ($dbResponse->user_id_evaluated == $dbUser->id)
                            Respondido
                        @else
                            <x-button.minButtonShow icon="" btnTitle="Responder" route="{{route('evaluations.show',['evaluation'=>$dbUser->id])}}" />
                        @endif
                    @endforeach
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>