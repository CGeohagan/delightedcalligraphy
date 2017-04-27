<?php
/**
 * The footer template
 *
 *
 * @package delighted_calligraphy
 */
?>

</div>
<!-- #page -->

<footer id="footer" class="footer" role="contentinfo">	
	<div class="copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>	        
  </div>
  <div class="social-footer">
  	<a href="https://www.instagram.com/delightedcalligraphy/?hl=en" target="_blank">
      <?php get_template_part( 'assets/images/instagram.svg' ); ?>
    </a>
    <a href="https://www.pinterest.com/mabowker/" target="_blank">
      <?php get_template_part( 'assets/images/pinterest.svg' ); ?>
    </a>
    <a href="mailto:delightedcalligraphy@gmail.com" target="_blank">
      <?php get_template_part( 'assets/images/mail.svg' ); ?>
    </a>
  </div>
  <p>made with  &#9829; by<a href="http://cgeohagan.github.io" target="_blank" rel="nofollow"> Colleen Geohagan</a></p>
</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>