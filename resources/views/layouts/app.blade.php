<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS Pem Web')</title>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        teal: { DEFAULT: '#0d9488', dark: '#0f766e' },
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#f8fafc] text-slate-800 min-h-screen flex flex-col font-sans">

    {{-- Navbar --}}
    <header class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-14 flex items-center gap-6">
            <a href="{{ route('home') }}" class="font-bold text-slate-900 text-[15px] whitespace-nowrap">UTS Pem Web</a>
            <nav class="flex items-center gap-5 text-[14px]">
                <a href="{{ route('home') }}" class="font-bold text-slate-900">Home</a>
                <a href="{{ route('features') }}" class="text-slate-500 hover:text-teal">Features</a>
            </nav>
            <div class="ml-auto flex items-center gap-4 text-[14px] text-slate-400">
                <span>{{ config('app.team_name') }}</span>
                <span>{{ config('app.team_nim') }}</span>
            </div>
        </div>
    </header>

    <main class="flex-1 w-full max-w-6xl mx-auto px-4 sm:px-6 py-6">
        {{-- Flash message --}}
        @if (session('success'))
            <div id="flash-alert" class="bg-[#d9ead3] border border-[#b6d7a8] text-[#274e13] rounded-lg px-4 py-3 mb-6 flex items-center justify-between">
                <span>{{ session('success') }}</span>
                <button type="button" onclick="document.getElementById('flash-alert').remove()" class="text-[#274e13] hover:text-black text-xl leading-none px-1" aria-label="Tutup">&times;</button>
            </div>
        @endif

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="mt-10 pb-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <nav class="flex flex-wrap justify-center gap-x-6 gap-y-2 text-[14px] text-slate-600">
                <a href="{{ route('home') }}" class="hover:text-teal">Home</a>
                <a href="{{ route('features') }}" class="hover:text-teal">Features</a>
                <a href="{{ route('pricing') }}" class="hover:text-teal">Pricing</a>
                <a href="{{ route('faqs') }}" class="hover:text-teal">FAQs</a>
                <a href="{{ route('about') }}" class="hover:text-teal">About</a>
            </nav>
            <hr class="my-5 border-slate-200">
            <p class="text-center text-[13px] text-slate-500">&copy; 2025 Dibuat Sejujurnya Oleh Lalu Nunang Satriawan Abdul Manaf Tanpa Mencotek dari Tim Lain</p>
        </div>
    </footer>

</body>
</html>
