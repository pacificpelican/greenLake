<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Green Lake
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'greenlake' ) ); ?>"><?php printf( __( 'Powered by %s', 'greenlake' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Theme: <a class="grey-text text-lighten-3" href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>"><?php echo wp_get_theme(); ?></a> version <?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- .megacontainer #containerport -->
</div><!-- #containerzero -->

</body>
</html>
