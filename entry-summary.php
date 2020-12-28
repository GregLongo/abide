<div id="post-number-<?php echo $wp_query->currentpost+1;?>" class="entry-summary preview 
  <?php if ( ($wp_query->current_post +1 ) % 2 === 0) : ?> preview--even<?php endif; ?>
  <?php if ( ($wp_query->current_post +1 ) % 2 === 1) : ?> preview--odd<?php endif; ?>">
  <?php if ( has_post_thumbnail() ) : ?>
    <div  style="background-image: url('<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full', false ); echo $src[0] ?>')"
      class="preview__image--big">
      <a  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">    
        <div class="preview__image-placeholder"></div>
      </a>
    <?php endif; ?>
  </div>
  <div class="preview__column">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <div class="preview__text-block ">
      <div class= "preview__text-block--fade ">
        <h2 class="fade-letters"><?php the_title_attribute(); ?></h2>
        <p><?php the_excerpt(); ?>
      </p>
    </div>
  </div>
  </a>
  <div class="preview__image--small">
    <?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php 
        if (class_exists('MultiPostThumbnails')) : 
          MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
          echo the_post_thumbnail();
        endif;
        ?>
      </a>
    <?php endif; ?>
  </div>
</div>
</div>