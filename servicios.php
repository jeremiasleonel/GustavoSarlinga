<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centro Reparación y Servicios</title>
  <!-- Estilos -->
  <link rel="stylesheet" href="build/css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Google Maps -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP8wCOBu8YwDocJBzvNqbDMYsexmgk3vE&callback=initMap"></script>
</head>

<body>
  <!-- Header -->
  <?php include './templates/header.php'; ?>

  <main class="main-content">
    <!-- Introducción -->
    <section class="intro">
      <h1>Servicio de reparación y mantenimiento</h1>
      <p>
        Ofrecemos servicios completos para el hogar y negocios, con atención en calidad y eficacia.
        Descubre nuestras opciones para cada necesidad.
      </p>
    </section>

    <!-- Servicios -->
    <section class="services">
      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/1.png" alt="Albañilería">
          <p>Trabajos de Albañilería y Gas</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Realizamos trabajos de albañilería y gas con personal certificado y herramientas de última generación.
          </p>
          <picture>
            <source srcset='build/img/albañileria.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/albañileria.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/2.png" alt="Mantenimiento Eléctrico">
          <p>Mantenimiento Eléctrico</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Servicio de mantenimiento eléctrico realizado por profesionales calificados y con materiales de calidad.
          </p>
          <picture>
            <source srcset='build/img/portada-mantenimiento-electrico.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/portada-mantenimiento-electrico.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/3.png" alt=" Reparación de Electrodomésticos">
          <p>Reparación de Electrodomésticos</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Artefactos eléctricos: Heladeras, parlantes, estufas, planchas, microondas, licuadoras y mas.
            <br>Enfoque: Servicio de calidad espacializado para el hogar.
          </p>
          <picture>
            <source srcset='build/img/electrodomestico.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/electrodomestico.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/4.png" alt="Reparaciones Especializadas">
          <p>Reparaciones Especializadas</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Equipos de frío: Heladeras y lavarropas nacionales, equipos para supermercados y mercados.
            <br> Diagnóstico: Fallas en resistencias eléctricas de uso cotidiano.
          </p>
          <picture>
            <source srcset='build/img/reparacion_especial.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/reparacion_especial.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/5.png" alt="Reparaciones Especializadas">
          <p>Instalaciones Eléctricas</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Servicio completo para casas y locales. <br> Mantenimiento preventivo y correctivo.
          </p>
          <picture>
            <source srcset='build/img/instalacion_electrica.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/instalacion_electrica.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/6.png" alt="Líneas de Agua y reformas de baños">
          <p>Líneas de Agua y Reformas de Baños</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Instalación de cañerías, sanitarios y reformas en baños.
          </p>
          <picture>
            <source srcset='build/img/lineas_de_agua.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/lineas_de_agua.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/7.png" alt=" Pintura en Interiores y Exteriores">
          <p> Pintura en Interiores y Exteriores</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Trabajos de pintura profesional en casas, locales e instituciones.
          </p>
          <picture>
            <source srcset='build/img/pintura.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/pintura.jpg' alt='albañileria'>
          </picture>
        </div>

      </div>
      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/8.png" alt=" Pintura en Interiores y Exteriores">
          <p> Sistemas de Seguridad</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Instalación: Alarmas, cámaras y sensores para instituciones y locales.
            Talleres de reparación de equipos de seguridad.
          </p>
          <picture>
            <source srcset='build/img/camaras cctv.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/camaras cctv.jpg' alt='albañileria'>
          </picture>
        </div>

      </div>
      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/9.png" alt=" Herrería General y Muebles">
          <p>Herrería General y Muebles</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Combinación de herrería y madera para mobiliario único y personalizado.
          </p>
          <picture>
            <source srcset='build/img/herreria.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/herreria.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>
      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/10.png" alt="Carpintería en Interiores">
          <p> Carpintería en Interiores</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Muebles y trabajos en madera para interiores residenciales y comerciales.
          </p>
          <picture>
            <source srcset='build/img/carpinteria.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/carpinteria.jpg' alt='albañileria'>
          </picture>
        </div>
      </div>

      <div class="service-item">
        <button class="dropdown">
          <img class="texto" src="./icons/11.png" alt="Carpintería en Interiores">
          <p> Bombas, Piletas y Desagües</p>
          <img class="flecha" src="./icons/mas.png" alt="más">
        </button>
        <div class="dropdown-content">
          <p>
            Mantenimiento y reparación: Puertas, rejas, desagües, baños y sistemas de tuberías.
          </p>
          <picture>
            <source srcset='build/img/desague.webp' type='image/webp'>
            <img loading='lazy' width='360' height='200' src='src/img/desague.jpg' alt='albañileria'>
          </picture>
        </div>


    </section>




  </main>

  <!-- Footer -->
  <?php include './templates/footer.php'; ?>

  <!-- Scripts -->
  <script src="./src/js/app.js"></script>
</body>

</html>