<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Izo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L1EB0G2R0L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L1EB0G2R0L');
</script>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	
	<script src="//rum-static.pingdom.net/pa-608395ae7267e1001100026d.js" async></script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'izo' ); ?></a>

	<?php do_action( 'izo_header_before' ); ?>

	<?php do_action( 'izo_header' ); ?>

	<?php do_action( 'izo_header_after' ); ?>

	<?php do_action( 'izo_main_container_start' ); ?>