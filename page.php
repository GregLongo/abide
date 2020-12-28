<?php get_header(); ?>
<main id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="hero hero--page " style="background-image: url('<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full', false ); echo $src[0] ?>')">
				<div class= "hero__text">
					<h1 class="entry-title fade-letters"><?php the_title(); ?></h1> 
				</div>
			</div>
			<div class="page__content__wrapper">
				<div class="page__content entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>