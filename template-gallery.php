<?php
	/*
	Template Name: Gallery
	*/
 ?>
<?php get_header(); ?>
<div class="particles " id="particles"></div>
<div class="gallery__container " id="gallery">
<?php 
// First we need to show content from WordPress editor so use this code:
if ( have_posts() ) : while ( have_posts() ) : the_post();
// the_content();
endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php 
	$loop = new WP_Query( array( 'post_type' => 'tappingbones_artist', 'posts_per_page' => 10 ) ); 

	while ( $loop->have_posts() ) : $loop->the_post();
		?>

    <div class="artist--gallery artist " >
    <div class="card-bg">
    <a rel="#bio-<?php echo $post->ID ?>">
    	<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'medium', false ); echo $src[0] ?>)"/>
		<h3 class="entry-title">
			<?php the_title() ?>
		</h3>
		<p>
			<?php the_excerpt() ?>
		</p>
	</a>
	</div>
    </div>

<?php endwhile; ?>

<div class="gallery__info-section">
	<h1 class="gallery__artist-placeholder"> Our Amazing Artists ! </h1>
	<?php while ( $loop->have_posts() ) : $loop->the_post();
		?>
		 <div class="gallery__artist-bio" id="bio-<?php echo $post->ID ?>" >
		 		

		 	<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'large', false ); echo $src[0] ?>)"/>
		 			<a class="close">〈</a>
		 		<h1><?php the_title() ?></h1>
			<p><?php the_content() ?></p>
	</div>
<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>

