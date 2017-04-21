<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package delighted_calligraphy
 */
get_header(); ?>

<section class="col pad" role="main">

	<article id="post-0" class="post error404 not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Uh oh!', 'delighted-calligraphy' ); ?></h1>
		</header>

		<div class="entry-content">
			<h2><?php _e( 'I&rsquo;m sorry! It seems we can&rsquo;t find what you&rsquo;re looking for.', 'delighted-calligraphy' ); ?></h2s>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

</section>
<?php get_footer(); ?>?>