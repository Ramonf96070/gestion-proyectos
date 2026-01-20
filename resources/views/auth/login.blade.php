<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="/logo2.png" alt="No se encontró el logo" class="w-1/2 h-1/2">
        </x-slot>

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="relative overflow-hidden text-center w-full rounded-md">
                <div class="relative flex flex-col  shadow-sm rounded-lg p-2 text-white">
                    Autenticarse para iniciar sesión
                    @error('suspendido')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus autocomplete="username" />
                @error('email')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="current-password" />
                @error('password')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-white">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/></svg>
                    {{ __('Acceder') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
