<x-layouts.app pageTitle="Kontakt">

    {{--  Tytuł strony  --}}
    <x-header title="Kontakt" />

    <div class="container mx-auto">

        <h2 class="text-xl text-center">Skontaktuj się z nami przy pomocy poniższych opcji</h2>

        {{--  Panel z danymi kontaktowymi  --}}
        <div class="px-8 py-10 md:px-28 grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 lato-bold">

            {{--  Panel numeru telefonu  --}}
            <div class="flex flex-col justify-center items-center py-8 rounded-md bg-emerald-300/50 text-emerald-700 hover:bg-emerald-600 hover:text-white transition duration-200 ease-in">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                <h3 class="text-2xl mt-6 mb-4">Telefon</h3>
                <a href="tel:184450409" class="text-lg">
                    18 265 05 74
                </a>
            </div>

            {{--  Panel adresu e-mail  --}}
            <div class="flex flex-col justify-center items-center py-8 rounded-md bg-emerald-300/50 text-emerald-700 hover:bg-emerald-600 hover:text-white transition duration-200 ease-in">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <h3 class="text-2xl mt-6 mb-4">E-mail</h3>
                <a href="mailto:zlydaszyk-kluszkowce.cba.pl" class="text-lg">
                    zlydaszyk-kluszkowce.cba.pl
                </a>
            </div>

            {{--  Panel adresu zamieszkania  --}}
            <div class="flex flex-col justify-center items-center py-8 rounded-md bg-emerald-300/50 text-emerald-700 hover:bg-emerald-600 hover:text-white transition duration-200 ease-in">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <h3 class="text-2xl mt-6 mb-4">Adres</h3>
                <a href="https://www.google.com/maps/place/Złydaszyk+Stanisław.+Wynajem+pokoi/@49.4594093,20.2958484,19.25z/data=!4m6!3m5!1s0x4715ff52b371aff1:0xc91d1c7923aab7e2!8m2!3d49.4595519!4d20.2955799!16s%2Fg%2F1tf7fddl?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" class="text-lg">
                    Kluszkowce ul.Zdrojowa 34 34-440
                </a>
            </div>
        </div>

        <h2 class="text-xl mb-6 text-center">Lub wypełnij poniższy formularz kontaktowy</h2>
        {{--  Kontent  --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 align-middle items-center">

            {{--  Formularz kontaktowy  --}}
            <div class="ml-4 mr-4 mt-10 mb-10 sm:ml-8 sm:mr-8 sm:mt-14 sm:mb-14">
                <form method="POST" action="{{ route('message.store') }}" class="flex flex-col justify-between gap-y-3">
                    @csrf

                    <div class="flex flex-col">
                        <label for="name">Imię i nazwisko</label>
                        <x-items.input-text
                            type="text"
                            name="name"
                            placeholder="Wprowadź swoje imię i nazwisko..." />
                    </div>

                    <label for="email">Adres e-mail</label>
                    <x-items.input-text
                        type="email"
                        name="email"
                        placeholder="Wprowadź swój adres e-mail..." />

                    <label for="phone">Numer telefonu</label>
                    <x-items.input-text
                        type="tel"
                        name="phone_number"
                        placeholder="Wprowadź swój numer telefonu..." />

                    <label for="message" class="required">Wiadomość</label>
                    <div id="message" class="flex flex-col gap-y-2 p-4 border-2 rounded-md shadow-sm">
                        <label for="topic" class="required">Temat</label>
                        <x-items.input-text
                            type="text"
                            name="topic"
                        />
                        <label for="content" class="required">Zawartość</label>
                        <x-items.textarea name="content"></x-items.textarea>
                    </div>

                    <x-forms.primary-button>Wyślij wiadomość</x-forms.primary-button>
                </form>
                <p class="required mt-2 ml-6 lg:ml-12"> - Pole jest wymagane</p>
            </div>

            {{--  Mapa  --}}
            <x-layouts.map />
        </div>
    </div>
</x-layouts.app>
