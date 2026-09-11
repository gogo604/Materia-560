{{-- Componente: tarjeta de producto --}}
@props(['producto'])

<article class="group bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col
                 hover:shadow-lg hover:-translate-y-0.5 focus-within:ring-2 focus-within:ring-indigo-400 transition-all">

    <div class="relative">
        <img src="{{ $producto['imagen'] }}"
             alt="{{ $producto['nombre'] }}"
             class="h-44 w-full object-cover sm:h-48">

        <div class="absolute top-2 left-2 flex flex-col gap-1">
            @if ($producto['destacado'])
                <span class="rounded-full bg-indigo-500 text-white text-[11px] font-semibold px-2 py-1 shadow">
                    Destacado
                </span>
            @endif

            @if ($producto['stock'] === 0)
                <span class="rounded-full bg-red-500 text-white text-[11px] font-semibold px-2 py-1 shadow">
                    Agotado
                </span>
            @endif
        </div>

        <span class="absolute top-2 right-2 rounded-full bg-slate-900/80 text-white text-[11px] font-medium px-2 py-1">
            {{ $producto['categoria'] }}
        </span>
    </div>

    <div class="p-4 flex flex-col flex-1">
        <h3 class="font-semibold text-slate-900 leading-snug line-clamp-2">
            {{ $producto['nombre'] }}
        </h3>

        <p class="mt-1 text-sm text-slate-500 line-clamp-2 flex-1">
            {{ $producto['descripcion'] }}
        </p>

        <div class="mt-3 flex items-center justify-between">
            <span class="text-lg font-bold text-slate-900">
                Bs {{ number_format($producto['precio'], 2) }}
            </span>
            <span class="text-xs {{ $producto['stock'] > 0 ? 'text-emerald-600' : 'text-red-500' }}">
                {{ $producto['stock'] > 0 ? $producto['stock'] . ' disp.' : 'Sin stock' }}
            </span>
        </div>

        <div class="mt-4 flex items-center gap-2">
            <button type="button"
                    @disabled($producto['stock'] === 0)
                    class="flex-1 rounded-lg bg-indigo-600 text-white text-sm font-semibold py-2
                           hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400
                           disabled:bg-slate-300 disabled:cursor-not-allowed transition-colors">
                {{ $producto['stock'] === 0 ? 'Agotado' : 'Agregar' }}
            </button>

            <a href="{{ route('tienda.show', $producto['id']) }}"
               class="rounded-lg border border-slate-300 text-sm font-medium px-3 py-2
                      hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition-colors">
                Ver
            </a>
        </div>
    </div>
</article>
