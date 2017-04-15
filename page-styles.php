<?php
/**
 * Template Name: Styles Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" role="main" class="col styles">

    <?php while ( have_posts() ) : the_post(); ?>

        <section <?php post_class(); ?>>
            <h1 class="slider__header"><?php the_title(); ?></h1>
        </section>

    <?php endwhile; // end of the loop. ?>

    <?php 

        $args = array( 'post_type' => 'style' );
        $query = new WP_Query( $args ); 

    ?>

    <?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <section class="slider">

            <ul class="slider__list">

                <li class="slider__item">  

                    <figure class="slider__item__figure">
                        
                        <?php 

                            $image = get_field('style_image');

                            if( !empty($image) ): ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        
                    </figure>

                    <div class="slider__item__section">
                        <h2 class="assistive-text">
                            <?php the_field('style_name'); ?>
                        </h2>
                        <div class="slider__item__svg">
                            <?php the_field('style_svg'); ?>
                        </div>
                        <p class="slider__item__description">
                            <?php the_field('style_description'); ?>
                        </p>
                    </div>

                </li>

            </ul>    

        </section>

        <div class="slider__buttons">

            <button class="prev-button">
                <?php get_template_part( 'assets/images/arrow.svg' );
                    ?>
            </button>

            <button class="next-button">
                <?php get_template_part( 'assets/images/arrow.svg' );
                    ?>
            </button>

        </div>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>