<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Instituições de Ensino" />
    @endslot
    
    @slot('body')        
        @include('admin.company.education.institution.partials.institution_table')
    @endslot
</x-pages.index>
