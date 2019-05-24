<div class="col-3">
  <a href="<?php echo ($lightbox == 'true') ? 'javascript.void(0);' : './exhibition-stands-gallery/?album='.get_the_ID(); ?>" class="pg-wrapper <?php echo ($lightbox == 'true') ? 'prettyphoto-btn' : ''; ?>" data-galid="<?php echo get_the_ID(); ?>">
    <div class="pg-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
    <div class="pg-title"><label><?php the_title(); ?></label></div>
  </a>
</div>