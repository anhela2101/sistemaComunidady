@extends('layouts.master')

@section('content')

<section style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Más que un Proyecto, <br>una Misión</h1>
        <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up" data-aos-delay="100">
            El territorio presenta desafíos estructurales que requieren respuestas profesionales, sostenibles y continuadas.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card-glass p-5 border-0 bg-light">
                    <h3 class="mb-4">El Contexto Actual</h3>
                    <ul class="list-unstyled d-grid gap-3">
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-person-cane text-danger mt-1 me-3"></i>
                            <div><strong>Envejecimiento:</strong> Riesgo creciente de soledad no deseada.</div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-house-crack text-danger mt-1 me-3"></i>
                            <div><strong>Dispersión:</strong> Dificultad de acceso a servicios culturales.</div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-store-slash text-danger mt-1 me-3"></i>
                            <div><strong>Espacios Vacíos:</strong> Centros sociales en desuso o infrautilizados.</div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-people-group text-danger mt-1 me-3"></i>
                            <div><strong>Sobrecarga:</strong> Debilitamiento del tejido asociativo tradicional.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in">
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb7d5763?q=80&w=1000&auto=format&fit=crop" class="img-fluid rounded-5 shadow-lg" alt="Mujer Rural">
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-5 display-5 fw-bold">10 Objetivos Estratégicos</h2>
        <div class="row g-3">
            <div class="col-md-4 col-lg-3" data-aos="fade-up">
                <div class="p-4 border rounded-4 h-100 text-center hover-bg-light transition">
                    <i class="fa-solid fa-house-chimney-medical text-success fs-3 mb-3"></i>
                    <h6 class="fw-bold">Reactivar Espacios</h6>
                    <small class="text-muted">Centros sociales vivos.</small>
                </div>
            </div>
            <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 border rounded-4 h-100 text-center hover-bg-light transition">
                    <i class="fa-solid fa-heart-pulse text-danger fs-3 mb-3"></i>
                    <h6 class="fw-bold">Combatir Soledad</h6>
                    <small class="text-muted">Actividad presencial.</small>
                </div>
            </div>
            <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 border rounded-4 h-100 text-center hover-bg-light transition">
                    <i class="fa-solid fa-briefcase text-primary fs-3 mb-3"></i>
                    <h6 class="fw-bold">Crear Empleo</h6>
                    <small class="text-muted">Fijar población activa.</small>
                </div>
            </div>
            <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 border rounded-4 h-100 text-center hover-bg-light transition">
                    <i class="fa-solid fa-globe text-warning fs-3 mb-3"></i>
                    <h6 class="fw-bold">Turismo Rural</h6>
                    <small class="text-muted">Servicios complementarios.</small>
                </div>
            </div>
            </div>
    </div>
</section>

@endsection