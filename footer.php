<?php
/**
 * @package Make
 */
?>

				</div>
			</div>

			<?php ttfmake_maybe_show_site_region( 'footer' ); ?>
		</div>

		<?php wp_footer(); ?>

<!-- CH OFF CANVAS MENU -->
<nav id="cd-lateral-nav" class="site-navigation" role="navigation">
	<ul class="cd-navigation">
		<li class="item-has-children">
			<a href="#0">Products</a>
			<ul class="sub-menu">
				<!-- all its children here -->
				<li><a href="hello">Neon</a></li>
				<li><a href="hello">Figaro</a></li>
			</ul>
		</li>
		<!-- other .item-has-children here -->
	</ul>
	<ul class="cd-navigation cd-single-item-wrapper">
		<li><a href="#0">Terms</a></li>
		<!-- other simple items here -->
		<li><a href="hello">Privacy</a></li>
		<li><a href="hello">Cookies</a></li>
	</ul>
	<?php // Search form
		get_search_form();
	?>
	<span class="menu-toggle"><?php echo esc_html( $menu_label ); ?></span>
	<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'make' ); ?></a>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'primary'
		) );
		?>
	<!-- <div class="cd-navigation socials">
		<a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
		<a class="cd-facebook cd-img-replace" href="#0">Linked In</a>
		<a class="cd-google cd-img-replace" href="#0">Feed</a>
	</div> -->
		<?php ttfmake_maybe_show_social_links( 'footer' ); ?>
	

</nav>
<!-- /CH OFF CANVAS MENU -->

	</body>
</html>
