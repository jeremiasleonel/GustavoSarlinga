// **Menú desplegable**
// Selección de elementos
const menuIcon = document.getElementById('menu-icon');
const menuOverlay = document.getElementById('menu-overlay');
const closeBtn = document.getElementById('close-btn');
// **Dropdowns**
// Selección de todos los botones con la clase "dropdown"
const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(button => {
  button.addEventListener('click', () => {
    // Alternar la clase 'active' en el botón
    button.classList.toggle('active');

    // Mostrar/ocultar el contenido relacionado
    const content = button.nextElementSibling;
    if (content) {
      content.style.display = content.style.display === 'flex' ? 'none' : 'flex';
    }
  });
});

// Abrir menú
menuIcon.addEventListener('click', () => {
  menuOverlay.classList.add('open');
});

// Cerrar menú
closeBtn.addEventListener('click', () => {
  menuOverlay.classList.remove('open');
});

// **Google Maps**
function initMap() {
  const location = { lat: -34.515332, lng: -58.698381 }; // Coordenadas de Los Polvorines
  const map = new google.maps.Map(document.getElementById("google-map"), {
    zoom: 15,
    center: location,
  });
  new google.maps.Marker({
    position: location,
    map: map,
    title: "Estamos aquí",
  });
}

// **Carrusel de imágenes**
// Selección de elementos del carrusel
const images = document.querySelectorAll('.carousel-images picture');
const dots = document.querySelector('.carousel-dots');

// Variable para controlar la imagen activa
let activeIndex = 0;

// Cambiar la imagen activa
function changeImage() {
  // Ocultar todas las imágenes
  images.forEach((image) => {
    image.style.display = 'none';
  });

  // Mostrar la imagen activa
  images[activeIndex].style.display = 'block';

  // Actualizar los puntos de navegación
  updateDots();
}

// Actualizar los puntos de navegación
function updateDots() {
  const allDots = dots.querySelectorAll('span');
  allDots.forEach(dot => dot.classList.remove('active'));
  allDots[activeIndex].classList.add('active');
}

// Crear puntos de navegación automáticamente
function createDots() {
  images.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.addEventListener('click', () => {
      activeIndex = index;
      changeImage();
    });
    dots.appendChild(dot);
  });
}

// Cambiar la imagen automáticamente cada 5 segundos
function autoChangeImage() {
  activeIndex = (activeIndex + 1) % images.length;
  changeImage();
}

// Inicialización del carrusel
createDots();
changeImage();
setInterval(autoChangeImage, 5000); // Cambiar cada 5 segundos

