@extends('layouts.master')

@section('content')

<section style="padding-top: 150px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-3">Apoyo Técnico Integral</h1>
                [cite_start]<p class="lead text-muted">Soporte profesional para comisiones de fiestas, asociaciones de vecinos, AMPAs, cofradías y grupos deportivos [cite: 73-80].</p>
                <div class="alert alert-warning border-0 shadow-sm mt-4">
                    <i class="fa-solid fa-circle-info me-2"></i>
                    <strong>Objetivo:</strong> Aliviar la sobrecarga del tejido asociativo y garantizar eventos de calidad.
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-5 shadow-lg" alt="Evento Nocturno">
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white mt-5">
    <div class="container">
        <h3 class="text-center mb-5">Catálogo de Servicios</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-glass p-4 text-center h-100">
                    <i class="fa-solid fa-sliders fs-1 text-primary mb-3"></i>
                    <h5>Infraestructura</h5>
                    [cite_start]<p class="small text-muted">Sonorización profesional de conciertos, iluminación escénica y montaje [cite: 85-86].</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-glass p-4 text-center h-100">
                    <i class="fa-solid fa-wand-magic-sparkles fs-1 text-secondary mb-3"></i>
                    <h5>Efectos Especiales</h5>
                    [cite_start]<p class="small text-muted">Cañones de espuma, confeti y animación dinámica para todos los públicos[cite: 87].</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-glass p-4 text-center h-100">
                    <i class="fa-solid fa-shapes fs-1 text-accent mb-3" style="color: var(--accent);"></i>
                    <h5>Hinchables y Juegos</h5>
                    [cite_start]<p class="small text-muted">Parques hinchables seguros y actividades infantiles durante las fiestas[cite: 88].</p>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="bg-light p-4 rounded-4 text-center border-2 border-dashed border-secondary">
                    <h4 class="text-primary"><i class="fa-solid fa-drum me-2"></i> Identidad Local</h4>
                    [cite_start]<p class="mb-0">Reinterpretamos las actividades tradicionales: juegos de pueblo, concursos, espichas y talleres de cultura local[cite: 90].</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection