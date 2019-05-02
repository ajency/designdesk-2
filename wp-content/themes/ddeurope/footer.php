
  </div><!-- #content -->

  <div class="pre-footer-area">
    <!-- Member of -->
    <div class="members-of text-center mt-4">
      <h6 class="text-center text-muted pt-2">Members of</h6>
      <a href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IFES-logo.png" alt=""></a>
      <a href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/EDPA-logo.png" alt=""></a>
    </div>
    <!-- end of Member -->
  </div>

  <footer id="colophon" class="site-footer text-center">
    <section  class="footer-widgets address">
      <div class="container">
        <div class="row">
          <div class="col-1g-6 col-md-6 address_block1">
              <h3 class="main-info">Mumbai</h3>
            <p class="sub-info">702, Ruby Crescent, Ashok Nagar, Above Axis Bank,
            Kandivali (E), Mumbai 400 101</p>
            <p class="sub-info">+91 (22) 2885 0759 / 2885 2951</p>
            <p class="sub-info">+91 97699 14770</p>
          </div>
          <div class="col-1g-6 col-md-6 address_block1">
              <h3 class="main-info">Kolkata</h3>
            <p class="sub-info">54 J.L, Nehru Road, Floor 2, Kolkata,
            West Bengal 700 071
            </p>
            <p class="sub-info">+91 (33) 2282 5417 / 2282 8463</p>
            <p class="sub-info">+91 97699 14770</p>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-widgets action_block">
      <span class="email_text"><i class="far fa-envelope"></i>  &nbsp india@designdesk.in</span>
      <span class="num_text"> <i class="fas fa-mobile-alt"></i>  &nbsp +91 97699 14770 </span>

      <h2 class="contact_title"> Get a quote</h2>

      <?php echo do_shortcode("[formidable id=2]"); ?>
    </section>
  </footer>

  </div><!-- #page -->

  <?php wp_footer(); ?>

</body>
</html>
