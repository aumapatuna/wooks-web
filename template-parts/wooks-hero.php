<!-- Wooks hero section -->
<?php
  $never_stop_learning_badge = get_field('never_stop_learning_badge');
  $hero_heading = get_field('hero_heading');
  $highlight_text = get_field('highlight_text');
  $hero_description = get_field('hero_description');
  $hero_register_now = get_field('hero_register_now');
  $hero_image = get_field('hero_image');
?>

<section id="wooks-home" class="wooks-hero">
  <div class="container">
    <div class="wooks-hero__wrap">
      <div class="wooks-hero__grid">
        <div class="wooks-hero__description">
          <?php if($never_stop_learning_badge) : ?>
            <p class="wooks-hero__tag body-bold color-brand-blue d-inline-block mt-0 mb-0"><?php echo $never_stop_learning_badge; ?></p>
          <?php endif; ?>
          <?php if($hero_heading) : ?>
            <h1 class="wooks-hero__heading color-dark-b2 mt-8 mb-0"><?php echo $hero_heading; ?></h1>
          <?php endif; ?>
          <?php if($hero_description) : ?>
          <p class="wooks-hero__text body-medium color-dark-b1 mt-20 mb-0">
            <?php if($highlight_text) : ?>
              <span class="color-brand-blue"><?php echo $highlight_text; ?></span>
            <?php endif; ?>
            <?php echo $hero_description; ?></p>
          <?php endif; ?>
          <?php if($hero_register_now['url']) : ?>
            <a href="<?php echo $hero_register_now['url']; ?>" class="btn wooks-hero__btn mt-36"><?php echo $hero_register_now['title']; ?></a>
          <?php endif; ?>
        </div>
        <div class="wooks-hero__image">
          <?php if($hero_image['url']) : ?>
            <img src="<?php echo $hero_image['url']; ?>" class="wooks-hero__img" alt="<?php echo $hero_image['alt']; ?>" width="692" height="670" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>