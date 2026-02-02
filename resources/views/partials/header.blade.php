<div class="container fixed-top px-3" style="z-index: 1030;">
    <nav class="navbar navbar-expand-lg navbar-glass">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
<img src="{{ asset('images/logo-dinamia.jpeg') }}" alt="DINAMIA Logo" height="55" class="me-2 d-inline-block align-text-top animate-float">                
                <div class="d-flex flex-column justify-content-center">
                    <span class="fw-bolder ls-1 d-none d-sm-block" style="color: var(--dinamia-blue-dark); font-size: 1.2rem; line-height: 1;">DINAMIA</span>
                    <span class="small ls-2 d-none d-sm-block" style="color: var(--dinamia-green-dark); font-size: 0.65rem; letter-spacing: 2px;">GESTIÓN SOCIOCULTURAL</span>
                </div>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <i class="fa-solid fa-bars-staggered" style="color: var(--dinamia-blue-dark);"></i>
            </button>

            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Proyecto</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Servicios</a>
                        <ul class="dropdown-menu border-0 shadow-lg rounded-4 p-2 mt-3 border border-1 border-light">
                            <li><a class="dropdown-item rounded-3 py-2 text-muted" href="{{ route('services.social') }}"><i class="fa-solid fa-users me-2" style="color: var(--dinamia-green-dark);"></i> Centros Sociales</a></li>
                            <li><a class="dropdown-item rounded-3 py-2 text-muted" href="{{ route('services.associations') }}"><i class="fa-solid fa-masks-theater me-2" style="color: var(--dinamia-blue-light);"></i> Fiestas y Eventos</a></li>
                            <li><a class="dropdown-item rounded-3 py-2 text-muted" href="{{ route('services.municipal') }}"><i class="fa-solid fa-landmark me-2" style="color: var(--dinamia-blue-dark);"></i> Cultura Municipal</a></li>
                            <li><a class="dropdown-item rounded-3 py-2 text-muted" href="{{ route('services.tourism') }}"><i class="fa-solid fa-map-location-dot me-2" style="color: var(--dinamia-green-light);"></i> Turismo Rural</a></li>
                            <li><a class="dropdown-item rounded-3 py-2 text-muted" href="{{ route('services.travel') }}"><i class="fa-solid fa-bus me-2" style="color: var(--dinamia-blue-dark);"></i> Viajes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-custom btn-sm">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>