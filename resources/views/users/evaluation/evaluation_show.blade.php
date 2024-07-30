<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avaliação: {{$dbOrganization->CompanyOrganization->acronym ?? ""}} - {{$dbOrganization->CompanyOrganization->title ?? ""}}" />
    @endslot
    
    @slot('body')
        <div class="w-full xl:w-2/3 m-auto p-5 bg-white rounded-xl shadow-xl">
            <div>
                <h3 class="py-3 text-center font-semibold text-lg">Avaliação de grupo</h3>
                <div class="py-3 border-b border-gray-200">
                    <p><span class="font-semibold">Avaliado: </span> {{$dbUser->name}}</p>
                    <p><span class="font-semibold">Grupo: </span> {{$dbUser->CompanyOrganization->title}}</p>
                    <p><span class="font-semibold">Função: </span> {{$dbUser->CompanyOccupation->classification}}</p>
                </div>
                <div class="py-3 border-b border-gray-200">
                    <p class="text-justify py-1">Esse instrumento tem como objetivo realizar a avaliação bimensal das atividades dos Grupos Tutoriais de Aprendizagem (GTA) e identificar os pontos fortes e os pontos fracos de cada grupo. A coordenação geral do projeto visa acompanhar as atividades dos GTAs e tomar decisões a partir desse instrumento.</p>

                    <p class="text-justify py-1">O instrumento será analisado exclusivamente pela coordenação do projeto, que poderá produzir um relatório geral a partir do resultado e divulgar coletivamente.</p>

                    <p class="text-justify py-1">Nada que identifique o autor da avaliação será divulgado publicamente e esse dado ficará sob sigilo da coordenadora do projeto.</p>

                    <p class="text-justify py-1">Esse é um instrumento individual.</p>
                </div>
            </div>
            <div class="py-3">
                <x-form.form method="create" route="{{route('evaluations.store')}}" title="Enviar Avaliação">
                    <input hidden value="{{$dbUser->id}}" name="user_id_evaluated">
                    <input hidden value="{{Auth::user()->id}}" name="user_id_response">

                    @if (Auth::user()->id == $dbUser->id)
                        @include('users.evaluation.partials.form.evaluation_form_personal')
                    @elseif (Auth::user()->CompanyOccupation->classification == $dbUser->CompanyOccupation->classification)
                        @include('users.evaluation.partials.form.evaluation_form_peer')
                    @else
                        @if ($dbUser->CompanyOccupation->classification == "Tutor")
                            @include('users.evaluation.partials.form.evaluation_form_tutor')
                        @endif

                        @if ($dbUser->CompanyOccupation->classification == "Preceptor")
                            @include('users.evaluation.partials.form.evaluation_form_preceptor')
                        @endif

                        @if ($dbUser->CompanyOccupation->classification == "Estudante")
                            @include('users.evaluation.partials.form.evaluation_form_student')
                        @endif
                    @endif
                </x-form.form>
            </div>
        </div>
    @endslot
</x-pages.index>
