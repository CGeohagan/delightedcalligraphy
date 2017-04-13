<?php
/**
 * Template Name: Pricing Page
 *
 * @package delighted_calligraphy
 */

get_header(); ?>

<main id="main" role="main" class="col pricing">

    <?php while ( have_posts() ) : the_post(); ?>

        <section <?php post_class(); ?>>
            <h1 class="pricing-title"><?php the_title(); ?></h1>
        </section>

    <?php endwhile; // end of the loop. ?>



    <section class="col border--margin">

	    <?php while ( have_posts() ) : the_post(); ?>

        	<div class="info--row">
	        	<div class="info info--half">
	        		<h2>Envelopes</h2>
		        	<ul class="info__list">
		        		<li>
		        			<h3>Outer Envelope</h3>
		        			<p><?php the_field('outer_envelope'); ?></p>
		        		</li>
		        		<li>
		        			<h3>Inner Envelope</h3>
		        			<p><?php the_field('inner_envelope'); ?></p>
		        		</li>
		        		<li>
		        			<h3>Reply Envelope</h3>
		        			<p><?php the_field('reply_envelope'); ?></p>
		        		</li>
		        		<li>
		        			<h3>Return Address</h3>
		        			<p><?php the_field('return_address'); ?></p>
		        		</li>
		        		<li>
		        			<p><?php the_field('envelope_notes'); ?></p>
		        		</li>
		        	</ul>
	        	</div>
	        	<div class="info info--half">
	        		<h2>Etcetera</h2>
		        	<ul class="info__list">
		        		<li>
		        			<h3>Place Cards</h3>
		        			<p><?php the_field('place_cards'); ?></p>
		        		</li>
		        		<li>
		        			<h3>Escort Cards</h3>
		        			<p><?php the_field('escort_cards'); ?></p>
		        		</li>
		        		<li>
		        			<h3>Table Numbers</h3>
		        			<p><?php the_field('table_numbers'); ?></p>
		        		</li>
		        		<li>
		        			<h3>Signage</h3>
		        			<p><?php the_field('wedding_day_signage'); ?></p>
		        		</li>
		        		<li>
		        			<p><?php the_field('place_cards_notes'); ?></p>
		        		</li>
		        	</ul>
	        	</div>
        	</div>
	        <div class="info info__full">
	        	<h2>Invitations</h2>
	        	<ul class="info__list">
        			<li>
        				<h3>Full Invitation Calligraphy</h3>
        			</li>
        			<li>
        				<p><?php the_field('full_invitation_calligraphy'); ?></p>
        			</li>
        			<li>
        				<h3>Spot Invitation Calligraphy</h3>
        			</li>
        			<li>
        				<p><?php the_field('spot_invitation_calligraphy'); ?></p>
        			</li>
        		</ul>
	        </div>

	    <?php endwhile; // end of the loop. ?>

    </section>

</main>

<?php get_footer(); ?>