/* Inview and element visibility */ 
jQuery(document).ready(function() {

  var activeSection = jQuery('section');

  jQuery(window).scroll(function(){
    inViewport();
  });
 
  jQuery(window).resize(function(){
    inViewport();
  });
 
  function inViewport(){
    activeSection.each(function(){
      var divPos = jQuery(this).offset().top,
          topOfWindow = jQuery(window).scrollTop();
      
      if( divPos < topOfWindow+110){
        activeSection.removeClass('inview');
        jQuery(this).addClass('inview');

        var secId = jQuery('.inview').attr('id');
        //window.location.hash = '';
        
        jQuery('.menu-item').each(function() {
          var mitTitle = jQuery(this).children('a').attr('title');

          if(secId == mitTitle) {
            jQuery(this).addClass('active');
          } else {
            jQuery(this).removeClass('active');
          }
        });
      }
    });
  }
});