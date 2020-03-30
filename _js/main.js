$( document ).ready(function() {

	$('.sauce-slider').slick({
        autoplay: true,
        arrows: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 4000,
  		pauseOnFocus: false,
    });

});