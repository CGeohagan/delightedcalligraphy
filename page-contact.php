<?php
/**
 * Template Name: Contact Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" role="main" class="col contact pad">

    <?php while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>
            <h1 class="contact-title"><?php the_title(); ?></h1>
            <div class="contact__wrapper col two-col">
	            <div class="contact__content">
	                <?php the_content(); ?>
	            </div>
	            <div class="contact__form"
	            	<?php dynamic_sidebar('form-sidebar'); ?>
	            </div>
            </div>
        </article>

    <?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>