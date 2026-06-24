<x-tienda-layout title="Alaska · Tienda">

    {{-- HERO --}}
    <section class="relative max-w-7xl mx-auto px-6 mt-8">
        <div class="rounded-3xl overflow-hidden bg-gradient-to-br from-[#1B2A4A] via-[#2A3A5C] to-[#4A5A7C] min-h-[480px] flex items-center">
            <div class="px-10 sm:px-16 py-16 max-w-xl">
                <p class="text-[#C9DCEC] text-sm tracking-[0.3em] uppercase mb-4">Temporada 2026</p>
                <h1 class="font-display text-5xl sm:text-6xl text-white leading-tight mb-6">Nueva Colección Nórdica</h1>
                <p class="text-white/70 mb-8 leading-relaxed">Piezas atemporales inspiradas en la elegancia del norte. Descubre tu nuevo estilo.</p>
                <a href="#nuevos" class="inline-block px-8 py-3.5 rounded-full bg-[#B89B6A] text-white tracking-wide hover:bg-[#A8884F] transition">
                    Ver colección
                </a>
            </div>
        </div>
    </section>

    {{-- CATEGORÍAS --}}
    <section id="tienda" class="max-w-7xl mx-auto px-6 mt-24">
        <div class="flex items-end justify-between mb-10">
            <h2 class="font-display text-3xl">Categorías</h2>
            <a href="#" class="text-sm text-[#B89B6A] hover:underline underline-offset-4">Ver todo</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            @foreach (['Vestidos' => '#D8C3A5', 'Blusas' => '#C9DCEC', 'Pantalones' => '#B6BFC9', 'Accesorios' => '#E0D2BD'] as $cat => $color)
                <a href="#" class="group">
                    <div class="aspect-[3/4] rounded-2xl flex items-end p-5 transition group-hover:-translate-y-1"
                         style="background: linear-gradient(160deg, {{ $color }}55, {{ $color }})">
                        <span class="font-display text-xl text-[#1B2A4A]">{{ $cat }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- NUEVOS INGRESOS --}}
    <section id="nuevos" class="max-w-7xl mx-auto px-6 mt-24">
        <div class="flex items-end justify-between mb-10">
            <h2 class="font-display text-3xl">Nuevos ingresos</h2>
            <a href="#" class="text-sm text-[#B89B6A] hover:underline underline-offset-4">Ver tienda completa</a>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $productos = [
                    ['nombre' => 'Vestido Aurora Silk',      'precio' => '2,450', 'img' => 'vestido1.png'],
                    ['nombre' => 'Blusa Línea Glaciar',      'precio' => '1,290', 'img' => 'blusa1.png'],
                    ['nombre' => 'Abrigo Estructura Perla',  'precio' => '3,890', 'img' => 'abrigo1.png'],
                    ['nombre' => 'Falda Midi Nórdica',       'precio' => '1,750', 'img' => 'falda1.png'],
                ];
            @endphp

            @foreach ($productos as $producto)
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] rounded-2xl mb-4 overflow-hidden bg-[#E8E2D8]">
                        <img src="{{ asset('images/productos/' . $producto['img']) }}"
                             alt="{{ $producto['nombre'] }}"
                             class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="text-sm font-medium">{{ $producto['nombre'] }}</h3>
                    <p class="text-sm text-[#B89B6A] mt-1">${{ $producto['precio'] }} MXN</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- BANNER OFERTA --}}
    <section class="max-w-7xl mx-auto px-6 mt-24">
        <div class="rounded-3xl bg-[#1B2A4A] text-white px-10 py-16 text-center">
            <p class="text-[#B89B6A] tracking-[0.3em] uppercase text-sm mb-3">Selección especial</p>
            <h2 class="font-display text-4xl mb-4">Hasta 30% OFF</h2>
            <p class="text-white/60 mb-8 max-w-md mx-auto">Piezas seleccionadas con la misma calidad y diseño atemporal. Renueva tu armario con intención.</p>
            <a href="#nuevos" class="inline-block px-8 py-3.5 rounded-full bg-white text-[#1B2A4A] tracking-wide hover:bg-[#C9DCEC] transition">
                Comprar ahora
            </a>
        </div>
    </section>

</x-tienda-layout>