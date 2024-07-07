<x-pages.index>
    @slot('body')
        <div class="flex justify-center items-center pt-20">
            <div class="bg-white w-full md:w-1/2 overflow-x-auto rounded-xl shadow-lg border-t-4 border-purple-600 flex flex-col">

                <div class="text-center py-3 border-b border-gray-200">
                    <h2 class="font-semibold">{{ __('adminlte::adminlte.verify_message') }}</h2>
                </div>

                <div class="px-5 py-4 border-b border-gray-200">
                    <span>{{ __('adminlte::adminlte.verify_check_your_email') }}</span>
                    <span class="text-red-400 italic font-semibold">{{ __('adminlte::adminlte.verify_messagem_spam') }}</span>
                </div>

                <div class="px-5 py-4">
                    <p class="text-center text-sm">{{ __('adminlte::adminlte.verify_if_not_recieved') }}</p>

                    <form class="mt-3 flex justify-center" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="w-full border-2 border-purple-600 px-3 py-2 rounded-xl shadow-lg hover:bg-purple-600 hover:text-white transition-all duration-500 text-sm">
                            {{ __('adminlte::adminlte.verify_request_another') }}
                        </button>
                    </form>
                </div>

                @if(session('resent'))
                    <div class="bg-purple-600 text-center text-white py-3 text-sm">
                        <p>{{ __('adminlte::adminlte.verify_email_sent') }}</p>
                    </div>
                @endif
            </div>
        </div>

        

        
    @endslot
</x-pages.index>