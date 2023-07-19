/* Testimonials section slick */
jQuery(document).ready(function() {
  jQuery('.wooks-testimonials__slider-wrapper').slick({
    dots: true,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: false,
    adaptiveHeight: false,
    prevArrow:"<div class='a-left control-c prev tm-slick-prev'></div>",
    nextArrow:"<div class='a-right control-c next tm-slick-next'></div>"
  });

  /* Iframe URL */
  var elHtml = jQuery('html');
  var hwhItem = jQuery('.wooks-testimonials__slider-item');
  var modal = jQuery('.wooks-modal');
  var modalFrame = jQuery('.wooks-modal__frame');

  hwhItem.each(function() {
    jQuery(this).click(function() {
      var getUrl = jQuery(this).data('url');
      modalFrame.attr('src', getUrl);
      modal.fadeIn();
      elHtml.addClass('fixed');
    });
  });
});