<footer class="mt-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <a class="d-flex align-items-center mb-4 text-decoration-none" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-dinamia.jpeg') }}" alt="DINAMIA Logo" height="50" class="me-2 d-inline-block align-text-top animate-float">
                    <div class="d-flex flex-column">
                        <span class="fw-bolder text-white ls-1" style="font-size: 1.4rem; line-height: 1;">DINAMIA</span>
                        <span class="small text-white-50 ls-2" style="font-size: 0.7rem;">GESTIÓN SOCIOCULTURAL</span>
                    </div>
                </a>
                <p class="opacity-75">Gestión cultural, eventos y activación rural en <strong>Gestión Socio Cultural</strong>.</p>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <h5 class="mb-4">Servicios</h5>
                <ul class="list-unstyled opacity-75 d-grid gap-2">
                    <li><a href="{{ route('services.social') }}">Centros Sociales</a></li>
                    <li><a href="{{ route('services.tourism') }}">Turismo Rural</a></li>
                    <li><a href="{{ route('services.associations') }}">Fiestas</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5 class="mb-4">Proyecto</h5>
                <ul class="list-unstyled opacity-75 d-grid gap-2">
                    <li><a href="{{ route('project') }}">Misión</a></li>
                    <li><a href="{{ route('services.travel') }}">Viajes</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5 class="mb-4">Contacto</h5>
                <p class="opacity-75"><i class="fa-solid fa-location-dot me-2" style="color: var(--dinamia-green-light);"></i> Asturias, España</p>
                <p class="opacity-75"><i class="fa-solid fa-envelope me-2" style="color: var(--dinamia-blue-light);"></i> laura@dinamiactiva.com</p>
                <p class="opacity-75"><i class="fa-solid fa-phone me-2" style="color: var(--dinamia-blue-light);"></i> +34 649 59 75 56</p>
            </div>
        </div>
        <hr class="border-light my-5 opacity-25">
        <div class="text-center small opacity-50">
            © 2026 DINAMIA Gestión Sociocultural. Financiado con apoyo LEADER.
        </div>
    </div>
</footer>