<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', $tienda['nombre'] ?? 'ByteStore')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col">

    {{-- ===================== NAVBAR ===================== --}}
    <header class="bg-slate-900 text-white sticky top-0 z-20 shadow-md">
        <nav class="max-w-6xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between">
            <a href="{{ route('tienda.index') }}" class="flex items-center gap-2 font-bold text-lg tracking-tight">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-500">B</span>
                {{ $tienda['nombre'] ?? 'ByteStore' }}
            </a>

            <ul class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-300">
                @isset($categorias)
                    @foreach ($categorias as $categoria)
                        <li>
                            <a href="#" class="hover:text-white focus:text-white focus:outline-none transition-colors">
                                {{ $categoria }}
                            </a>
                        </li>
                    @endforeach
                @endisset
            </ul>

            <button type="button"
                    class="relative inline-flex items-center justify-center h-10 w-10 rounded-full bg-slate-800 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="absolute -top-1 -right-1 h-5 w-5 rounded-full bg-indigo-500 text-[11px] font-bold flex items-center justify-center">
                    3
                </span>
            </button>
        </nav>

        <div class="md:hidden border-t border-slate-800 overflow-x-auto">
            <ul class="flex gap-4 px-4 py-2 text-xs font-medium text-slate-300 whitespace-nowrap">
                @isset($categorias)
                    @foreach ($categorias as $categoria)
                        <li><a href="#" class="hover:text-white focus:text-white focus:outline-none">{{ $categoria }}</a></li>
                    @endforeach
                @endisset
            </ul>
        </div>
    </header>

    <main class="flex-1">
        @yield('contenido')
    </main>

    <footer class="bg-slate-900 text-slate-400 mt-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10 grid grid-cols-1 sm:grid-cols-3 gap-8 text-sm">
            <div>
                <h3 class="text-white font-semibold mb-2">{{ $tienda['nombre'] ?? 'ByteStore' }}</h3>
                <p>{{ $tienda['lema'] ?? '' }}</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-2">Enlaces</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('tienda.index') }}" class="hover:text-white focus:text-white focus:outline-none">Catálogo</a></li>
                    <li><a href="#" class="hover:text-white focus:text-white focus:outline-none">Nosotros</a></li>
                    <li><a href="#" class="hover:text-white focus:text-white focus:outline-none">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-2">Créditos</h4>
                <p>Práctica INF560 · UATF — Ingeniería Informática.</p>
            </div>
        </div>
        <div class="border-t border-slate-800 py-4 text-center text-xs text-slate-500">
            &copy; {{ date('Y') }} {{ $tienda['nombre'] ?? 'ByteStore' }}. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>
