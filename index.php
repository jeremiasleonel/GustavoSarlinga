<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centro Reparación y Servicios</title>
  <link rel="stylesheet" href="build/css/app.css"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP8wCOBu8YwDocJBzvNqbDMYsexmgk3vE&callback=initMap"></script>
</head>
<body>

<?php include './templates/header.php'; ?>
  <section class="hero">
    <div class="hero-overlay">
      <h1 class="opensans-regular">CENTRO REPARACIÓN Y SERVICIOS</h1>
      <p class="opensans-regular">Con gran trayectoria por su proyección con sus clientes, atendidos hace <strong>más de 11 años</strong> en sus trabajos y servicios.</p>
    </div>
    <video id="video_1" autoplay loop muted>
    <source src="./video.mp4" type="video/mp4">
    <source src="./video.webm" type="video/webm">
    <source src="./video.ogg" type="video/ogg">
    Tu navegador no soporta el video.
</video>
</section>

<section class="features ">
  <h2 class="opensans-medium">Expertos en Reparaciones y Mantenimiento del Hogar</h2>
  <div class="feature-cards roboto-regular">
    <!-- Card 1 -->
    <div class="card">
      <picture>
        <source srcset="build/img/confianza.webp" type="image/webp">
        <source srcset="build/img/confianza.jpg" type="image/jpeg">
        <img src="build/img/confianza.jpg" alt="Confianza" class="card-bg">
      </picture>
  <div class="overlay"></div> <!-- Superposición -->
  <div class="info">
        <h3>CONFIANZA</h3>
        <p>Nos dedicamos a superar tus expectativas con soluciones personalizadas que se adaptan a tus necesidades.</p>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="card">
      <picture>
        <source srcset="build/img/calidad.webp" type="image/webp">
        <source srcset="build/img/calidad.jpg" type="image/jpeg">
        <img src="build/img/calidad.jpg" alt="Calidad" class="card-bg">
      </picture>
  <div class="overlay"></div> <!-- Superposición -->
  <div class="info">
        <h3>CALIDAD</h3>
        <p>Ofrecemos servicios de reparación y mantenimiento de alta calidad, utilizando materiales duraderos y técnicas profesionales para garantizar eficiencia.</p>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="card">
      <picture>
        <source srcset="build/img/responsabilidad.webp" type="image/webp">
        <source srcset="build/img/responsabilidad.jpg" type="image/jpeg">
        <img src="build/img/responsabilidad.jpg" alt="Responsabilidad" class="card-bg">
      </picture>
  <div class="overlay"></div> <!-- Superposición -->
  <div class="info">
    <h3>RESPONSABILIDAD</h3>
    <p>Nos dedicamos a superar tus expectativas con soluciones personalizadas que se adaptan a tus necesidades.</p>
  </div>
    </div>
  </div>
</section>

<?php include './templates/footer.php'; ?>
<script src="./src/js/app.js"></script>
</body>
</html>
