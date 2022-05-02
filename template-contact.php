<?php

/*
 Template Name: Contact
*/

?>
<main id="contact-page">
 <section class='hero-banner'>
  <?php $haut_page_image = get_field('image_haut_page');
   $haut_page_image_url = $haut_page_image['url'];
   $haut_page_image_alt = $haut_page_image['alt'];
  ?>
  <img src='<?= esc_html($haut_page_image_url);?>' alt='<?= esc_attr($haut_page_image_alt) ?>' />
 </section>

</main>
