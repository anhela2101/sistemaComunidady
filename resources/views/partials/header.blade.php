<div class="container fixed-top px-3" style="z-index: 1030;">
    <nav class="navbar navbar-expand-xl navbar-glass">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-dinamia.jpeg') }}" alt="DINAMIA Logo" height="50" class="me-2 d-inline-block align-text-top animate-float">
                <div class="d-flex flex-column justify-content-center">
                    <span class="fw-bolder ls-1 d-none d-sm-block" style="color: var(--dinamia-blue-dark); font-size: 1.2rem; line-height: 1;">DINAMIA</span>
                </div>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <i class="fa-solid fa-bars-staggered" style="color: var(--dinamia-blue-dark);"></i>
            </button>

            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('project') }}">Proyecto</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('services.social') }}">Centros Sociales</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('services.associations') }}">Eventos</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('services.municipal') }}">Cultura Mun.</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('services.tourism') }}">Turismo</a></li>
                    <li class="nav-item"><a class="nav-link px-2" href="{{ route('services.travel') }}">Viajes</a></li>
                    
                    <li class="nav-item ms-lg-2 mt-3 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-custom btn-sm py-2 px-4">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>