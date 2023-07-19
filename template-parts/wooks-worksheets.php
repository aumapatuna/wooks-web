<!-- Wooks key features section -->
<?php
  $worksheets_sub_heading = get_field('worksheets_sub_heading');
  $worksheets_main_heading = get_field('worksheets_main_heading');
  $worksheets_list = get_field('worksheets_list');
?>

<section id="wooks-worksheets" class="wooks-worksheets">
  <div class="container">
    <div class="wooks-worksheets__header">
      <?php if($worksheets_sub_heading) : ?>
        <p class="wooks-worksheets__sub-heading body-large-bold color-yellow-one text-center mt-0 mb-0"><?php echo $worksheets_sub_heading; ?></p>
      <?php endif; ?>
      <?php if($worksheets_main_heading) : ?>
        <h2 class="wooks-worksheets__heading color-dark-b2 text-center mt-16 mb-0"><?php echo $worksheets_main_heading; ?></h2>
      <?php endif; ?>
    </div>
    <div class="wooks-worksheets__items">
      <div class="wooks-worksheets__grid">

        <!-- Worksheets items start -->
        <?php if($worksheets_list) : 
          foreach($worksheets_list as $worksheet_list) :
        ?>
          <div class="wooks-worksheets__slider-item">
            <a class="wooks-our-books__link" href="<?php echo $worksheet_list['worksheets_link']; ?>" target="_blank">
              <div class="wooks-worksheets__slider-image-wrp">
                <img src="<?php echo $worksheet_list['worksheets_thumb_image']['url']; ?>" alt="<?php echo $worksheet_list['worksheets_thumb_image']['alt']; ?>" height="250" width="400" />
              </div>
            </a>
          </div>
        <?php endforeach;
          endif;
        ?>
        <!-- Worksheets items start -->
        
      </div>
    </div> 
  </div>
</section>