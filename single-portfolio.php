<?php
/**
 * Template Name: Single Portfolio
 *
 * This is the template that displays all pages by default.
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" class="col two-col" role="main">

    <section class="primary">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="details">
                <div class="details__border--double">
                    <h2><?php the_field('category'); ?></h2>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_field('description'); ?></p>
                </div>
                <div class="details__pagination">
                    <div class="details__pagination__links"><?php previous_post_link(); ?></div>
                    <div class="details__pagination__links"><?php next_post_link(); ?></div>
                </div>
            </div>

        <?php endwhile; // end of the loop. ?>

    </section>

    <section class="secondary">

        <p><?php the_field('images'); ?></p>

    </section>

</main><!-- #primary -->

<?php get_footer(); ?>