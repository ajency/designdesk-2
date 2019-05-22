<div class="col-lg-4 col-md-6 col-sm-12 img-block">
  <a href="#" class="pg-wrapper <?php $lightbox == true ? 'prettyphoto-btn' : ''  ?>" data-galid="<?php echo get_the_ID(); ?>">
    <div class="pg-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(  $post_id, 'medium' ); ?>)"></div>
    <div class="pg-title"><label><?php the_title(); ?></label></div>
  </a>
</div>