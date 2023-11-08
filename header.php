<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>


</head>
<?php
$custom_logo_url = get_theme_mod( 'custom_logo_setting' );
$site_logo_url   = get_theme_mod( 'site_logo_setting' );
?>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header" role="banner">
	<div class="custom-header">
		<div class="site-branding">
			<div class="wrap">
				<div class="site-branding-text">
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" aria-current="page">
							<img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="324" height="80" decoding="async">
						</a>
					</p>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<p class="site-docs">
						<a class="link" href="https://flance.info/docs/" target="_blank">
							<span>Documentation</span>
							<span>→</span>
						</a>
					</p>
				</div><!-- .site-branding-text -->
				<a href="https://flance.info" class="custom-logo-link flance-logo" target="_blank">

					<img src="<?php echo esc_url( $site_logo_url ); ?>" alt="Flance">
				</a>
			</div><!-- .wrap -->
			<div class="title-backgound">
				<div class="wrap wrap-title">
					<h1><?php the_title(); ?></h1>
					<div class="under-title-top"></div>
					<div class="under-title-bottom"><?php the_excerpt(); ?></div>
				</div>
			</div>
		</div>
	</div>
</header>


