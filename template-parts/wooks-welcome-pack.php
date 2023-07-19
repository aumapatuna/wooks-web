<!-- Welcome pack section -->
<?php
  $welcome_pack_image = get_field('welcome_pack_image');
  $welcome_pack_main_heading = get_field('welcome_pack_main_heading');
  $welcome_pack_description = get_field('welcome_pack_description');
  $welcome_pack_register_now_button = get_field('welcome_pack_register_now_button');
?>

<section id="wooks-welcome-pack" class="wooks-welcome-pack">
  <div class="container wooks-welcome-pack__bg-wrp">
    <span class="wooks-welcome-pack__bg"></span>
  </div>
  <div class="wooks-welcome-pack__wrap">
    <div class="wooks-welcome-pack__grid">
      <div class="wooks-welcome-pack__image-wrap">
        <?php if($welcome_pack_image) : ?>
          <img src="<?php echo $welcome_pack_image['url']; ?>" alt="<?php echo $welcome_pack_image['alt']; ?>" height="496" width="625" />
        <?php endif; ?>
      </div>
      <div class="wooks-welcome-pack__details">
        <div class="wooks-welcome-pack__header">
          <?php if($welcome_pack_main_heading) : ?>
            <h2 class="wooks-welcome-pack__heading color-dark-b2 mt-0 mb-0"><?php echo $welcome_pack_main_heading; ?></h2>
          <?php endif; ?>
          <?php if($welcome_pack_description) : ?>
            <p class="wooks-welcome-pack__text body-one color-dark-b1 mt-16 mb-0"><?php echo $welcome_pack_description; ?></p>
          <?php endif; ?>
          <?php if($welcome_pack_register_now_button) : ?>
            <a class="btn wooks-welcome-pack__btn mt-40" href="<?php echo $welcome_pack_register_now_button['url']; ?>"><?php echo $welcome_pack_register_now_button['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>