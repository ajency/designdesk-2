<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>


<footer id="colophon" class="site-footer text-center">
  <div class="footer-widgets action_block">
    <a href="mailto:hello@dd-europe.com"><span class="email_text"><i class="far fa-envelope"></i>  &nbsp hello@dd-europe.com</span></a>
    <a href="tel:+49 15145695340"><span class="num_text"> <i class="fas fa-mobile-alt"></i>  &nbsp +49 15145695340 </span></a>
  </div>

  <div id="bg-image" class="footer-widgets address lazy">
    <div class="container">
      <div class="row">
        <div class="col-1g-6 col-md-6 address_block1">
          <h3 class="main-info">Germany</h3>
          <p class="sub-info mb-0">Westend fair, Friedrich Ebert Anlage 36, <br>60325 Frankfurt</p>
        </div>
        <div class="col-1g-6 col-md-6 address_block1">
          <h3 class="main-info">India</h3>
          <p class="sub-info mb-0">702 Crescent Business, Kandivali (E), <br> 400101 Mumbai</p>
        </div>
      </div>
    </div>
  </div>

  <div class="form">
    <div class="form-header">
      <h2 class="contact_title"> Get a quote</h2>
      <p class="contact_subtile">We look forward to hearing from you. Email us to learn more about what we can do for your next big event. </p>
    </div>
    <div class="footer-form">
      <?php echo do_shortcode("[formidable id=3]"); ?>
    </div>
  </div>

  <div class="pre-footer-area">
    <!-- Member of -->
    <div class="members-of text-center mt-4">
      <h6 class="text-center text-muted pt-2">Members of</h6>
      <a href="#">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo get_template_directory_uri() . '/assets/images/ahk_logo.png'; ?>" alt="AHK-logo" width="130"/>
      </a>
    </div>
    <!-- end of Member -->
  </div>
</footer>

</div><!-- #page -->




<?php wp_footer(); ?>

</body>
</html>
