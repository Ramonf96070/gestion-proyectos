<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-900 via-indigo-900 to-black">

    <div class="backdrop-blur-xl bg-white/10 shadow-2xl rounded-2xl p-10 w-full max-w-md border border-white/20">

        {{-- Avatar --}}
        <div class="flex justify-center mb-6">
            <div class="w-24 h-24 rounded-full bg-white/20 flex items-center justify-center">
                <svg class="w-12 h-12 text-white/60" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 20.25a7.5 7.5 0 0115 0" />
                </svg>
            </div>
        </div>

        {{-- Slot del formulario --}}
        {{ $slot }}

    </div>

</div>
