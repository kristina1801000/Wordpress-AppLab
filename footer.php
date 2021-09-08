<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package App_Lab
 */

?>

	<footer id="colophon" class="site-footer padding-side-big" style="background-color: #09142e">
		<div class="site-branding-footer padding-t-big">
			<div class="offset-3 padding-side-big">
			<?php
			the_custom_logo();
			
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$app_lab_description = get_bloginfo( 'description', 'display' );
			if ( $app_lab_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $app_lab_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			</div>
		</div><!-- .site-branding -->
		<nav id="site-navigation-footer" class="main-navigation">
		
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);

			?>
		</nav>
		<div class="padding-side-big">
			<image class="footer-image padding-side-big" src="<?php the_field('footer_image');?>" />
		</div>
		<div class="site-info padding-side-big">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'app-lab' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'app-lab' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'app-lab' ), 'app-lab', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
