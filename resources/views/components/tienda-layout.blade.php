@props(['title' => 'Alaska Boutique'])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="antialiased text-[#1B2A4A] bg-[#F8F6F1]">

    {{-- HEADER --}}
    <header class="sticky top-0 z-50 bg-[#F8F6F1]/90 backdrop-blur border-b border-[#1B2A4A]/10">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="{{ route('welcome') }}" class="font-display text-2xl tracking-[0.3em] pl-[0.3em]">ALASKA</a>

            <nav class="hidden md:flex items-center gap-8 text-sm tracking-wide">
                <a href="{{ route('welcome') }}" class="hover:text-[#B89B6A] transition">Inicio</a>
                <a href="#tienda" class="hover:text-[#B89B6A] transition">Tienda</a>
                <a href="#nuevos" class="hover:text-[#B89B6A] transition">Nuevas</a>
                <a href="#" class="hover:text-[#B89B6A] transition">Nosotros</a>
                <a href="#" class="hover:text-[#B89B6A] transition">Contacto</a>
            </nav>

            <div class="flex items-center gap-5">
                <a href="{{ route('login') }}" title="Mi cuenta" class="hover:text-[#B89B6A] transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a7.5 7.5 0 0115 0v.75H4.5v-.75z"/></svg>
                </a>
                <a href="#" title="Carrito" class="relative hover:text-[#B89B6A] transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
                    <span class="absolute -top-2 -right-2 bg-[#B89B6A] text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center">0</span>
                </a>
            </div>
        </div>
    </header>

    {{ $slot }}

    {{-- FOOTER --}}
    <footer class="bg-[#1B2A4A] text-white mt-24">
        <div class="max-w-7xl mx-auto px-6 py-16 text-center">
            <p class="font-display text-3xl tracking-[0.3em] pl-[0.3em] mb-4">ALASKA</p>
            <p class="text-white/60 text-sm max-w-md mx-auto mb-8">Moda nórdica para la mujer moderna. Calidad y diseño atemporal en cada pieza.</p>
            <div class="flex justify-center gap-8 text-sm text-white/70 mb-8">
                <a href="#" class="hover:text-[#B89B6A] transition">Newsletter</a>
                <a href="#" class="hover:text-[#B89B6A] transition">Privacidad</a>
                <a href="#" class="hover:text-[#B89B6A] transition">Términos</a>
                <a href="#" class="hover:text-[#B89B6A] transition">Sostenibilidad</a>
            </div>
            <p class="text-white/40 text-xs">© {{ date('Y') }} Alaska Boutique · México</p>
        </div>
    </footer>

</body>
</html>