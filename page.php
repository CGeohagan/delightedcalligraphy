<?php
/**
 * The Page template
 *
 * This is the template that displays all pages by default.
 *
 * @package delighted_calligraphy
 */

get_header(); ?>


<main id="main" role="main">



    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'delighted-calligraphy' ) . '</span>', 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // end of the loop. ?>

</main><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>