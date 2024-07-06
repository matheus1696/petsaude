<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cursos de Graduação" />
    @endslot
    
    @slot('body')        
        @include('admin.company.education.course.partials.course_table')
    @endslot
</x-pages.index>
