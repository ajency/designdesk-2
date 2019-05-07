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




<div class="pre-footer-area">
  <!-- Member of -->
  <div class="members-of text-center mt-4">
    <h6 class="text-center text-muted pt-2">Members of</h6>
    <a href="#">
    <img alt="" src="<?php echo get_template_directory_uri() . '/assets/images/IFES-logo.png'; ?>" />
    <a href="#">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/EDPA-logo.png'; ?>" alt="" /></a>
  </div>
  <!-- end of Member -->
</div>
    
<footer id="colophon" class="site-footer text-center">
  <section  class="footer-widgets address">
    <div class="container">
      <div class="row">
        <div class="col-1g-6 col-md-6 address_block1">
            <h3 class="main-info">Germany</h3>
          <p class="sub-info">Westend fair, Friedrich Ebert Anlage 36, <br>60325 Frankfurt</p>
<!--           <p class="sub-info">+49 123456789</p>
 -->        </div>
        <div class="col-1g-6 col-md-6 address_block1">
            <h3 class="main-info">India</h3>
          <p class="sub-info">702 Crescent Business, Kandivali (E), <br> 400101 Mumbai
          </p>
<!--           <p class="sub-info">+49 123456789</p> -->
        </div>
      </div>
    </div>
  </section>
  <section class="footer-widgets action_block">
    <a href="mailto:hello@dd-europe.com"><span class="email_text"><i class="far fa-envelope"></i>  &nbsp hello@dd-europe.com</span></a>
    <span class="num_text"> <i class="fas fa-mobile-alt"></i>  &nbsp +49 123456789 </span>

    <h2 class="contact_title"> Get a quote</h2>
    <p class="contact_subtile">We look forward to hearing from you. Email us to learn more about what we can do for your next big event.</p>

    <?php echo do_shortcode("[formidable id=2]"); ?>
  </section>
</footer>



</div><!-- #page -->




<?php wp_footer(); ?>

</body>
</html>
