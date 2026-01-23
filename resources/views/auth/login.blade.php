<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="/logo2.png" alt="Logo" class="w-24 h-24 object-contain">
        </x-slot>

        {{-- Status --}}
        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-400 bg-green-500/10 border border-green-500/30 rounded-lg p-3">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="text-white space-y-5">
            @csrf

            <div class="text-center">
                <h2 class="text-xl font-semibold">Bienvenido</h2>
                <p class="text-sm text-white/70">Autenticarse para iniciar sesión</p>

                @error('suspendido')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <x-label for="email" value="Correo" class="text-white/80" />

                <div class="relative mt-1">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50">
                        ✉
                    </span>

                    <x-input
                        id="email"
                        type="email"
                        name="email"
                        :value="old('email')"
                        autofocus
                        autocomplete="username"
                        class="w-full pl-10 bg-white/10 border-white/20 text-white placeholder-white/40 focus:border-indigo-400 focus:ring-indigo-400"
                        placeholder="correo@ejemplo.com"
                    />
                </div>

                @error('email')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <x-label for="password" value="Contraseña" class="text-white/80" />

                <div class="relative mt-1">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50">
                        🔒
                    </span>

                    <x-input
                        id="password"
                        type="password"
                        name="password"
                        autocomplete="current-password"
                        class="w-full pl-10 bg-white/10 border-white/20 text-white placeholder-white/40 focus:border-indigo-400 focus:ring-indigo-400"
                        placeholder="********"
                    />
                </div>

                @error('password')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember + Forgot --}}
            <div class="flex items-center justify-between">
                <label for="remember_me" class="flex items-center gap-2 text-sm text-white/70">
                    <x-checkbox id="remember_me" name="remember" />
                    Recordarme
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-300 hover:text-indigo-200 transition"
                       href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>

            {{-- Button --}}
            <div class="pt-2">
                <x-button class="w-full justify-center py-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2"
                         viewBox="0 -960 960 960" fill="currentColor">
                        <path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/>
                    </svg>
                    Acceder
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
