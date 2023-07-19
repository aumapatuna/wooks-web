/* Passive events listener */ 
jQuery(document).ready(function() {
  var elHtml = jQuery('html');
  var wooksPage = jQuery('.wooks-wrapper');
  var header = jQuery('.wooks-header');
  var hamburger = jQuery('.wooks-header__hamburger');
  var headernav = jQuery('.wooks-header__navigation');
  var headerbuttons = jQuery('.wooks-header__buttons');
  var headernavitem = jQuery('.menu-item').children('a');
  var btnlink = jQuery('.btn');
  var ww = jQuery(window).width();

  wooksPage.removeClass('scrolloffset');

  hamburger.click(function(){
    jQuery(this).toggleClass('open');
    elHtml.toggleClass('fixed');
    header.toggleClass('expanded');
  });

  headernavitem.click(function() {
    wooksPage.addClass('scrolloffset');
    setTimeout(function() {
      hamburger.removeClass('open');
      header.removeClass('expanded');
    }, 500);
  });

  headernavitem.on('click', function() {
    var animateTarget = jQuery(this).attr('href');
    jQuery('html,body').animate({scrollTop: jQuery(animateTarget).offset().top - 100},'swing');
    elHtml.removeClass('fixed');
  });

  btnlink.on('click', function() {
    var animateTarget = jQuery(this).attr('href');
    jQuery('html,body').animate({scrollTop: jQuery(animateTarget).offset().top - 100},'swing');
    elHtml.removeClass('fixed');
  });

  /* Acctive menu */
  headernavitem.click(function(){
    headernavitem.parent().removeClass("active");
    jQuery(this).parent().addClass("active");
  });

  if(ww <= 1200 ) {
    headernav.appendTo('.wooks-header__mobile-menu');
    headerbuttons.appendTo('.wooks-header__mobile-menu');
  }
});