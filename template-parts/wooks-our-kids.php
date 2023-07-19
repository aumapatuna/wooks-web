<!-- Our kids section -->
<?php
  $our_kids_sub_heading = get_field('our_kids_sub_heading');
  $our_kids_main_heading = get_field('our_kids_main_heading');
  $our_kids_image = get_field('our_kids_image');
?>

<section id="wooks-our-kids" class="wooks-our-kids">
  <div class="container">
    <div class="wooks-our-kids__header">
      <?php if($our_kids_sub_heading) : ?>
        <p class="wooks-our-kids__sub-heading body-large-bold color-yellow-one text-center mt-0 mb-0"><?php echo $our_kids_sub_heading; ?></p>
      <?php endif; ?>
      <?php if($our_kids_main_heading) : ?>
        <h2 class="wooks-our-kids__heading color-dark-b2 text-center mt-16 mb-0"><?php echo $our_kids_main_heading; ?></h2>
      <?php endif; ?>
    </div>
    <?php if($our_kids_image['url']) : ?>
      <div class="wooks-our-kids__items">
        <div class="wooks-our-kids__image-wrapper">
          <img src="<?php echo $our_kids_image['url']; ?>" alt="<?php echo $our_kids_image['alt']; ?>" height="600" width="1178" />
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>