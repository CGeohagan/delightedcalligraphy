<?php
/**
 * Search form template
 *
 * @package delighted_calligraphy
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="assistive-text"><?php _e( 'Search', 'delighted-calligraphy' ); ?></label>
	<input type="text" class="field" name="s" id="s" placeholder="WHAT WOULD YOU LIKE TO FIND?" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'SEARCH', 'delighted-calligraphy' ); ?>" />
<?php /*	<div class="search-submit-button">
		<?php get_template_part( 'assets/images/inline', 'search.svg' );
		?>
	</div> */ ?>



</form>
