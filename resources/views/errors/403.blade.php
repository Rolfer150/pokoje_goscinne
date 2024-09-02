<head>
    <title>Błąd 403</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen w-full">
    <div class="flex flex-col justify-center items-center text-center space-y-12 h-full w-full">
        <h1 class="text-emerald-500 font-bold text-7xl">Błąd 403</h1>
        <h2 class="font-semibold text-2xl">Brak dostępu do zasobów strony.</h2>
        <div class="text-white font-semibold bg-emerald-500 p-3 rounded-lg flex items-center justify-center gap-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            <a href="{{ route('home') }}">Powrót do strony głównej</a>
        </div>
    </div>
</body>
