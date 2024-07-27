<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Avaliações"
        />
    @endslot
    
    @slot('body')
        <div class="flex justify-between px-2 pb-2 mt-5">
            <h3 class="text-lg font-semibold">Avaliações</h3>
            <x-button.buttonModal btnTitle="Nova Avaliação" id="evaluetion">
                <x-form.form method="create" route="{{route('evaluetion_personals.store')}}">
                    @include('admin.evaluetion.personal.partials.index.personal_index_form')
                </x-form.form>
            </x-button.buttonModal>
        </div>
        @include('admin.evaluetion.personal.partials.index.personal_index_table')
    @endslot
</x-pages.index>
