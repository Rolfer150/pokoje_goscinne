<x-layouts.app pageTitle="Rezerwacja">
    <x-header title="Rezerwacja" />
    <div class="container mx-auto">
        @if(session('error'))
            <div class="bg-red-400 p-4 mb-6 mx-6 rounded-md">
                <h4 class="text-white text-lg text-center lg:text-left">{{ session('error') }}</h4>
            </div>
        @elseif (session('success'))
            <div class="bg-emerald-400 p-4 mb-6 mx-6 rounded-md">
                <h4 class="text-white text-lg text-center lg:text-left">{{ session('success') }}</h4>
            </div>
        @endif
        <div class="mt-10 mb-10 sm:ml-8 sm:mr-8 lg:ml-36 lg:mr-36">
            <h3 class="text-center text-lg sm:text-justify ml-4 mr-4 mb-5">
                Możesz dokonać rezerwacji pokoju wysyłając do nas poniższy, uzupełniony formularz zgłoszeniowy. <br>
                Wiadomość o akceptacji zostanie wysłana w formie e-mail lub SMS.
            </h3>

            <div class="bg-white sm:rounded-md p-4 md:p-4 border-2 shadow-sm rounded-md">

                <form method="POST" action="{{ route('rental.store') }}">
                    @csrf
                    <livewire:rental-form />
                </form>
                <p class="required_field mt-2 ml-6 lg:ml-12"> - Pole jest wymagane do wypełnienia</p>
                <p class="required_email_or_phone mt-2 ml-6 lg:ml-12"> - Pole "E-mail" lub "Numer telefonu" jest wymagane do wypełnienia</p>
            </div>
        </div>
    </div>
</x-layouts.app>
