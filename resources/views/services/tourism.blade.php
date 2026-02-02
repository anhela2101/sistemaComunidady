@extends('layouts.master')

@section('content')

<section class="py-5 bg-light position-relative" style="padding-top: 150px !important;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold text-primary mb-4" data-aos="fade-down">Turismo Rural Activo</h1>
        <p class="lead text-muted mx-auto" style="max-width: 800px;" data-aos="fade-up">
            Servicios profesionales para casas rurales, hoteles y campings que mejoran la experiencia del huésped. </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="card-glass h-100 p-4 text-center hover-shine">
                    <div class="mb-4 text-primary"><i class="fa-solid fa-cloud-showers-heavy display-3"></i></div>
                    <h3>Garantía "Día de Lluvia"</h3>
                    <p class="text-muted">Ofrecemos animación infantil y familiar dentro del alojamiento cuando el clima no acompaña.</p> </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <div class="card-glass h-100 p-4 text-center hover-shine" style="background: #0D2112; color: white;">
                    <div class="mb-4 text-warning"><i class="fa-solid fa-moon display-3 animate-float"></i></div>
                    <h3 class="text-white">Noches Mágicas</h3>
                    <p class="text-white-50">Cine de verano al aire libre, talleres de astronomía y actividades temáticas nocturnas.</p> </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-glass h-100 p-4 text-center hover-shine">
                    <div class="mb-4 text-success"><i class="fa-solid fa-person-hiking display-3"></i></div>
                    <h3>Atención a Grupos</h3>
                    <p class="text-muted">Dinamización específica para grupos organizados, clubes deportivos y peregrinos.</p> </div>
            </div>

        </div>
        
        <div class="mt-5 rounded-5 overflow-hidden shadow-lg position-relative" style="height: 450px;" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1587061949409-02df41d5e562?q=80&w=1600" class="w-100 h-100 object-fit-cover animate-ken-burns" alt="Casa Rural">
            <div class="position-absolute bottom-0 start-0 m-4 bg-white bg-opacity-90 p-4 rounded-4 shadow backdrop-blur">
                <h4 class="fw-bold mb-0">Valor Añadido</h4>
                <p class="mb-0 text-muted">Diferénciate de la competencia</p>
            </div>
        </div>
    </div>
</section>

@endsection