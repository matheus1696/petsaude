<x-pages.index>
    @slot('body')
        <div class="m-auto w-1/2">
            <div>
                <h3 class="text-xl py-5 text-center">{{$dbEvaluetionPersonal->title}}</h3>
            </div>
            @include('users.evaluetion.partials.show.evaluetion_show')
        </div>
    @endslot
</x-pages.index>