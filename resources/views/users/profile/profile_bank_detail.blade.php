<!-- Inicio de Componentização da Página Index -->
<x-pages.index>
    @slot('body')
        @include('users.profile.partials.form_user_bank_detail')
    @endslot
</x-pages.index>