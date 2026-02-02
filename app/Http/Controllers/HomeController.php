<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Datos simulados (Idealmente vendrían de una Base de Datos)
        $services = [
            ['title' => 'Fiesta Infantil', 'img' => 'ico-planet-serv-01.png', 'desc' => 'De la planificación a la animación, creamos un día especial e inolvidable.'],
            ['title' => 'Decoración y Catering', 'img' => 'ico-planet-serv-02.png', 'desc' => 'Nos ocupamos de todo, decoración espectacular y snacks irresistibles.'],
            ['title' => 'Talleres', 'img' => 'ico-planet-serv-03.png', 'desc' => 'Experiencia enriquecedora para niños: repostería, pintura, ciencia.'],
            ['title' => 'Inflables Temáticos', 'img' => 'ico-planet-serv-04.png', 'desc' => '¡La diversión está garantizada con nuestros juegos inflables!'],
            ['title' => 'Juegos de Competencia', 'img' => 'ico-planet-serv-05.png', 'desc' => 'Pon a prueba tus habilidades y despierta tu espíritu competitivo.'],
            ['title' => 'Fútbol', 'img' => 'ico-planet-serv-07-1.png', 'desc' => 'Instructor capacitado para mini partidos de fútbol.'],
            ['title' => 'Videojuegos', 'img' => 'ico-planet-serv-08-1.png', 'desc' => 'Universo de aventuras coloridas y emocionantes.'],
            ['title' => 'Foto y Video 360°', 'img' => 'ico-planet-serv-06.png', 'desc' => 'Captura los momentos más preciosos y revive los recuerdos.']
        ];

        $stats = [
            ['count' => '4,800', 'label' => 'Eventos'],
            ['count' => '3,200', 'label' => 'Clientes'],
            ['count' => '150', 'label' => 'Empresas'],
            ['count' => '19,000', 'label' => 'Horas de Diversión'],
        ];

        return view('home', compact('services', 'stats'));
    }
}