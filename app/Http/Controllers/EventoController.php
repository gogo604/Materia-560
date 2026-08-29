<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = [
            [
                'titulo' => 'Laravel Bolivia 2026',
                'tipo' => 'Conferencia',
                'lugar' => 'Auditorio UATF',
                'fecha' => '20 de septiembre'
            ],
            [
                'titulo' => 'Taller de Tailwind v4',
                'tipo' => 'Taller',
                'lugar' => 'Laboratorio 3',
                'fecha' => '27 de septiembre'
            ],
            [
                'titulo' => 'Hackathon UATF',
                'tipo' => 'Competencia',
                'lugar' => 'Campus Central',
                'fecha' => '4 de octubre'
            ],
        ];

        return view('eventos.index', compact('eventos'));
    }

    public function practica()
    {
        $eventos = [
            [
                'titulo' => 'Laravel Bolivia 2026',
                'tipo' => 'Conferencia',
                'lugar' => 'Auditorio UATF',
                'fecha' => '20 de septiembre'
            ],
            [
                'titulo' => 'Taller de Tailwind v4',
                'tipo' => 'Taller',
                'lugar' => 'Laboratorio 3',
                'fecha' => '27 de septiembre'
            ],
            [
                'titulo' => 'Hackathon UATF',
                'tipo' => 'Competencia',
                'lugar' => 'Campus Central',
                'fecha' => '4 de octubre'
            ],
            [
                'titulo' => 'Feria Tecnológica',
                'tipo' => 'Feria',
                'lugar' => 'Bloque Universitario',
                'fecha' => '12 de octubre'
            ],
            [
                'titulo' => 'Seminario de IA',
                'tipo' => 'Seminario',
                'lugar' => 'Auditorio Principal',
                'fecha' => '20 de octubre'
            ],
        ];

        return view('eventos.practica', compact('eventos'));
    }
}
