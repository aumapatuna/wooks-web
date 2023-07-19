/* How we help section slick */
jQuery(document).ready(function() {

  var elHtml = jQuery('html');
  var modal = jQuery('.wooks-modal');
  var modalClose = jQuery('.wooks-modal__close');
  var modalFrame = jQuery('.wooks-modal__frame');
  
  modalClose.click(function() {
    modal.fadeOut();
    modalFrame.attr('src', '');
    elHtml.removeClass('fixed');
  });
});