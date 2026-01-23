
<aside class="w-64 bg-gray-900 text-white p-4 flex flex-col">
{{-- Logo --}}
<div class="mb-8">
    <h2 class="text-2xl font-bold tracking-wide">
        TicketDesk
    </h2>
    <p class="text-xs text-gray-400">
        Sistema de Tickets
    </p>
</div>

{{-- Navegación --}}
<nav class="flex-1 space-y-2 text-sm">
    <a href="{{ route('dashboard') }}"
       class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-700 transition">
        📊 <span>Dashboard</span>
    </a>

    <a href="#"
       class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-700 transition">
        🎫 <span>Tickets</span>
    </a>

    <a href="#"
       class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-700 transition">
        👨‍🔧 <span>Técnicos</span>
    </a>

    <a href="#"
       class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-700 transition">
        📄 <span>Reportes</span>
    </a>

    <details class="group">
        <summary
            class="flex items-center justify-between px-3 py-2 rounded cursor-pointer hover:bg-gray-700 transition">
            <span class="flex items-center gap-2">
                👤 <span>Usuarios</span>
            </span>
            <span class="transition group-open:rotate-180">⌄</span>
        </summary>

        <div class="ml-6 mt-2 space-y-1">
            <a href="#"
               class="block px-3 py-2 rounded hover:bg-gray-700 transition text-gray-300">
                👥 Usuarios
            </a>

            <a href="#"
               class="block px-3 py-2 rounded hover:bg-gray-700 transition text-gray-300">
                🛡️ Roles
            </a>
        </div>
    </details>
</nav>

{{-- Usuario --}}
<div class="border-t border-gray-700 pt-4 text-sm">
    <p class="text-gray-400">Conectado como:</p>
    <p class="font-semibold">{{ auth()->user()->name }}</p>

    <form method="POST" action="{{ route('logout') }}" class="mt-3">
        @csrf
        <button class="w-full text-left px-3 py-2 rounded bg-red-600 hover:bg-red-700 transition">
            Cerrar sesión
        </button>
    </form>
</div>
</aside>
