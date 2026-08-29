<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Práctica UI - Eventos</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">

            <a href="/eventos"
               class="text-lg font-bold text-slate-900">
                eventos-app
            </a>

            <div class="hidden sm:flex items-center gap-6 text-sm text-slate-600">

                <a href="/eventos"
                   class="transition-colors hover:text-blue-600">
                    Inicio
                </a>

                <a href="/eventos"
                   class="transition-colors hover:text-blue-600">
                    Eventos
                </a>

                <a href="/practica-ui"
                   class="text-blue-600 font-medium">
                    Práctica UI
                </a>

            </div>

            <button class="sm:hidden text-slate-600">
                Menú
            </button>

        </div>
    </nav>


    <!-- CONTENIDO -->
    <main class="max-w-6xl mx-auto px-4 py-10">

        <div class="text-center mb-10">

            <h1 class="text-4xl font-bold text-slate-900">
                Practica UI
            </h1>

            <p class="mt-3 text-slate-500">
                Eventos utilizando Tailwind CSS v4
            </p>

        </div>


        <!-- GRID RESPONSIVE -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($eventos as $evento)

                <div class="group bg-white rounded-2xl shadow-lg
                            p-6 border border-slate-100
                            transition duration-300
                            hover:-translate-y-1 hover:shadow-xl">

                    <!-- TIPO -->
                    <span class="inline-block text-xs font-semibold
                                 text-purple-600 bg-purple-50
                                 px-3 py-1 rounded-full">
                        {{ $evento['tipo'] }}
                    </span>


                    <!-- TITULO -->
                    <h2 class="mt-4 text-xl font-bold text-slate-900
                               transition-colors
                               group-hover:text-purple-600">
                        {{ $evento['titulo'] }}
                    </h2>


                    <!-- INFORMACIÓN -->
                    <p class="mt-2 text-sm text-slate-500">
                        📍 {{ $evento['lugar'] }}
                    </p>

                    <p class="mt-1 text-sm text-slate-500">
                        📅 {{ $evento['fecha'] }}
                    </p>


                    <!-- DESCRIPCIÓN -->
                    <p class="mt-4 text-sm text-slate-600">
                        Participa en este evento y conoce nuevas
                        herramientas y tecnologías.
                    </p>


                    <!-- BOTÓN -->
                    <button
                        class="mt-5 w-full bg-purple-600 text-white
                               text-sm font-medium
                               px-4 py-2 rounded-lg
                               transition
                               hover:bg-purple-700
                               active:bg-purple-800
                               focus:outline-none
                               focus:ring-2
                               focus:ring-purple-300">

                        Ver detalles

                    </button>

                </div>

            @endforeach

        </div>


        <!-- FORMULARIO PEER -->
        <div class="max-w-md mx-auto mt-12">

            <h2 class="text-xl font-bold text-slate-900 mb-4">
                Suscríbete a novedades
            </h2>

            <input
                type="email"
                placeholder="correo@uatf.edu.bo"
                class="peer w-full border border-slate-300
                       rounded-lg px-3 py-2
                       focus:border-purple-500
                       focus:outline-none">

            <p class="mt-1 text-xs text-slate-400
                      peer-focus:text-purple-600">

                Te enviaremos información sobre nuevos eventos.

            </p>

        </div>

    </main>

</body>

</html>
