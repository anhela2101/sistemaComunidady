@extends('layouts.master')

@section('content')

<section style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-4">Viajes con <span style="color: var(--primary);">Retorno Local</span></h1>
        <p class="lead text-muted mx-auto" style="max-width: 800px;">
            Organización de viajes culturales y de ocio diseñados estratégicamente para reinvertir en la economía del Camín Real de la Mesa.
        </p>
    </div>

    <div class="container mt-5">
        <div class="row align-items-center bg-white rounded-5 shadow-lg overflow-hidden">
            <div class="col-lg-6 p-0">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=800&auto=format&fit=crop" class="img-fluid h-100 object-fit-cover" style="min-height: 400px;" alt="Viaje en grupo">
            </div>
            <div class="col-lg-6 p-5">
                <h3 class="mb-4 text-primary fw-bold">Economía Circular</h3>
                <p class="mb-4">Nuestros viajes no solo son ocio, son un compromiso. [cite_start]Un porcentaje de cada viaje se queda en el territorio [cite: 129-130].</p>
                
                <ul class="list-unstyled d-grid gap-3">
                    <li class="d-flex align-items-center p-3 bg-light rounded-3 shadow-sm">
                        <i class="fa-solid fa-utensils fs-4 text-warning me-3"></i>
                        [cite_start]<div><strong>Gastronomía:</strong> Consumo en restaurantes locales[cite: 132].</div>
                    </li>
                    <li class="d-flex align-items-center p-3 bg-light rounded-3 shadow-sm">
                        <i class="fa-solid fa-bed fs-4 text-success me-3"></i>
                        [cite_start]<div><strong>Alojamiento:</strong> Contratación de casas y hoteles de la zona[cite: 131].</div>
                    </li>
                    <li class="d-flex align-items-center p-3 bg-light rounded-3 shadow-sm">
                        <i class="fa-solid fa-basket-shopping fs-4 text-primary me-3"></i>
                        [cite_start]<div><strong>Comercio:</strong> Visitas a artesanos y tiendas locales[cite: 132].</div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row mt-5 g-4 text-center">
            <div class="col-md-3">
                <div class="p-3 border rounded-3"><i class="fa-solid fa-bus me-2"></i> Excursiones de día</div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border rounded-3"><i class="fa-solid fa-landmark me-2"></i> Viajes culturales</div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border rounded-3"><i class="fa-solid fa-users me-2"></i> Viajes de asociaciones</div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border rounded-3"><i class="fa-solid fa-rocket me-2"></i> Viajes juveniles</div>
            </div>
        </div>
        <p class="text-center mt-3 text-muted small">[cite: 121-127]</p>
    </div>
</section>

@endsection