<!-- Our books section -->
<?php
  $our_books_main_heading = get_field('our_books_main_heading');
  $our_book_items = get_field('our_book_items');
?>

<section id="wooks-our-books" class="wooks-our-books">
  <div class="container">
    <?php if($our_books_main_heading) : ?>
      <div class="wooks-our-books__header">
        <h2 class="wooks-our-books__heading color-dark-b2 mt-16 mb-0"><?php echo $our_books_main_heading; ?></h2>
      </div>
    <?php endif; ?>
  </div>
  <div class="wooks-our-books__items">
    <div class="wooks-our-books__slider-wrapper"> 

      <!-- Our books items start -->
      <?php if($our_book_items) : 
        foreach($our_book_items as $our_book_item) :
      ?>
        <div class="wooks-our-books__slider-item">
          <a class="wooks-our-books__link" href="<?php echo $our_book_item['our_books_item_link']; ?>" target="_blank">
            <div class="wooks-our-books__slider-image-wrp">
              <img src="<?php echo $our_book_item['our_books_item_image']['url']; ?>" alt="<?php echo $our_book_item['our_books_item_image']['alt']; ?>" height="250" width="400" />
            </div>
            <p class="wooks-our-books__language body-medium-bold color-light-gray mt-24 mb-0"><?php echo $our_book_item['our_books_item_language']; ?></p>
            <p class="wooks-our-books__story body-large-bold-two-sinhala color-dark-b2 mt-8 mb-0"><?php echo $our_book_item['our_books_item_name']; ?></p>
          </a>
        </div>
      <?php endforeach;
        endif;
      ?>
      <!-- Our books items end --> 

    </div>
  </div>
</section>