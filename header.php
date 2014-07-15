<?php
/**
 * The Header for our theme.
 *
 * @package ChriCo
 */
?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Blog"><!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="google-site-verification" content="AabDB0RNGP6wtWRVaPWeaabjtZBTmeF2SYgbr-4PmyU" />

	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="site">

	<header id="site-header" role="banner">
		<a id="site-header-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>
		<?php get_search_form(); ?>
	</header>

	<div id="site-wrapper">

		<?php get_template_part( 'parts/navigation', 'header' ); ?>

		<main id="site-content" role="main">
			<div id="site-content-inner" class="clearfix">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}