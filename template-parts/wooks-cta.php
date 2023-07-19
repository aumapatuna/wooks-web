<!-- Wooks CTA section -->
<?php
  $cta_main_heading = get_field('cta_main_heading');
  $cta_description = get_field('cta_description');
?>

<section id="wooks-cta" class="wooks-cta">
  <span class="wooks-cta__bg"></span>
  <div class="container">
    <div class="wooks-cta__discription">
      <?php if($cta_main_heading) : ?>
        <div class="wooks-cta__discription-heading">
          <h2 class="text-center color-white mt-0 mb-0"><?php echo $cta_main_heading; ?></h2>
        </div>
      <?php endif; ?>
      <?php if($cta_description) : ?>
        <div class="wooks-cta__discription-text">
          <p class="body-medium color-white text-center mt-0 mb-0"><?php echo $cta_description; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="wooks-cta__form pt-40">
      <div class="wooks-cta__form-wrap">
        <?php echo apply_shortcodes( '[contact-form-7 id="25" title="Contact form"]' ); ?>
      </div>
    </div>
  </div>
</section>