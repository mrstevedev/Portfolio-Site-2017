<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: About
 *
 * @package _tk
 */

get_header(); 

?>

<section class="main animated fadeIn">
	<div class="row">
		<div id="about-text" class="col-xs-12 col-sm-12 col-md-5 ">
			<h1>About Me</h1>
			<p class="subtext"><?php $about_tagline = get_field('about_me_tagline'); 
				echo $about_tagline;?></p>
			<p class="description">
			<?php $about_description = get_field('about_me',false,false); 
				echo $about_description; ?></p>
		</div>	
		<div id="about-img" class="col-xs-12 col-sm-12 col-md-7">
			<img src="<?php $image = get_field('about_me_image'); echo $image['url'];?>" alt="About Steven Pulido | San Diego Web Developer" />
		</div>
	</div>
</section>

<?php get_footer(); ?>