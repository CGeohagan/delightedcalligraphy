<?php
/**
 * Template Name: Styles Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" role="main" class="styles no-pad">

    <section class="slider">
    
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="slider__header">
                <h1><?php the_title(); ?></h1>
            </div>
        <?php endwhile; // end of the loop. ?>

        <?php 
            $args = array( 'post_type' => 'style' );
            $query = new WP_Query( $args ); 
        ?>

        <ul class="slider__list">

            <?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
               
                    <li class="slider__item"> 

                        <div class="slider__item__wrapper">

                            <figure class="slider__item__figure border">                      
                                <?php 
                                    $image = get_field('style_image');

                                    if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>   

                            </figure>

                            <div class="slider__item__section">
                                <h2 class="screen-reader-text">
                                    <?php the_field('style_name'); ?>
                                </h2>
                                <div class="slider__item__svg">
                                    <?php the_field('style_svg'); ?>
                                </div>
                                <p class="slider__item__description">
                                    <?php the_field('style_description'); ?>
                                </p>
                            </div>

                        </div>

                    </li>              

            <?php endwhile; endif; ?>

        </ul> 

        <div class="slider__buttons">
            <button class="prev-button">
                <?php get_template_part( 'assets/images/chevron.svg' );
                    ?>
                <?php get_template_part( 'assets/images/arrow.svg' );
                    ?>
            </button>
            <button class="next-button">
                <?php get_template_part( 'assets/images/chevron.svg' );
                    ?>
                <?php get_template_part( 'assets/images/arrow.svg' );
                    ?>
            </button>
        </div>

    </section>

</main>

<?php get_footer(); ?>
