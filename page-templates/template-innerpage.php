<?php
/**
 * Template Name: Innerpage (Neve)
 *
 * The template for the page new layout.
 *
 * It contains header, footer and container.
 *
 * @package Neve
 */
add_action(
	'body_class',
	function ( $class ) {
		$class[] = 'nv-template new-innerpage';
		return $class;
	}
);

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'pagebuilderinnerpage' );
	}
}
get_footer();
