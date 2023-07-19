<!-- Wooks features section -->
<?php
  $featured_in_main_heading = get_field('featured_in_main_heading');
  $featured_in_items = get_field('featured_in_items');
?>

<section id="wooks-features" class="wooks-features">
  <div class="container">
    <div class="wooks-features__wrap pt-64">
      <?php if($featured_in_main_heading) : ?>
        <p class="wooks-features__title body-large-bold color-dark-b2 text-center mt-0 mb-0"><?php echo $featured_in_main_heading; ?></p>
      <?php endif; ?>
      <div class="wooks-features__icon-wrp pt-40 pb-64">

        <!-- Features items start -->
        <?php if($featured_in_items) :
          foreach($featured_in_items as $featured_in_item) :
        ?>
          <div class="wooks-features__icon">
            <img class="wooks-features__icon-img" src="<?php echo $featured_in_item['featured_in_image']['url']; ?>" alt="<?php echo $featured_in_item['featured_in_image']['alt']; ?>" width="154" height="80" />
          </div>
        <?php endforeach;
          endif;
        ?>
        <!-- Features items end -->
      </div>
    </div>
  </div>
</section>