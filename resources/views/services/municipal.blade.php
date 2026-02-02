@extends('layouts.master')

@section('content')

<section style="padding-top: 150px; text-align: center;">
    <div class="container">
        <span class="badge bg-secondary text-dark px-3 py-2 rounded-pill mb-3">Línea Operativa 3</span>
        <h1 class="display-3 fw-bold mb-4">Cultura Municipal <br>Profesionalizada</h1>
        <p class="lead text-muted mx-auto" style="max-width: 800px;">
            Solución ante los recursos limitados de los concejos. [cite_start]Proveemos programación estable, ciclos temáticos y actividades institucionales [cite: 92-93].
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-md-6" data-aos="fade-right">
                <div class="h-100 bg-white p-5 rounded-5 shadow-sm d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-4">Agenda Estable</h3>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-calendar-days fs-3 text-success me-3"></i>
                        <div>
                            <strong class="d-block">Programación Mensual</strong>
                            <small class="text-muted">Eventos regulares para crear hábito cultural.</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-film fs-3 text-warning me-3"></i>
                        <div>
                            <strong class="d-block">Cinefórum Itinerante</strong>
                            [cite_start]<small class="text-muted">Cine de calidad que viaja por las parroquias[cite: 96].</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-book fs-3 text-primary me-3"></i>
                        <div>
                            <strong class="d-block">Ciclos Temáticos</strong>
                            <small class="text-muted">Conferencias y jornadas formativas especializadas.</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6" data-aos="fade-left">
                <div class="h-100 bg-primary p-5 rounded-5 text-white shadow-lg">
                    <h3 class="fw-bold mb-4 text-white">Eventos Institucionales</h3>
                    [cite_start]<p class="opacity-75 mb-4">Gestión integral de fechas clave del calendario municipal[cite: 99]:</p>
                    <div class="row text-center g-3">
                        <div class="col-4">
                            <div class="bg-white bg-opacity-10 p-3 rounded-3">
                                <i class="fa-solid fa-venus fs-2 mb-2"></i>
                                <div class="small fw-bold">Día de la Mujer</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bg-white bg-opacity-10 p-3 rounded-3">
                                <i class="fa-solid fa-person-cane fs-2 mb-2"></i>
                                <div class="small fw-bold">Día del Mayor</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bg-white bg-opacity-10 p-3 rounded-3">
                                <i class="fa-solid fa-book-open fs-2 mb-2"></i>
                                <div class="small fw-bold">Día del Libro</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-top border-white border-opacity-25">
                        <i class="fa-solid fa-school me-2"></i> También charlas para centros educativos.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection