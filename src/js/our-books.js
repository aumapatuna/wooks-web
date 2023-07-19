/* How we help section slick */
jQuery(document).ready(function() {

  var ww = jQuery(window).width();

  if(ww > 768) {
    jQuery('.wooks-our-books__slider-wrapper').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      centerMode: false,
      variableWidth: true
    });
  }

  if(ww >= 1240 && ww <= 1440) {
    var leftPCalc = (ww - 1240)/2 + 20;
    jQuery('.wooks-our-books__slider-wrapper').css('left', leftPCalc);
  } else if(ww >= 1441) {
    jQuery('.wooks-our-books__slider-wrapper').css('left', 120);
  }
});