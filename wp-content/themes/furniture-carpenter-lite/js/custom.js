// Scroll to Top
window.onscroll = function() {
  const furniture_carpenter_lite_button = document.querySelector('.scroll-top-box');
  if (furniture_carpenter_lite_button) {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      furniture_carpenter_lite_button.style.display = "block";
    } else {
      furniture_carpenter_lite_button.style.display = "none";
    }
  }
};

const scrollTopLink = document.querySelector('.scroll-top-box a');
if (scrollTopLink) {
  scrollTopLink.onclick = function(event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
}

// our location
jQuery(document).ready(function($) {
    $('.project-sec .wp-block-post-template').addClass('owl-carousel owl-theme').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            999: {
                items: 3
            }
        }
    });
});