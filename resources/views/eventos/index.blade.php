<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eventos App</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">

            <a href="/eventos"
               class="text-lg font-bold text-slate-900">
                eventos-app
            </a>

            <div class="hidden sm:flex items-center gap-6 text-sm text-slate-600">
                <a href="/eventos"
                   class="transition-colors hover:text-blue-600 focus:text-blue-600">
                    Inicio
                </a>

                <a href="/eventos"
                   class="transition-colors hover:text-blue-600 focus:text-blue-600">
                    Eventos
                </a>

                <a href="/practica-ui"
                   class="transition-colors hover:text-blue-600 focus:text-blue-600">
                    Práctica
                </a>
            </div>

            <button class="sm:hidden text-slate-600">
                Menú
            </button>

        </div>
    </nav>


    <!-- EVENTOS -->
    <main class="max-w-6xl mx-auto px-4 py-8">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900">
                Próximos eventos
            </h1>

            <p class="mt-2 text-slate-500">
                Eventos tecnológicos y académicos de la UATF.
            </p>
        </div>


        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($eventos as $evento)

                <a href="#"
                   class="group block bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">

                    <!-- TIPO -->
                    <span class="inline-block text-xs font-semibold
                                 text-blue-600 bg-blue-50
                                 px-2 py-1 rounded">
                        {{ $evento['tipo'] }}
                    </span>


                    <!-- TITULO -->
                    <h3 class="mt-3 text-lg font-bold text-slate-900
                               transition-colors group-hover:text-blue-600">
                        {{ $evento['titulo'] }}
                    </h3>


                    <!-- LUGAR Y FECHA -->
                    <p class="mt-1 text-sm text-slate-500">
                        {{ $evento['lugar'] }} · {{ $evento['fecha'] }}
                    </p>


                    <!-- DESCRIPCIÓN -->
                    <p class="mt-3 text-sm text-slate-600">
                        Evento académico relacionado con tecnología,
                        desarrollo web e informática.
                    </p>


                    <!-- ENLACE -->
                    <span class="mt-4 inline-block text-sm text-slate-400
                                 group-hover:text-blue-500">
                        Ver más →
                    </span>

                </a>

            @endforeach

        </div>

    </main>

</body>

</html>
