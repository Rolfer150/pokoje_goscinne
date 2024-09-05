<x-layouts.app pageTitle="Rezerwacja">
    <x-header title="Rezerwacja" />
    <div class="container mx-auto">
        <div class="mt-10 mb-10 sm:ml-8 sm:mr-8 lg:ml-36 lg:mr-36">

            <h3 class="text-center text-lg sm:text-justify ml-4 mr-4 mb-5">
                Możesz dokonać rezerwacji pokoju wysyłając do nas poniższy, uzupełniony formularz zgłoszeniowy. <br>
                Wiadomość o akceptacji zostanie wysłana w formie e-mail lub SMS.
            </h3>

            <div class="bg-white sm:rounded-md p-2 md:p-6">
                @if(session('error'))
                    <div class="bg-red-400 p-4 mb-6 rounded-md">
                        <h4 class="text-white text-lg text-center lg:text-left">{{ session('error') }}</h4>
                    </div>
                @elseif (session('success'))
                    <div class="bg-emerald-400 p-4 mb-6 rounded-md">
                        <h4 class="text-white text-lg text-center lg:text-left">{{ session('success') }}</h4>
                    </div>
                @endif
                <form method="POST" action="{{ route('rental.store') }}" class="flex flex-col justify-between gap-y-3">
                    @csrf
                    <livewire:rental-form />

                    <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
                </form>
                <p class="required mt-2 ml-6 lg:ml-12"> - Pole jest wymagane</p>
            </div>
        </div>
    </div>
</x-layouts.app>
