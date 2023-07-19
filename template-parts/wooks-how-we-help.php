<!-- Wooks key features section -->
<?php
  $how_we_help_sub_heading = get_field('how_we_help_sub_heading');
  $how_we_help_main_heading = get_field('how_we_help_main_heading');
  $how_we_help_slides = get_field('how_we_help_slides');
?>

<section id="wooks-how-we-help" class="wooks-how-we-help">
  <div class="container">
    <div class="wooks-how-we-help__header">
      <?php if($how_we_help_sub_heading) : ?>
        <p class="wooks-how-we-help__sub-heading body-large-bold color-yellow-one text-center mt-0 mb-0"><?php echo $how_we_help_sub_heading; ?></p>
      <?php endif; ?>
      <?php if($how_we_help_main_heading) : ?>
        <h2 class="wooks-how-we-help__heading color-dark-b2 text-center mt-16 mb-0"><?php echo $how_we_help_main_heading; ?></h2>
      <?php endif; ?>
    </div>
  </div>
  <div class="wooks-how-we-help__items">
    <div class="wooks-how-we-help__slider-wrapper">

      <!-- How we help slider items start -->
      <?php if($how_we_help_slides) : 
        foreach($how_we_help_slides as $how_we_help_slide) :
      ?>
        <div class="wooks-how-we-help__slider-item" data-url="<?php echo $how_we_help_slide['how_we_help_video_embed_link']; ?>">
          <div class="wooks-how-we-help__slider-image-wrp">
            <img src="<?php echo $how_we_help_slide['how_we_help_video_thumb']['url']; ?>" alt="<?php echo $how_we_help_slide['how_we_help_video_thumb']['alt']; ?>" height="284" width="505" />
          </div>
        </div>
      <?php endforeach;
        endif;
      ?>
      <!-- How we help slider items end --> 

    </div>
  </div>
</section>