<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AOD_vintage_bicycle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="simpleparallax.js"></script>
	
	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
<?php wp_body_open(); ?>

	
<div id="page" class="site" >


	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
			
				<div class=" col-md-5">
					<ul class="first-navbar-nav">
					  <li class="nav-item">
						<a class="nav-link" href="#">ABOUT US</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">WORK</a>
					  </li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="site-branding">
						<?php
						the_custom_logo();
						
						$aod_vintage_bicycle_description = get_bloginfo( 'description', 'display' );
						if ( $aod_vintage_bicycle_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $aod_vintage_bicycle_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div>
				</div><!-- .site-branding -->
				<div class="col-md-5">
				<ul class="navbar-nav">
					  <li class="nav-item">
						<a class="nav-link" href="#">SHOP</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">CONTACT</a>
					  </li>
					</ul>
					
				</div>
				</div>
			 
		</div>	
			
</div>
		

	</header><!-- #masthead -->
