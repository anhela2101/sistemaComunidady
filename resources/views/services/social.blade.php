@extends('layouts.master')

@section('content')

<section class="position-relative d-flex align-items-center justify-content-center text-white" style="height: 60vh; padding-top: 80px;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60 z-1"></div>
    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=1600" class="position-absolute w-100 h-100 object-fit-cover z-0 animate-ken-burns" alt="Comunidad">
    
    <div class="container position-relative z-2 text-center" data-aos="zoom-in">
        <span class="badge bg-secondary text-dark px-3 py-2 rounded-pill mb-3">Línea Operativa 1</span>
        <h1 class="display-2 fw-bold">Centros Sociales Vivos</h1>
        <p class="lead opacity-90 mx-auto" style="max-width: 700px;">Transformamos espacios cerrados en el corazón de la comunidad con actividad continuada.</p> </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        
        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1581579438747-1dc8d17bbce4?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-5 shadow-lg" alt="Talleres Mayores">
                    <div class="position-absolute -bottom-4 -end-4 bg-white p-3 rounded-4 shadow">
                        <i class="fa-solid fa-heart-pulse text-danger fs-2"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h3 class="text-primary fw-bold mb-3">Personas Mayores</h3>
                <p class="text-muted mb-4">Programas de memoria y bienestar para combatir el deterioro y el aislamiento.</p> <div class="row g-3">
                    <div class="col-sm-6"><i class="fa-solid fa-check text-success me-2"></i> Reminiscencia audiovisual</div> <div class="col-sm-6"><i class="fa-solid fa-check text-success me-2"></i> Motricidad suave</div> <div class="col-sm-6"><i class="fa-solid fa-check text-success me-2"></i> Alfabetización digital</div> <div class="col-sm-6"><i class="fa-solid fa-check text-success me-2"></i> Espacios de escucha</div> </div>
            </div>
        </div>

        <hr class="my-5 border-light opacity-50">

        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-lg-6 order-2 order-lg-1 pe-lg-5">
                <h3 class="text-secondary fw-bold mb-3">Infancia y Familia</h3>
                <p class="text-muted mb-4">Espacios de juego y creatividad para recuperar la vida comunitaria.</p> <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa-solid fa-star text-warning me-2"></i> Juegos cooperativos y psicomotores.</li> <li class="mb-2"><i class="fa-solid fa-star text-warning me-2"></i> Talleres de naturaleza y reciclaje.</li> <li class="mb-2"><i class="fa-solid fa-star text-warning me-2"></i> Cuentacuentos y cine infantil.</li> </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-5 shadow-lg" alt="Niños Jugando">
            </div>
        </div>

        <div class="card-glass p-5 text-center mt-5 position-relative overflow-hidden" data-aos="zoom-in">
            <div class="position-absolute top-0 start-0 w-100 h-5 bg-primary"></div>
            <i class="fa-solid fa-guitar display-4 text-info mb-3 animate-float"></i>
            <h3 class="fw-bold">Juventud e Intergeneracional</h3>
            <p class="text-muted mx-auto mb-0" style="max-width: 600px;">
                Ocio alternativo nocturno, talleres audiovisuales, recuperación de la tradición oral y teatro social para unir generaciones. </p>
        </div>

    </div>
</section>

@endsection