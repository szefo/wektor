<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wektor
 */

get_header(); ?>

<?php $textAbove = get_field('textAbove') ?>


	<?php get_template_part('template-parts/top-header'); ?>

	<div id="primary" class="content-area default">
		<div class="container">
			<div class="row">
				
				
				
			</div>
		</div>
	</div>

<?php
//get_sidebar();
get_footer();
