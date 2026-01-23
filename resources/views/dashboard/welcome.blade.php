<x-layouts.auth>
    <div>
        <h1 class="text-2xl font-bold mb-2">Panel de Control</h1>
        <p class="text-gray-600 mb-6">
            Bienvenido, <span class="font-semibold">{{ auth()->user()->name }}</span>
        </p>

        {{-- Kanban --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

            @foreach (['Nuevo','En Proceso','En Espera','Completado'] as $estado)
                <div class="bg-gray-200 rounded-lg p-4">
                    <h2 class="font-semibold text-sm mb-3">{{ $estado }}</h2>

                    <div class="space-y-3">
                        <div class="bg-white p-3 rounded shadow">
                            <p class="font-semibold text-sm">Ticket de ejemplo</p>
                            <p class="text-xs text-gray-500">#1234</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-layouts.auth>
