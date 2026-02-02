<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINAMIA | Gestión Socio Cultural</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">

    <style>
        /* --- PALETA DE COLORES DINAMIA --- */
        :root {
            --dinamia-green-light: #9ACD32;
            --dinamia-green-dark: #2E7D32;
            --dinamia-blue-light: #00BFFF;
            --dinamia-blue-dark: #0047AB;
            --light-bg: #F0F8FF;
            --dark-text: #0A2342;
            --glass-bg: rgba(255, 255, 255, 0.9);
            --glass-border: rgba(0, 191, 255, 0.3);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5 {
            font-weight: 800;
            color: var(--dinamia-blue-dark);
            letter-spacing: -0.5px;
        }

        /* --- ANIMACIONES --- */
        @keyframes zoomSlow { 0% { transform: scale(1); } 100% { transform: scale(1.2); } }
        .animate-ken-burns { animation: zoomSlow 25s alternate infinite linear; }
        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-12px); } 100% { transform: translateY(0px); } }
        .animate-float { animation: float 5s ease-in-out infinite; }
        @keyframes floatVertical { 0% { transform: translateY(0); } 50% { transform: translateY(-20px); } 100% { transform: translateY(0); } }
        .animate-float-y { animation: floatVertical 7s ease-in-out infinite; }
        @keyframes floatHorizontal { 0% { transform: translateX(0); } 50% { transform: translateX(15px); } 100% { transform: translateX(0); } }
        .animate-float-x { animation: floatHorizontal 8s ease-in-out infinite reverse; }
        
        .hover-shine { position: relative; overflow: hidden; }
        .hover-shine::before { content: ''; position: absolute; top: 0; left: -75%; z-index: 2; display: block; width: 50%; height: 100%; background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.4) 100%); transform: skewX(-25deg); transition: .75s; }
        .hover-shine:hover::before { left: 125%; }

        /* --- COMPONENTES UI --- */
        .navbar-glass {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 50px;
            padding: 10px 30px;
            margin-top: 20px;
            box-shadow: 0 10px 30px rgba(0, 71, 171, 0.1);
            border: 1px solid var(--glass-border);
            transition: all 0.3s;
        }

        .nav-link {
            font-weight: 700; color: var(--dinamia-blue-dark) !important;
            text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;
            padding: 0 15px !important; position: relative;
        }
        .nav-link::after {
            content: ''; position: absolute; bottom: 0; left: 50%; width: 0; height: 2px;
            background: linear-gradient(to right, var(--dinamia-green-light), var(--dinamia-blue-light));
            transition: 0.3s; transform: translateX(-50%);
        }
        .nav-link:hover::after { width: 70%; }

        .card-glass {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 71, 171, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card-glass:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(46, 125, 50, 0.15);
            border-image: linear-gradient(to right, var(--dinamia-green-light), var(--dinamia-blue-light));
            border-image-slice: 1;
            background: #fff;
        }

        .btn-custom {
            background: linear-gradient(to right, var(--dinamia-blue-dark), var(--dinamia-green-dark));
            color: white; border-radius: 50px;
            padding: 12px 35px; font-weight: 700; border: none;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0, 71, 171, 0.2);
        }
        .btn-custom:hover {
            background: linear-gradient(to right, var(--dinamia-green-dark), var(--dinamia-blue-dark));
            color: white; transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 71, 171, 0.3);
        }
        
        .btn-outline-light-custom {
            border: 2px solid white; color: white; font-weight: 700;
            border-radius: 50px; padding: 12px 35px; transition: 0.3s; background: transparent;
        }
        .btn-outline-light-custom:hover { background: white; color: var(--dinamia-blue-dark); }

        .icon-gradient {
            background: linear-gradient(to bottom right, var(--dinamia-green-light), var(--dinamia-blue-dark));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .bg-icon-gradient { background: linear-gradient(to bottom right, var(--dinamia-green-light), var(--dinamia-blue-light)); }

        footer {
            background: var(--dinamia-blue-dark); color: rgba(255,255,255,0.8);
            padding: 80px 0 40px; border-top-left-radius: 60px; border-top-right-radius: 60px;
            position: relative;
        }
        footer::before {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px;
            background: linear-gradient(to right, var(--dinamia-green-light), var(--dinamia-blue-light), var(--dinamia-blue-dark));
        }
        footer a { color: inherit; text-decoration: none; transition: 0.3s; }
        footer a:hover { color: var(--dinamia-green-light); padding-left: 5px; }
        footer h3, footer h5 { color: white !important; }
        
        /* ESTILOS DE GALERÍA Y ZOOM */
        .img-hover-zoom {
            position: relative; overflow: hidden; border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15); height: 100%;
        }
        .img-hover-zoom img {
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            width: 100%; height: 100%; object-fit: cover;
        }
        .img-hover-zoom:hover img { transform: scale(1.1); }
        .img-overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to top, rgba(0, 71, 171, 0.8) 0%, rgba(0,0,0,0) 60%);
            display: flex; flex-direction: column; justify-content: flex-end;
            padding: 2rem; opacity: 0; transition: all 0.4s ease; transform: translateY(20px);
        }
        .img-hover-zoom:hover .img-overlay { opacity: 1; transform: translateY(0); }
        .img-overlay h4 { color: white; margin-bottom: 5px; font-size: 1.5rem; }
        .img-overlay p { color: rgba(255,255,255,0.8); font-size: 0.9rem; margin: 0; }
    </style>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ duration: 1000, once: true, offset: 50 }); </script>
</body>
</html>