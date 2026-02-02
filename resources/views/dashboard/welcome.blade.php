<x-layouts.auth>
    <div class="bg-[#0F1115] h-screen text-gray-200 flex-col p-6">

        <!-- Header -->
        <h1 class="text-2xl font-semibold text-white mb-1">
            Panel de Control
        </h1>
        <p class="text-sm text-gray-400 mb-6">
            Bienvenido, <span class="font-medium text-white">
                {{ auth()->user()->name }}
            </span>
        </p>
        {{-- Kanban --}}
        @php
            $estados = [
                ['nombre' => 'Nuevo', 'color' => 'yellow'],
                ['nombre' => 'En Proceso', 'color' => 'orange'],
                ['nombre' => 'En Espera', 'color' => 'purple'],
                ['nombre' => 'Completado', 'color' => 'green'],
            ];
        @endphp

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            @foreach ($estados as $estado)
                    <div class="bg-[#1B1F27] rounded-xl p-3 flex flex-col">

                    <!-- Header columna -->
                    <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-semibold text-{{ $estado['color'] }}-400">
                                {{ $estado['nombre'] }}
                            </span>
                        <button class="text-gray-400 hover:text-white">⋯</button>
                    </div>

                    <!-- Ticket -->
                    <div class="bg-[#111318] border border-[#262A34]
                                rounded-lg p-3 mb-3
                                hover:border-{{ $estado['color'] }}-400
                                transition cursor-pointer">

                        <p class="text-sm font-medium text-gray-100">
                            Ticket de ejemplo
                        </p>
                        <p class="text-xs text-gray-500">
                            #1234
                        </p>

                        <div class="flex items-center justify-between mt-3">
                            <div class="flex gap-2 text-xs text-gray-400">
                                <span class="px-2 py-0.5 rounded bg-gray-800">
                                    2.5 SP
                                </span>
                                <span class="px-2 py-0.5 rounded
                                             bg-{{ $estado['color'] }}-900
                                             text-{{ $estado['color'] }}-300">
                                    Alta
                                </span>
                            </div>

                            <div class="flex gap-2 text-gray-500 text-xs">
                                💬 1
                                📎 2
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

            </div>
        </div>

    </div>
</x-layouts.auth>
