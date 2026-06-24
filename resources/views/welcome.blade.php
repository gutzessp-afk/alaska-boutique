<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center px-6 text-center
                bg-gradient-to-b from-[#F8F6F1] via-[#F8F6F1] to-[#ECEFF4]">

        {{-- Logo --}}
        <div class="mb-10">
            <svg viewBox="0 0 200 40" class="w-44 mx-auto mb-3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 30 L100 8 L170 30" stroke="#C9DCEC" stroke-width="3" stroke-linecap="round" fill="none"/>
            </svg>
            <h1 class="font-display text-5xl tracking-[0.35em] text-[#1B2A4A] pl-[0.35em]">ALASKA</h1>
            <p class="mt-3 text-xs tracking-[0.3em] uppercase text-[#B89B6A]">Boutique · Moda de mujer</p>
        </div>

        {{-- Tagline --}}
        <p class="max-w-md text-[#5B6478] leading-relaxed mb-12">
            Elegancia nórdica para la mujer moderna. Descubre piezas únicas,
            seleccionadas con la misma calidad y diseño atemporal.
        </p>

        {{-- Botones --}}
        <div class="w-full max-w-xs space-y-4">
            <a href="{{ route('register') }}"
               class="block w-full py-3.5 rounded-full bg-[#1B2A4A] text-white tracking-wide
                      hover:bg-[#243456] transition-colors">
                Crear cuenta
            </a>
            <a href="{{ route('login') }}"
               class="block w-full py-3.5 rounded-full border border-[#1B2A4A]/20 text-[#1B2A4A]
                      tracking-wide hover:border-[#B89B6A] hover:text-[#B89B6A] transition-colors">
                Iniciar sesión
            </a>
        </div>

        <a href="{{ route('login') }}" class="mt-10 text-sm text-[#5B6478] hover:text-[#1B2A4A] underline-offset-4 hover:underline">
            Explorar como invitada
        </a>
    </div>
</x-guest-layout>