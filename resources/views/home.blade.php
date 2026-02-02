@extends('layouts.master')

@section('content')

<section class="position-relative vh-100 d-flex align-items-center justify-content-center overflow-hidden" style="background: linear-gradient(135deg, var(--dinamia-blue-dark), var(--dinamia-green-dark));">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark z-1 opacity-30"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0 animate-ken-burns">
        <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover" style="filter: saturate(1.2);">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-forest-stream-in-the-sunlight-529-large.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container position-relative z-2 text-center text-white mt-5">
        <span class="badge bg-white text-dark mb-4 px-3 py-2 rounded-pill fw-bold ls-2 animate-float shadow-lg" style="color: var(--dinamia-blue-dark) !important;">
            DINAMIA
        </span>
        
        <h1 class="display-1 fw-bold mb-4 text-white" data-aos="fade-up">
            Gestión <br><span style="color: var(--dinamia-green-light);">Socio Cultural</span>
        </h1>
        
        <p class="lead mb-5 mx-auto opacity-90 fw-light" style="max-width: 700px;">
            Dinamización sociocultural, animación comunitaria y gestión de eventos.
        </p>
        
        <div class="d-flex gap-3 justify-content-center">
            <a href="{{ route('project') }}" class="btn btn-custom border-0 hover-shine">Descubrir Proyecto</a>
            <a href="{{ route('services.social') }}" class="btn btn-outline-light-custom hover-shine">Nuestros Servicios</a>
        </div>
    </div>

    <div class="position-absolute bottom-0 w-100" style="line-height: 0;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 80px; fill: var(--light-bg);">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</section>

<section class="py-5 bg-white position-relative overflow-hidden">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
             <span class="fw-bold text-uppercase ls-1" style="color: var(--dinamia-blue-dark);">Galería Visual</span>
             <h2 class="display-4 fw-bold">El Latido de la Gestión Socio Cultural</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="img-hover-zoom h-100" style="min-height: 500px;">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1000&auto=format&fit=crop" alt="Paisaje Rural">
                    <div class="img-overlay">
                        <h4>Territorio Vivo</h4>
                        <p class="text-white-50">Paisajes que inspiran comunidad.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                        <div class="img-hover-zoom" style="height: 280px;">
                            <img src="https://images.unsplash.com/photo-1561574657-657456e69080?q=80&w=800&auto=format&fit=crop" alt="Tradición">
                            <div class="img-overlay">
                                <h4>Nuestras Raíces</h4>
                                <p class="text-white-50">Recuperando tradiciones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" data-aos="fade-left" data-aos-delay="200">
                        <div class="img-hover-zoom" style="height: 280px;">
                            <img src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=800&auto=format&fit=crop" alt="Comunidad">
                            <div class="img-overlay">
                                <h4>Encuentro Social</h4>
                                <p class="text-white-50">Espacios para compartir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--light-bg); position: relative; overflow: hidden;">
    <i class="fa-solid fa-seedling position-absolute opacity-5 animate-spin-slow" style="font-size: 25rem; bottom: -10%; left: -5%; z-index: 0; color: var(--dinamia-green-dark);"></i>

    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative" style="height: 500px;" data-aos="fade-right">
                <div class="position-absolute top-0 start-0 w-75 h-75 animate-float-y" style="z-index: 1;">
                     <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-5 shadow-lg object-fit-cover h-100 w-100" alt="Reunión">
                </div>
                <div class="position-absolute bottom-0 end-0 w-60 h-60 animate-float-x" style="z-index: 2; margin-bottom: 5%; margin-right: 5%;">
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=800" class="img-fluid rounded-5 shadow-lg border border-4 border-white object-fit-cover h-100 w-100" alt="Amigos">
                </div>
            </div>
            
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <span class="fw-bold text-uppercase ls-1" style="color: var(--dinamia-green-dark);">Impacto Real</span>
                <h2 class="display-4 fw-bold mb-4">Generación de Valor Sostenible</h2>
                <p class="text-muted mb-5">
                    No solo es una actividad económica, es una herramienta de transformación social para fijar población en el medio rural.
                </p>
                
                <div class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white p-3 rounded-circle me-3 shadow-sm"><i class="fa-solid fa-briefcase fs-4" style="color: var(--dinamia-blue-dark);"></i></div>
                    <div>
                        <h5 class="fw-bold">Empleo Directo</h5>
                        <p class="text-muted small mb-0">Dinamizador sociocultural y técnico auxiliar.</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-3 rounded-circle me-3 shadow-sm"><i class="fa-solid fa-handshake fs-4" style="color: var(--dinamia-green-dark);"></i></div>
                    <div>
                        <h5 class="fw-bold">Red de Colaboradores</h5>
                        <p class="text-muted small mb-0">Contratación de monitores, artesanos y músicos locales.</p>
                    </div>
                </div>

                <a href="{{ route('project') }}" class="btn btn-custom mt-3 hover-shine">Ver Memoria Económica</a>
            </div>
        </div>
    </div>
</section>

@endsection