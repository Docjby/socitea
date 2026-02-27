<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bebas-neue:400" rel="stylesheet" /> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body
    class="h-screen w-screen bg-[#050505] text-zinc-200 overflow-hidden  flex flex-col py-6  px-4  md:px-8 lg:px-12 box-border">

    {{-- Header --}}
    <header class="flex justify-between items-center md:items-start shrink-0">
        <div
            class="w-12 h-12 sm:w-16 sm:h-16 md:w-20 md:h-20 bg-[#151515] rounded-xl overflow-hidden md:rounded-2xl flex items-center justify-center">
            <img src="{{ asset('logo.png') }}" alt="photo" class="">
        </div>

        @if (Route::has('login'))
            <div class="flex gap-4 md:gap-6 items-center">
                @auth
                    <a href="{{ url('/feeds') }}"
                        class="text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-zinc-200/60 hover:text-zinc-200 transition-colors cursor-pointer">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] text-zinc-200/60 hover:text-zinc-200 transition-colors cursor-pointer">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-5 py-2.5 sm:px-6 sm:py-3 md:px-8 md:py-3.5 text-[10px] sm:text-xs font-bold uppercase tracking-[0.2em] bg-zinc-200 text-[#050505] rounded-full hover:bg-white hover:shadow-[0_0_20px_rgba(255,255,255,0.2)] transition-all cursor-pointer">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif

    </header>

    {{-- Main Content --}}
    <main
        class="flex-1 flex flex-col md:flex-row items-center justify-center md:justify-between min-h-0 w-full mt-4 md:mt-2 gap-4 md:gap-0">

        {{-- Left Text --}}
        <div class="flex flex-col justify-center shrink-0 items-center md:items-start w-full md:w-auto">
            <h1 class="text-[28vw] md:text-[22vw] lg:text-[18vw] font-black uppercase leading-[0.78] tracking-tighter m-0 p-0 text-zinc-200"
                style="font-family: ui-sans-serif, system-ui, sans-serif;">
                SOCIE
            </h1>
            <h1 class="text-[28vw] md:text-[22vw] lg:text-[18vw] font-black uppercase leading-[0.78] tracking-tighter m-0 p-0 text-zinc-200"
                style="font-family: ui-sans-serif, system-ui, sans-serif;">
                TEA.
            </h1>
        </div>

        {{-- Right Image --}}
        <div
            class="w-full md:w-[35vw] h-[35vh] md:h-[55vh] lg:h-[57vh] rounded-3xl md:rounded-[3rem] overflow-hidden shrink-0">
            <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?q=80&w=2070&auto=format&fit=crop"
                alt="City street" class="w-full h-full object-cover grayscale contrast-125 brightness-90"
                referrerpolicy="no-referrer" />
        </div>

    </main>
    {{-- Footer --}}
    <footer class="w-full md:w-[60%] shrink-0 mt-6 md:mt-4">
        <p class="text-[10px] sm:text-xs md:text-sm opacity-80 leading-relaxed font-medium text-center md:text-left">
            An exclusive, anonymous network for the insiders. Spill the tea, share unverified rumors, and drop
            classified whispers without a trace. The truth is out there, but the source remains a secret. Welcome to the
            inner circle.
        </p>
    </footer>

    {{-- @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif --}}
</body>
</html>
