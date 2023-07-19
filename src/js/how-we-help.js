/* How we help section slick */
jQuery(document).ready(function() {
  jQuery('.wooks-how-we-help__slider-wrapper').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    prevArrow:"<div class='a-left control-c prev hiw-slick-prev'></div>",
    nextArrow:"<div class='a-right control-c next hiw-slick-next'></div>"
  });

  /* Iframe URL */
  var elHtml = jQuery('html');
  var hwhItem = jQuery('.wooks-how-we-help__slider-item');
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