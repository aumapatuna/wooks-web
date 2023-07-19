<!-- Testimonials section -->
<?php
  $testimonials_sub_heading = get_field('testimonials_sub_heading');
  $testimonials_main_heading = get_field('testimonials_main_heading');
  $testimonials_slider = get_field('testimonials_slider');
?>

<section id="wooks-testimonials" class="wooks-testimonials">
  <div class="container">
    <div class="wooks-testimonials__header">
      <?php if($testimonials_sub_heading) : ?>
        <p class="wooks-testimonials__sub-heading body-large-bold color-yellow-one text-center mt-0 mb-0"><?php echo $testimonials_sub_heading; ?></p>
      <?php endif; ?>
      <?php if($testimonials_main_heading) : ?>
        <h2 class="wooks-testimonials__heading color-dark-b2 text-center mt-16 mb-0"><?php echo $testimonials_main_heading; ?></h2>
      <?php endif; ?>
    </div>
  </div>
  <div class="wooks-testimonials__items">
    <div class="container">
      <div class="wooks-testimonials__slider-wrapper">

        <!-- Testimonials items start -->
        <?php if($testimonials_slider) : 
          foreach($testimonials_slider as $testimonial_slider) :
        ?>
          <div class="wooks-testimonials__slider-item" data-url="<?php echo $testimonial_slider['testimonials_embed_video_link'] ?>">
            <div class="wooks-testimonials__slider-image-wrp">
              <img src="<?php echo $testimonial_slider['testimonials_video_thumb']['url'] ?>" alt="<?php echo $testimonial_slider['testimonials_video_thumb']['alt'] ?>" height="520" width="926" />
            </div>
          </div>
        <?php endforeach;
          endif;
        ?>
        <!-- Testimonials items end --> 

      </div>
    </div>
  </div>
</section>