<!-- Wooks key features section -->
<?php
  $key_features_sub_heading = get_field('key_features_sub_heading');
  $key_features_main_heading = get_field('key_features_main_heading');
  $key_features_list = get_field('key_features_list');
?>

<section id="wooks-key-features" class="wooks-key-features">
  <div class="container">
    <div class="wooks-key-features__header">
      <?php if($key_features_sub_heading) : ?>
        <p class="wooks-key-features__sub-heading body-large-bold color-yellow-one text-center mt-0 mb-0"><?php echo $key_features_sub_heading; ?></p>
      <?php endif; ?>
      <?php if($key_features_main_heading) : ?>
        <h2 class="wooks-key-features__heading color-dark-b2 text-center mt-16 mb-0"><?php echo $key_features_main_heading; ?></h2>
      <?php endif; ?>
    </div>
    <div class="wooks-key-features__items">
      <div class="wooks-key-features__grid">

        <!-- Key feature items start -->
        <?php if($key_features_list) : 
          foreach($key_features_list as $key_features) :
        ?>
        <div class="wooks-key-features__item">
          <div class="wooks-key-features__item-img text-center">
            <img src="<?php echo $key_features['key_feature_icon']['url']; ?>" class="wooks-key-features__item-image" alt="<?php echo $key_features['key_feature_icon']['alt']; ?>" height="60" width="60" />
          </div>
          <p class="wooks-key-features__item-title online-classes text-center color-dark-b2 mt-32 mb-0"><?php echo $key_features['key_feature_title']; ?></p>
          <p class="wooks-key-features__item-desc body-one color-blue-gray text-center mt-16 mb-0"><?php echo $key_features['key_feature_description']; ?></p>
        </div>
        <?php endforeach;
          endif;
        ?>
        <!-- Key feature items end -->

      </div>
    </div>
  </div>
</section>