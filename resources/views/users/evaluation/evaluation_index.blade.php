<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Avaliação: {{$dbOrganization->CompanyOrganization->acronym ?? ""}} - {{$dbOrganization->CompanyOrganization->title ?? ""}}" />
    @endslot
    
    @slot('body')
        @if ($dbGroup == FALSE)
            <div class="h-40 w-1/2 flex justify-center items-center bg-white shadow-lg rounded-xl m-auto">
                <h3>Participante sem Grupo ou Função Atribuida</h3>
            </div>
        @else
            @include('users.evaluation.partials.index.evaluation_index_table')
        @endif
    @endslot
</x-pages.index>
