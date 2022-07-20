<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package design
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	<div class="scroll_btn">
		<svg width="25" height="10" viewBox="0 0 30 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M29 13L15 1L1 13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
	</div>

<!-- open fullpage -->
<div id="fullpage">


