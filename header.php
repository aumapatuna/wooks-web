<?php
/**
 * The header for wooks theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="page">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vd-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <?php
    $website_main_title = get_field('website_main_title', 'option');
    $header_logo = get_field('header_logo', 'option');
    $e_library_link = get_field('e-library_link', 'option');
    $register_now_link = get_field('register_now_link', 'option');
    $icons_and_meta = get_field('icons_and_meta', 'option');
  ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!-- DNS prefetch -->
  <?php if($icons_and_meta['dns-prefetch']['url']) : ?>
    <link rel="dns-prefetch" href="<?php echo $icons_and_meta['dns-prefetch']['url']; ?>">
  <?php endif; ?>
  <?php if($icons_and_meta['preconnect']['url']) : ?>
    <link rel="preconnect" href="<?php echo $icons_and_meta['preconnect']['url']; ?>">
  <?php endif; ?>

  <title><?php echo $website_main_title; ?></title>

  <!-- Site Icons -->
  <?php if($icons_and_meta['shortcut_icon']['url']) : ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $icons_and_meta['shortcut_icon']['url']; ?>">
  <?php endif; ?>
  <?php if($icons_and_meta['apple_touch_icon']['url']) : ?>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $icons_and_meta['apple_touch_icon']['url']; ?>">
  <?php endif; ?>
  <?php if($icons_and_meta['favicon_32x32']['url']) : ?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $icons_and_meta['favicon_32x32']['url']; ?>">
  <?php endif; ?>
  <?php if($icons_and_meta['favicon_16x16']['url']) : ?>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $icons_and_meta['favicon_16x16']['url']; ?>">
  <?php endif; ?>
  <?php if($icons_and_meta['manifest_file']['url']) : ?>
    <link rel="manifest" href="<?php echo $icons_and_meta['manifest_file']['url']; ?>">
  <?php endif; ?>
  <?php if($icons_and_meta['mask_icon']['url']) : ?>
    <link rel="mask-icon" href="<?php echo $icons_and_meta['mask_icon']['url']; ?>" color="#021E98">
  <?php endif; ?>
  <meta name="msapplication-TileColor" content="#021E98">
  <meta name="theme-color" content="#021E98">

  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '655707559362389');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=655707559362389&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
  
  <?php 
    wp_head();
  ?>
</head>

<!-- Header -->
<body <?php body_class(); ?>>

  <header class="wooks-header">
    <div class="container">
      <div class="wooks-header__grid">
        <div class="wooks-header__logo">
          <?php if($header_logo['url']) : ?>
            <img class="wooks-header__logo-img" src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" height="36" width="121" />
          <?php endif; ?>
        </div>
        <div class="wooks-header__hamburger"></div>
        <div class="wooks-header__navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <div class="wooks-header__buttons">
          <?php if($e_library_link['url']) : ?>
            <a href="<?php echo $e_library_link['url']; ?>" class="btn btn--inverse"><?php echo $e_library_link['title']; ?></a>
          <?php endif; ?>
          <?php if($register_now_link['url']) : ?>
            <a href="<?php echo $register_now_link['url']; ?>" class="btn"><?php echo $register_now_link['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="wooks-header__mobile-menu"></div>
  </header><!-- ./Header -->

<!-- vetera digital site wrapper -->
<div id="page" class="wooks-wrapper"> 