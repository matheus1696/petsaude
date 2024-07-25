<!-- Inicio de Componentização da Página Index -->
<x-pages.index>
    @slot('body')
        @include('feedback.partials.feedback_form')
    @endslot
</x-pages.index>
