<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avaliações" />
    @endslot

    @slot('body')
        <div class="row px-3">
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        @include('users.evaluetion.partials.index.evaluetion_form_personal')
                    </div>
                    <div class="tab-pane fade" id="v-pills-peer" role="tabpanel" aria-labelledby="v-pills-peer-tab">
                        @include('users.evaluetion.partials.index.evaluetion_form_peer')
                    </div>
                    <div class="tab-pane fade" id="v-pills-tutoring" role="tabpanel" aria-labelledby="v-pills-tutoring-tab">
                        @include('users.evaluetion.partials.index.evaluetion_form_preceptor')
                    </div>
                    <div class="tab-pane fade" id="v-pills-tutoring" role="tabpanel" aria-labelledby="v-pills-tutoring-tab">
                        @include('users.evaluetion.partials.index.evaluetion_form_tutoring')
                    </div>
                    <div class="tab-pane fade" id="v-pills-student" role="tabpanel" aria-labelledby="v-pills-student-tab">
                        @include('users.evaluetion.partials.index.evaluetion_form_student')
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home"
                        type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        Auto Avaliação
                    </button>
                    <button class="nav-link" id="v-pills-peer-tab" data-toggle="pill" data-target="#v-pills-peer"
                        type="button" role="tab" aria-controls="v-pills-peer" aria-selected="false">
                        Avaliação de Pares
                    </button>
                    @if (Auth::user()->occupation_id != 3)
                        <button class="nav-link" id="v-pills-tutoring-tab" data-toggle="pill" data-target="#v-pills-tutoring"
                            type="button" role="tab" aria-controls="v-pills-tutoring"
                            aria-selected="false">
                            Avaliação do Preceptor
                        </button>
                    @endif
                    @if (Auth::user()->occupation_id != 2)
                        @if (Auth::user()->occupation_id != 7)
                        <button class="nav-link" id="v-pills-tutoring-tab" data-toggle="pill" data-target="#v-pills-tutoring"
                            type="button" role="tab" aria-controls="v-pills-tutoring"
                            aria-selected="false">
                            Avaliação dos Tutores
                        </button>
                        @endif
                    @endif
                    @if (Auth::user()->occupation_id != 4)
                        @if (Auth::user()->occupation_id != 5)
                        <button class="nav-link" id="v-pills-student-tab" data-toggle="pill" data-target="#v-pills-student"
                            type="button" role="tab" aria-controls="v-pills-student"
                            aria-selected="false">
                            Avaliação dos Estudantes
                        </button>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endslot
</x-pages.index>
