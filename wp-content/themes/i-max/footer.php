<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package  i-max
 * @since i-max 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
        	<div class="footer-bg clearfix">
                <div class="widget-wrap">
                    <?php get_sidebar( 'main' ); ?>
                </div>
			</div>
			<div class="site-info">
                <div class="copyright">
                	<?php esc_attr_e( 'Copyright &copy;', 'i-max' ); ?>  <?php bloginfo( 'name' ); ?>
                </div>            
            	<div class="credit-info">
			
                    <a href="https://ilhamfs.github.io/">
                   		Courtesy by Don Flamingo
                    </a>
                </div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>