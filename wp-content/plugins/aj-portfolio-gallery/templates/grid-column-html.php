<div class="col-lg-4 col-md-6 col-sm-12 img-block">
  <a href="./gallery/?album=<?php echo get_the_ID(); ?>" class="pg-wrapper <?php echo ($lightbox == 'true') ? 'prettyphoto-btn' : ''; ?>" data-galid="<?php echo get_the_ID(); ?>">
    <div class="pg-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
    <div class="pg-title"><label><?php the_title(); ?></label></div>
  </a>
</div>