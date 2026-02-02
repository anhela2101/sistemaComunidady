@extends('layouts.master')

@section('content')

<section class="position-relative d-flex align-items-center justify-content-center text-white overflow-hidden" style="height: 60vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark z-1 opacity-40"></div>
    
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0 animate-ken-burns">
        <img src="https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?q=80&w=1600" class="w-100 h-100 object-fit-cover" alt="Contacto Rural">
    </div>
    
    <div class="container position-relative z-2 text-center" data-aos="zoom-in" data-aos-duration="1200">
        <span class="d-inline-block py-1 px-3 rounded-pill bg-white bg-opacity-20 border border-white border-opacity-50 text-white fw-bold mb-3 ls-2 text-uppercase backdrop-blur animate-float">
            Hablemos
        </span>
        <h1 class="display-2 fw-bold text-white mb-3" style="text-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            Estamos <span style="color: var(--dinamia-green-light);">Conectados</span>
        </h1>
        <p class="lead opacity-90 mx-auto fw-light" style="max-width: 600px;">
            ¿Tienes una propuesta? ¿Quieres organizar un evento? Tu mensaje es el primer paso.
        </p>
    </div>
</section>

<section class="py-5 position-relative" style="background-color: var(--light-bg);">
    <div class="container position-relative z-1">
        <div class="row g-5">
            
            <div class="col-lg-5">
                <div data-aos="fade-right">
                    <h3 class="fw-bold mb-4" style="color: var(--dinamia-blue-dark);">Información de Contacto</h3>
                    <p class="text-muted mb-5">DINAMIA impulsa este proyecto en el ámbito de la Gestión Socio Cultural.</p>
                </div>

                <div class="card-glass mb-4 p-3 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-icon-gradient text-white rounded-circle p-3 me-3">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Nuestra Base</h6>
                        <p class="text-muted small mb-0">Gestión Socio Cultural, Asturias, España</p>
                    </div>
                </div>

                <div class="card-glass mb-4 p-3 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-icon-gradient text-white rounded-circle p-3 me-3">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Correo Electrónico</h6>
                        <a href="mailto:info@dinamia.com" class="text-muted small mb-0 text-decoration-none">laura@dinamiactiva.com</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="card-glass p-5 shadow-lg border-0 position-relative overflow-hidden">
                    <h3 class="fw-bold mb-4 position-relative z-1">Envíanos un Mensaje</h3>
                    <form>
                        <div class="row g-4 position-relative z-1">
                            <div class="col-md-6">
                                <input type="text" class="form-control bg-light border-0 rounded-4 p-3" placeholder="Nombre">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control bg-light border-0 rounded-4 p-3" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0 rounded-4 p-3" placeholder="Mensaje" style="height: 150px"></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-custom w-100 py-3 shadow-sm">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="position-relative rounded-5 overflow-hidden shadow-lg" data-aos="zoom-in-up" style="height: 450px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374454.7644754766!2d-6.337779776997092!3d43.25667354143257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368c7a67307895%3A0x82297b4f70693a02!2sCam%C3%ADn%20Real%20de%20la%20Mesa!5e0!3m2!1ses!2ses!4v1700000000000!5m2!1ses!2ses" 
                width="100%" height="100%" 
                style="border:0; filter: grayscale(20%) contrast(1.1);" 
                allowfullscreen="" loading="lazy">
            </iframe>
            <div class="position-absolute bottom-0 start-0 m-4 bg-white p-4 rounded-4 shadow-lg border-start border-5 border-success d-none d-md-block animate-float">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-map-location-dot fs-2 text-success me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Zona de Actuación</h6>
                        <small class="text-muted">Gestión Socio Cultural</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection