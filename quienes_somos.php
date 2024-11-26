<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centro Reparación y Servicios</title>
  <link rel="stylesheet" href="build/css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP8wCOBu8YwDocJBzvNqbDMYsexmgk3vE&callback=initMap"></script>
</head>

<body>
  <?php include './templates/header.php'; ?>

  <section class="about-us">

    <div class="section who-we-are">
      <h2>¿Quiénes Somos?</h2>
      <div class="content">
        <picture>
          <source srcset="/build/img/img1.webp" type="image/webp">
          <img class="who-we-are__img" src="/build/img/img1.jpeg" alt="Imagen de técnico trabajando" class="image">
        </picture>
        <p>Nuestro equipo está liderado por Gustavo Sarlinga, un técnico altamente capacitado y especializado en la reparación y mantenimiento de electrodomésticos. Su experiencia y conocimiento garantizan soluciones rápidas y efectivas, siempre con un enfoque profesional y orientado a brindar un servicio de calidad. </p>
      </div>
    </div>

    <div class="section our-mission">
      <h2>Nuestra Misión</h2>

      <div class="container-carousel">
        <p>Nuestra misión es ofrecer servicios de reparación y mantenimiento eficientes y de alta calidad, diseñados para satisfacer las necesidades tanto de hogares como de comercios. Nos esforzamos por superar las expectativas de nuestros clientes a través de un enfoque centrado en la satisfacción, combinando experiencia técnica, atención personalizada y soluciones adaptadas a cada situación. Priorizamos la transparencia, la excelencia y el compromiso en cada trabajo realizado.</p>
        <div class="carousel">
          <div class="carousel-dots"></div>
          <div class="carousel-images">
            <picture>
              <source srcset="/build/img/img_carrusel5.webp" type="image/webp">
              <img src="/build//img/img_carrusel5.jpeg" alt="Imagen 1">
            </picture>
            <picture>
              <source srcset="/build/img/img_carrusel4.webp" type="image/webp">
              <img src="/build//img/img_carrusel4.jpeg" alt="Imagen 2">
            </picture>
            <picture>
              <source srcset="/build/img/img_carrusel2.webp" type="image/webp">
              <img src="/build/img/img_carrusel2.jpeg" alt="Imagen 3">
            </picture>
            <picture>
              <source srcset="/build/img/img_carrusel3.webp" type="image/webp">
              <img src="/build/img/img_carrusel3.jpeg" alt="Imagen 4">
            </picture>
            <picture>
              <source srcset="/build/img/img_carrusel1.webp" type="image/webp">
              <img src="/build/img/img_carrusel1.jpeg" alt="Imagen 5">
            </picture>
          </div>
        </div>
      </div>
    </div>



    <div class="section why-choose-us">
      <h2>¿Por qué elegirnos?</h2>

      <div class="content">
        <p>Con más de 11 años de experiencia, Gustavo Sarlinga ofrece un servicio de calidad en reparaciones y mantenimiento. Nos especializamos en brindar soluciones personalizadas y garantizamos la satisfacción del cliente en cada intervención. Nuestro compromiso es estar siempre a disposición para atender cualquier inconveniente de manera rápida y eficiente, asegurando tranquilidad y confianza en nuestros servicios. </p>

        <picture>
          <source srcset="/build/img/img2.webp" type="image/webp">
          <img class="why-choose-us__img" src="/build/img/img2.jpg" alt="Reparaciózn de electrodomésticos" class="image">
        </picture>
      </div>
    </div>
  </section>

  <?php include './templates/footer.php'; ?>
  <script src="./src/js/app.js"></script>
</body>

</html>