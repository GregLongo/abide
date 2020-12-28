<?php get_header(); ?>
  <main class="home__content home__content--defaults" id="content">
    <div class="hero hero--home">
      <video class="home__video" autoplay loop muted>
        <source  src ="<?php echo get_template_directory_uri(); ?>/vid/tappingbonesarts.mp4" type="video/mp4" ></source>
      </video>
        <div class= "hero__text hero__text--home">
          <div class="hero__title fade-letters"><?php bloginfo('name') ?></div>    
        </div>
            <div class="hero__bg " id="home-bg"></div>
    </div>
    <div class="about particles" id="about">
      <div class= "about__text">
        <?php dynamic_sidebar('primary-widget-area') ?>
      </div>


    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!--article previews --> 
      <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
  </main>
  <?php get_footer(); ?>