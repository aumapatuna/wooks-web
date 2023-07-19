      <!-- Footer -->
      <?php
        $footer_logo = get_field('footer_logo', 'option');
        $footer_description = get_field('footer_description', 'option');
        $smo_items = get_field('smo_items', 'option');
        $useful_links_title = get_field('useful_links_title', 'option');
        $contact_us_title = get_field('contact_us_title', 'option');
        $contact_us_email = get_field('contact_us_email', 'option');
        $contact_us_phone = get_field('contact_us_phone', 'option');
        $copyright_text = get_field('copyright_text', 'option');
      ?>

      <footer class="wooks-footer">
        <div class="container">
          <div class="wooks-footer__wrap pt-64">
            <div class="wooks-footer__grid">
              <div class="wooks-footer__description pr-116 pb-48">
                <?php if($footer_logo['url']) : ?>
                  <div class="wooks-footer__logo">
                    <img class="wooks-footer__logo-img" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" height="69" width="77" />
                  </div>
                <?php endif; ?>
                <?php if($footer_description) : ?>
                  <p class="wooks-footer__txt body-one color-dark-b1 mb-0 mt-28"><?php echo $footer_description; ?></p>
                <?php endif; ?>
                <div class="wooks-footer__smo-block pt-28">
                  <?php if($smo_items) : 
                    foreach($smo_items as $smo_item) :
                  ?>
                    <a class="wooks-footer__smo wooks-footer__smo--fb mr-16" href="<?php echo $smo_item['smo_item_url']; ?>" target="_blank">
                      <img class="wooks-footer__smo-img wooks-footer__smo-img--fb" src="<?php echo $smo_item['smo_item_image']['url']; ?>" alt="<?php echo $smo_item['smo_item_image']['alt']; ?>" height="32" width="32" />
                    </a>
                  <?php
                    endforeach;
                    endif; 
                  ?>
                </div>
              </div>
              <div class="wooks-footer__links">
                <?php if($useful_links_title) : ?>
                  <p class="wooks-footer__links-title body-medium-bold mb-0 mt-36"><?php echo $useful_links_title ?></p>
                <?php endif; ?>
                <div class="wooks-footer__navigation pt-20">
                  <?php //wp_nav_menu( $bottom_navigation );?>
                  <?php wp_nav_menu( array( 'theme_location' => 'bottom-menu' ) ); ?>
                </div>
              </div>
              <div class="wooks-footer__contact">
                <?php if($contact_us_title) : ?>
                  <p class="wooks-footer__contact-title body-medium-bold mb-0 mt-36"><?php echo $contact_us_title ?></p>
                <?php endif; ?>
                <div class="wooks-footer__contact-method pt-12">
                  <?php if($contact_us_email['url']) : ?>
                    <a class="wooks-footer__cta wooks-footer__cta--mailtocolor-dark-b1 body-medium" href="<?php echo $contact_us_email['url'] ?>"><?php echo $contact_us_email['title'] ?></a>
                  <?php endif; ?>
                  <?php if($contact_us_phone['url']) : ?>
                    <a class="wooks-footer__cta wooks-footer__cta--phone color-dark-b1 body-medium" href="<?php echo $contact_us_phone['url'] ?>"><?php echo $contact_us_phone['title']; ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="wooks-footer__copyright pt-24 pb-24">
              <?php if($copyright_text) : ?>
                <p class="wooks-footer__copyright-txt body-small text-center mt-0 mb-0"><?php echo $copyright_text; ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </footer><!-- ./Footer -->

      <?php 
      wp_footer();
      ?>
    </div>
  </body>
</html> 