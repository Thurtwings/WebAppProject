// Attendre que la page soit chargée
window.addEventListener('load', function() {
  // Initialiser le carrousel
  var videoCarousel = document.querySelector('#video-carousel');
  var mdbCarousel = new mdb.Carousel(videoCarousel, {
    interval: 3000,
    pause: false,
    ride: true
  });
});