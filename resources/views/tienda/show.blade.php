@extends('layouts.app')

@section('titulo', $producto['nombre'] . ' — ' . $tienda['nombre'])

@section('contenido')
    <div class="max-w-5xl mx-auto px-4 sm:px-6 py-10">

        <a href="{{ route('tienda.index') }}"
           class="inline-flex items-center gap-1 text-sm font-medium text-indigo-600 hover:text-indigo-800 focus:outline-none mb-6">
            &larr; Volver al catálogo
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden p-4 sm:p-6">

            <div class="relative rounded-xl overflow-hidden">
                <img src="{{ $producto['imagen'] }}"
                     alt="{{ $producto['nombre'] }}"
                     class="w-full h-64 sm:h-80 md:h-full object-cover">

                <div class="absolute top-3 left-3 flex flex-col gap-1">
                    @if ($producto['destacado'])
                        <span class="rounded-full bg-indigo-500 text-white text-xs font-semibold px-3 py-1 shadow">
                            Destacado
                        </span>
                    @endif
                    @if ($producto['stock'] === 0)
                        <span class="rounded-full bg-red-500 text-white text-xs font-semibold px-3 py-1 shadow">
                            Agotado
                        </span>
                    @endif
                </div>
            </div>

            <div class="flex flex-col">
                <span class="text-xs font-semibold uppercase tracking-wide text-indigo-600">
                    {{ $producto['categoria'] }}
                </span>
                <h1 class="mt-2 text-2xl sm:text-3xl font-bold text-slate-900">
                    {{ $producto['nombre'] }}
                </h1>
                <p class="mt-4 text-slate-600 leading-relaxed flex-1">
                    {{ $producto['descripcion'] }}
                </p>

                <div class="mt-6 flex items-center justify-between">
                    <span class="text-3xl font-extrabold text-slate-900">
                        Bs {{ number_format($producto['precio'], 2) }}
                    </span>
                    <span class="text-sm {{ $producto['stock'] > 0 ? 'text-emerald-600' : 'text-red-500' }}">
                        {{ $producto['stock'] > 0 ? $producto['stock'] . ' unidades disponibles' : 'Sin stock' }}
                    </span>
                </div>

                <button type="button"
                        @disabled($producto['stock'] === 0)
                        class="mt-6 w-full rounded-lg bg-indigo-600 text-white font-semibold py-3
                               hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400
                               disabled:bg-slate-300 disabled:cursor-not-allowed transition-colors">
                    {{ $producto['stock'] === 0 ? 'Agotado' : 'Agregar al carrito' }}
                </button>
            </div>
        </div>
    </div>
@endsection
