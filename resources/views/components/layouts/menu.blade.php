
<aside class="bg-[#15181E] text-gray-300 w-64 h-screen flex flex-col">

    <!-- Logo -->
    <div class="px-6 py-5 text-xl font-semibold text-white tracking-tight">
        TicketDesk
    </div>

    <!-- Navegación -->
    <nav class="flex-1 px-3 space-y-1">
        <a href="#"
           class="flex items-center gap-3 px-4 py-2 rounded-lg
                  bg-[#1B1F27] text-white shadow">
            📊 <span>Dashboard</span>
        </a>

        <a href="#"
           class="flex items-center gap-3 px-4 py-2 rounded-lg
                  hover:bg-[#1B1F27] transition">
            🎫 <span>Tickets</span>
        </a>
    </nav>

    <!-- Usuario -->
    <div class="px-4 py-4 border-t border-[#262A34]">
        <p class="text-xs text-gray-400">Conectado como</p>
        <p class="text-sm font-medium text-white mb-3">
            {{ auth()->user()->name }}
        </p>

        <form method="POST" action="#">
            @csrf
            <button class="w-full bg-red-600 hover:bg-red-700
                           text-white text-sm py-2 rounded-lg transition">
                Cerrar sesión
            </button>
        </form>
    </div>

</aside>

{{--
<aside class="w-64 bg-gray-900 text-white p-4 flex flex-col">
{{-- Logo
<div class="mb-8">
    <h2 class="text-2xl font-bold tracking-wide">
        TicketDesk
    </h2>
    <p class="text-xs text-gray-400">
        Sistema de Tickets
    </p>
</div>

{{-- Navegación
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
</nav>

{{-- Usuario
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
--}}
