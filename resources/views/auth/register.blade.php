<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-6 py-12
                bg-gradient-to-b from-[#F8F6F1] to-[#ECEFF4]">
        <div class="w-full max-w-md">

            <a href="{{ route('welcome') }}" class="block text-center mb-8">
                <svg viewBox="0 0 200 40" class="w-28 mx-auto mb-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 30 L100 8 L170 30" stroke="#C9DCEC" stroke-width="3" stroke-linecap="round" fill="none"/>
                </svg>
                <span class="font-display text-3xl tracking-[0.3em] text-[#1B2A4A] pl-[0.3em]">ALASKA</span>
            </a>

            <div class="bg-white rounded-2xl shadow-[0_10px_40px_-15px_rgba(27,42,74,0.25)] p-8 sm:p-10">
                <h2 class="font-display text-2xl text-[#1B2A4A] mb-1">Crear cuenta</h2>
                <p class="text-sm text-[#5B6478] mb-8">Únete a la comunidad Alaska.</p>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="block text-xs font-medium uppercase tracking-wider text-[#5B6478] mb-2">Nombre completo</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                               class="w-full px-4 py-3 rounded-lg border bg-[#FBFAF7] focus:ring-2 focus:ring-[#C9DCEC] focus:outline-none transition
                                      @error('name') border-red-400 @else border-[#E2E0DA] focus:border-[#B89B6A] @enderror">
                        @error('name')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-medium uppercase tracking-wider text-[#5B6478] mb-2">Correo electrónico</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username"
                               class="w-full px-4 py-3 rounded-lg border bg-[#FBFAF7] focus:ring-2 focus:ring-[#C9DCEC] focus:outline-none transition
                                      @error('email') border-red-400 @else border-[#E2E0DA] focus:border-[#B89B6A] @enderror">
                        @error('email')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password" class="block text-xs font-medium uppercase tracking-wider text-[#5B6478] mb-2">Contraseña</label>
                        <input id="password" name="password" type="password" required autocomplete="new-password"
                               class="w-full px-4 py-3 rounded-lg border bg-[#FBFAF7] focus:ring-2 focus:ring-[#C9DCEC] focus:outline-none transition
                                      @error('password') border-red-400 @else border-[#E2E0DA] focus:border-[#B89B6A] @enderror">
                        @error('password')<p class="mt-1 text-xs text-red-500">{{ $message }}</p>@enderror
                        <p class="mt-1.5 text-[11px] text-[#8A8377]">Mínimo 8 caracteres, con mayúscula, minúscula, número y un símbolo.</p>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-xs font-medium uppercase tracking-wider text-[#5B6478] mb-2">Confirmar contraseña</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                               class="w-full px-4 py-3 rounded-lg border border-[#E2E0DA] bg-[#FBFAF7]
                                      focus:border-[#B89B6A] focus:ring-2 focus:ring-[#C9DCEC] focus:outline-none transition">
                    </div>

                    <button type="submit"
                            class="w-full py-3.5 rounded-full bg-[#1B2A4A] text-white tracking-wide hover:bg-[#243456] transition-colors">
                        Crear cuenta
                    </button>
                </form>
            </div>

            <p class="text-center text-sm text-[#5B6478] mt-6">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" class="text-[#1B2A4A] font-medium hover:text-[#B89B6A]">Inicia sesión</a>
            </p>
        </div>
    </div>
</x-guest-layout>