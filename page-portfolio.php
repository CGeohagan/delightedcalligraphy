<?php
/**
 * Template Name: Portfolio Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" role="main" class="col portfolio">

    <?php while ( have_posts() ) : the_post(); ?>

        <section <?php post_class(); ?>>
            <h1 class="portfolio-title"><?php the_title(); ?></h1>
        </section>

    <?php endwhile; // end of the loop. ?>

    <?php 

        $args = array( 'post_type' => 'portfolio' );
        $query = new WP_Query( $args ); 

    ?>

    <?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="item">
            <figure>
                <a href="<?php the_permalink(); ?>" class="portfolio-link"><?php the_post_thumbnail('large'); ?></a>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
            </figure>           
        </div>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>