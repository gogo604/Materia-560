@extends('layouts.app')

@section('titulo', $tienda['nombre'] . ' — Catálogo')

@section('contenido')

    <section class="bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-900 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 sm:py-24 text-center">
            <p class="text-indigo-300 font-semibold text-sm tracking-wide uppercase mb-3">
                Bienvenido a
            </p>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                {{ $tienda['nombre'] }}
            </h1>
            <p class="mt-4 text-slate-300 text-base sm:text-lg max-w-xl mx-auto">
                {{ $tienda['lema'] }}
            </p>
            <a href="#catalogo"
               class="inline-block mt-8 rounded-full bg-indigo-500 px-6 py-3 text-sm sm:text-base font-semibold
                      hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-300 transition-colors">
                Ver catálogo
            </a>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <section class="py-8">
            <h2 class="text-sm font-semibold text-slate-500 uppercase tracking-wide mb-4">
                Categorías
            </h2>
            <div class="flex flex-wrap gap-2 sm:gap-3">
                <button type="button"
                        class="rounded-full bg-slate-900 text-white text-sm font-medium px-4 py-2
                               hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-colors">
                    Todas
                </button>
                @foreach ($categorias as $categoria)
                    <button type="button"
                            class="rounded-full bg-white border border-slate-300 text-slate-700 text-sm font-medium px-4 py-2
                                   hover:bg-slate-100 hover:border-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-colors">
                        {{ $categoria }}
                    </button>
                @endforeach
            </div>
        </section>

        <section id="catalogo" class="pb-16">
            <div class="flex items-end justify-between mb-6">
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">
                    Nuestros productos
                </h2>
                <span class="text-sm text-slate-500">
                    {{ count($productos) }} resultados
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
                @forelse ($productos as $producto)
                    <x-producto-card :producto="$producto" />
                @empty
                    <p class="col-span-full text-center text-slate-500 py-12">
                        No hay productos disponibles.
                    </p>
                @endforelse
            </div>
        </section>

    </div>
@endsection
