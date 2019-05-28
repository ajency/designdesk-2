<div class="col-lg-4 col-md-6 col-sm-12 img-block">
  <a href="<?php echo ($lightbox == 'true') ? 'javascript.void(0);' : './exhibition-stands-gallery/?album='.get_the_ID(); ?>" class="pg-wrapper <?php echo ($lightbox == 'true') ? 'prettyphoto-btn' : ''; ?>" data-galid="<?php echo get_the_ID(); ?>">
    <div id="bg-image" class="pg-thumbnail lazy" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_ID , 'large'); ?>)"></div>
    <div class="pg-title"><label><?php the_title(); ?></label></div>
  </a>
</div>