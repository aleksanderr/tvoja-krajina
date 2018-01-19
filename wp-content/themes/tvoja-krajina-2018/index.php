<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tvoja-krajina
 */

get_header(); ?>

<!-- MAIN -->
<main class="main">
	<?php 
	load_template_part('intro'); 
	load_template_part('sub-intro'); 
	load_template_part('about'); 
	load_template_part('statistics'); 
	load_template_part('reviews'); 
	load_template_part('organize'); 
	load_template_part('faq'); 
	load_template_part('partners'); 
	load_template_part('socials'); 
	load_template_part('take-part'); 
	?>
</main>
<!-- /MAIN -->

<?php
get_footer();
