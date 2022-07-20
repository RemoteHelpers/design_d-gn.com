<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package design
 */




 // styles-initialization
 wp_register_style('styles', get_template_directory_uri().'/css/style.css', '', '0.0000', false);
 wp_enqueue_style('styles');

 wp_register_style('media-styles', get_template_directory_uri().'/css/media.css', '', '0.0000', false);
 wp_enqueue_style('media-styles');

 wp_register_style('materialize', get_template_directory_uri().'/css/materialize.css', '', '0.0000', false);
 wp_enqueue_style('materialize');

 wp_register_style('fullpage', get_template_directory_uri().'/css/fullpage.min.css', '', '0.0000', false);
 wp_enqueue_style('fullpage');

 // scripts-initialization 
 wp_register_script( 'scripts', get_template_directory_uri().'/js/script.js', '', '0.0000', false);
 wp_enqueue_script( 'scripts' );

 wp_register_script( 'materialize-js', get_template_directory_uri().'/js/materialize.min.js', '', '0.0000', false);
 wp_enqueue_script( 'materialize-js' );

 wp_register_script( 'fullpage-js', get_template_directory_uri().'/js/fullpage.min.js', '', '0.0000', false);
 wp_enqueue_script( 'fullpage-js' );

 
 wp_register_script( 'lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js' );
 wp_enqueue_script( 'lottie' );




get_header();
?>

	<main id="primary" class="site-main">

	
	




	</main><!-- #main -->

<?php
get_footer();
