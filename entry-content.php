<div class="entry-content">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class=" hero hero--post " style="background-image: url('<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full', false ); echo $src[0] ?>')">
			<div class="hero__text" >
				<h1 class=" hero__title--post entry-title fade-letters"><?php the_title(); ?></h1> 
			</div>
		</div>
			<div class="post__content " >
				<?php the_content(); ?>
			</div>
	<?php endif; ?>

<!-- list relevant practioners -->
<div class="post__artists-list-wrapper">
	<h2 class="title-center"> Associated Artists </h2>

<div class="post__artists-list">
				<?php 
	$loop = new WP_Query( array( 'post_type' => 'tappingbones_artist', 'posts_per_page' => 10,
		'tax_query'     => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $post->post_name,
        ),
    )

	 ) ); 

	while ( $loop->have_posts() ) : $loop->the_post();
		?>

    <div class="entry-content artist artist--post" >
    <a href="<?php echo get_home_url() ?>/tb-artists" rel="#bio-<?php echo $post->ID ?>">
    	<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'medium', false ); echo $src[0] ?>)"/>
		<h2 class="entry-title">
			<?php the_title() ?>
		</h2>
		<p>
			<?php the_excerpt() ?>
		</p>
	</a>
    </div>

<?php endwhile; ?>

</div>
</div>


</div>