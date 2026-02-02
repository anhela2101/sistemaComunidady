@extends('layouts.master')

@section('content')

<section class="position-relative d-flex align-items-center justify-content-center text-white" style="height: 60vh; padding-top: 80px; overflow: hidden;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark z-1 opacity-50"></div>
    <img src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=1600" class="position-absolute w-100 h-100 object-fit-cover z-0 animate-zoom" alt="Contacto Rural">
    
    <div class="container position-relative z-2 text-center" data-aos="zoom-in">
        <span class="badge bg-secondary text-dark px-3 py-2 rounded-pill mb-3 shadow-sm animate-float">Hablemos</span>
        <h1 class="display-2 fw-bold text-white mb-3">Estamos Conectados</h1>
        <p class="lead opacity-90 mx-auto" style="max-width: 700px;">
            ¿Tienes una idea para tu concejo? ¿Quieres organizar un evento? Contáctanos y hagamos realidad la dinamización rural.
        </p>
    </div>
</section>

<section class="py-5" style="margin-top: -80px; position: relative; z-index: 10;">
    <div class="container">
        <div class="row g-5">
            
            <div class="col-lg-5" data-aos="fade-right">
                <div class="card-glass p-5 h-100 text-dark">
                    <h3 class="fw-bold mb-4 text-primary">Información</h3>
                    [cite_start]<p class="text-muted mb-5">Laura Mota Maillo impulsa este proyecto en el territorio del Grupo de Desarrollo Rural Camín Real de la Mesa[cite: 1, 3].</p>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-primary">
                            <i class="fa-solid fa-location-dot fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Ubicación</h6>
                            <p class="text-muted small mb-0">Camín Real de la Mesa, Asturias</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-secondary">
                            <i class="fa-solid fa-envelope fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email</h6>
                            <p class="text-muted small mb-0">contacto@tiketrural.com</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-success">
                            <i class="fa-solid fa-phone fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Teléfono</h6>
                            <p class="text-muted small mb-0">+34 600 000 000</p>
                        </div>
                    </div>

                    <hr class="my-4 border-secondary opacity-25">

                    <h6 class="fw-bold mb-3">Síguenos</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-custom text-primary border-primary rounded-circle" style="width: 45px; height: 45px; padding: 0; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="btn btn-outline-custom text-primary border-primary rounded-circle" style="width: 45px; height: 45px; padding: 0; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-custom text-primary border-primary rounded-circle" style="width: 45px; height: 45px; padding: 0; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-white p-5 rounded-5 shadow-lg border border-light">
                    <h3 class="fw-bold mb-4">Envíanos un Mensaje</h3>
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0 rounded-4" id="name" placeholder="Tu Nombre">
                                    <label for="name" class="text-muted">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0 rounded-4" id="email" placeholder="name@example.com">
                                    <label for="email" class="text-muted">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select bg-light border-0 rounded-4" id="service">
                                        <option selected>Interés General</option>
                                        <option value="1">Dinamización Centros Sociales</option>
                                        <option value="2">Fiestas y Asociaciones</option>
                                        <option value="3">Cultura Municipal</option>
                                        <option value="4">Turismo Rural</option>
                                    </select>
                                    <label for="service" class="text-muted">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0 rounded-4" placeholder="Mensaje" id="message" style="height: 150px"></textarea>
                                    <label for="message" class="text-muted">¿Cómo podemos ayudarte?</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-custom w-100 py-3 shadow-sm">
                                    Enviar Mensaje <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container-fluid p-0">
        <div class="w-100 grayscale-map" data-aos="zoom-in" style="height: 400px; background-color: #e9ecef; position: relative; overflow: hidden;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374466.023214567!2d-6.356262976451636!3d43.25048259207036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368c5b0ec033b9%3A0x863372295c3702d!2sCam%C3%ADn%20Real%20de%20la%20Mesa!5e0!3m2!1ses!2ses!4v1700000000000!5m2!1ses!2ses" 
                width="100%" 
                height="100%" 
                style="border:0; filter: grayscale(100%) contrast(1.2);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            
            <div class="position-absolute top-50 start-50 translate-middle text-center bg-white p-4 rounded-4 shadow border border-success border-3 d-none d-md-block">
                <i class="fa-solid fa-map-location-dot fs-1 text-success mb-2"></i>
                <h5 class="fw-bold mb-0">Zona de Actuación</h5>
                <small class="text-muted">Camín Real de la Mesa</small>
            </div>
        </div>
    </div>
</section>

@endsection