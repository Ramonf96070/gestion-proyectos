@php
    $estados = [
        [
            'nombre' => 'Nuevo',
            'text' => 'text-yellow-400',
            'border' => 'hover:border-yellow-400',
            'badge_bg' => 'bg-yellow-900',
            'badge_text' => 'text-yellow-300',
        ],
        [
            'nombre' => 'En Proceso',
            'text' => 'text-orange-400',
            'border' => 'hover:border-orange-400',
            'badge_bg' => 'bg-orange-900',
            'badge_text' => 'text-orange-300',
        ],
        [
            'nombre' => 'En Espera',
            'text' => 'text-purple-400',
            'border' => 'hover:border-purple-400',
            'badge_bg' => 'bg-purple-900',
            'badge_text' => 'text-purple-300',
        ],
        [
            'nombre' => 'Completado',
            'text' => 'text-green-400',
            'border' => 'hover:border-green-400',
            'badge_bg' => 'bg-green-900',
            'badge_text' => 'text-green-300',
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TicketDesk') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0F1115] m-0 p-0 overflow-hidden">
<div class="h-screen flex w-screen">

    {{-- Sidebar --}}
    <x-layouts.menu />

    {{-- Main --}}
    <main class="flex-1 overflow-y-auto">
        <div class="max-w-7xl mx-auto px-6 py-6">
            {{ $slot }}
        </div>
    </main>

</div>
</>
</html>
