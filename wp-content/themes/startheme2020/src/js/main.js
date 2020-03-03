import $ from 'jquery';
import 'owl.carousel';
import 'leaflet';
import 'bootstrap';

$(document).ready(function() {

  $(".carousel-news").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>', '<i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });

});