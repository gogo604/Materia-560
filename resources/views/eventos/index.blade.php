<x-layout title="Eventos">

    <h1 class="mb-6 text-2xl font-bold">
        Cartelera de eventos
    </h1>

    @foreach ($eventos as $evento)

        <x-evento-card
            :titulo="$evento['titulo']"
            :fecha="$evento['fecha']"
            :lugar="$evento['lugar']"
            :destacado="$evento['destacado']"
            class="mb-4"
        >

            <x-slot:badge>
                <x-badge :categoria="$evento['categoria']" />
            </x-slot:badge>

            <x-slot:footer>
                <a href="#"
                   class="text-sm font-medium text-blue-600 hover:underline">
                    Ver detalle →
                </a>
            </x-slot:footer>

        </x-evento-card>

    @endforeach

</x-layout>
