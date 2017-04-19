<?php
/**
 * Template Name: About Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" role="main" class="col about">

    <?php while ( have_posts() ) : the_post(); ?>

        <section <?php post_class(); ?>>
            <h1 class="about-title"><?php the_title(); ?></h1>
        </section>

    <?php endwhile; // end of the loop. ?>

    <section class="col">

	    <?php while ( have_posts() ) : the_post(); ?>

	    		<div class="about__section">    			
	    			<figure class="about__section__figure">      				                   
              <?php 
                  $image = get_field('about_image');
                  if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="border" />
              <?php endif; ?>                       
            </figure>
            <div class="about__section__text">
	            <h2><?php the_field('about_header'); ?></h2> 
	            <p class="about__paragraph"><?php the_field('about_text'); ?></p>
            </div>
	    		</div>

	    <?php endwhile; // end of the loop. ?>

    </section>

    <section class="social col">
    	<h3><?php the_field('social_header'); ?></h3>
  		<div class="social__wrapper">
        <div class="social__item">
        	<h4>Instagram</h4>
        	<div class="social__insta__wrapper">
        		<!-- SnapWidget -->
						<script src="https://snapwidget.com/js/snapwidget.js"></script>
						<iframe src="https://snapwidget.com/embed/369423" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
        	</div>
        </div>
        <div class="social__item">
        	<h4>Pinterest</h4>
        	<figure>
            <a href="<?php the_field('pinterest_link'); ?>" target="_blank">
            	<img src="<?php echo get_field('pinterest_image')['url']; ?>" alt="<?php echo get_field('pinterest_image')['alt']; ?>" />
            </a>
          </figure>
        </div>
        <div class="social__item">
        	<h4>Email</h4>
        	<figure>
            <a href="mailto:<?php the_field('email_address'); ?>" target="_blank">
            	<img src="<?php echo get_field('email_image')['url']; ?>" alt="<?php echo get_field('email_image')['alt']; ?>" />
            </a>
          </figure>
        </div>
      </div>
    </section>

    <section class="press col border border--margin">
      <div class="info info--pad">
        <h2>Featured</h2>
        <?php if( have_rows('featured_location') ): ?>
          <ul class="info__list info__list--two">
            <?php while( have_rows('featured_location') ): the_row(); 

              // vars
              $content = get_sub_field('location_name');
              $link = get_sub_field('location_link');
              $description = get_sub_field('description');

              ?>

              <li>

                <?php if( $link ): ?>
                  <a href="<?php echo $link; ?>">
                <?php endif; ?>

                  <?php echo $content; ?>

                <?php if( $link ): ?>
                  </a>
                <?php endif; ?>

                <?php if( $description ): ?>
                  <?php echo $description; ?>
                <?php endif; ?>

              </li>

            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </section>

</main>
<?php get_footer(); ?>
