<?php
/**
 * Template Name: Front Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<div class="loader">
    <div class="loader__logo">
        <div class="loader__logo__calligraphy">
            <?php get_template_part( 'assets/images/logofull.svg' );
                    ?>
        </div>
        <p class="loader__logo__text">
            Calligraphy
        </p>
    </div>
</div> 

<main id="main" role="main" class="col no-pad">

    <?php while ( have_posts() ) : the_post(); ?>

        <section class="hero-image">
            <div class="border border--inside">
                <h1 class="entry-title screen-reader-text"><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="intro-text">
            <p><?php the_field('introduction_text'); ?></p>
        </section>
        <section class="featured">
            <div class="featured__wrapper">
                <figure class="featured__figure">
                    <img src="<?php echo get_field('left_image')['url']; ?>" alt="<?php echo get_field('left_image')['alt']; ?>" />
                    <a href="<?php the_field('left_image_link'); ?>">
                        <h2 class="featured__title"><?php the_field('left_image_header'); ?></h2>
                    </a>
                </figure>
            </div>
            <div class="featured__wrapper">
                <figure class="featured__figure">
                    <img src="<?php echo get_field('right_image')['url']; ?>" alt="<?php echo get_field('right_image')['alt']; ?>" />
                    <a href="<?php the_field('right_image_link'); ?>">
                        <h2 class="featured__title"><?php the_field('right_image_header'); ?></h2>
                    </a>
                </figure>
            </div>
        </section>

    <?php endwhile; // end of the loop. ?>

</main>
<?php get_footer(); ?>