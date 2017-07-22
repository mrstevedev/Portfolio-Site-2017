<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Home
 * @package _tk
 */

get_header(); ?>

<div class="desc-outer">

	<div class="about-me-desc">
	
	<div class="desc-top">
		<h1 class="animated fadeIn">I am a passionate <strong><span class="hilite">Front-End Web Developer</span></strong> residing in beautiful <strong><span class="hilite">San Diego California</span></strong>.<br>
	
		<span class="specialize-desc">I specialize in <a href="https://frontendmasters.com/books/front-end-handbook/2017/what-is-a-FD.html" class="hilite" target="_blank"><span>Front-End Dev</span></a> using the <strong><span class="hilite">lastest</span></strong><span class="ampersand"> &</span> <strong><span class="hilite"> greatest</span></strong> tools.</span></h1>
		<h2 class="animated fadeIn">I bring <span class="hilite">elegant</span> <span class="ampersand">&</span> <span class="hilite">modern</span> designs to life.</h2>
	</div>

	<div class="desc-middle">
		 
		<h3 class="animated fadeIn">As a Front-End Developer</h3>

			 <ul class="animated fadeIn front-end-list">
				<li>HTML5</li>
				<li>CSS3</li>
				<li>Javascript</li>
				<li>PHP</li>
				<li>Performance</li>
				<li>Wordpress</li>
			 </ul>
	</div>

	<div class="desc-bottom">
		
		<h3 class="animated fadeInDown">Download My Resume</h3>
		
		<a target="_blank" class="animated fadeIn hvr-icon-sink-away" href="<?php bloginfo('url')?>/wp-content/uploads/2017/07/Pulido_Steven_Resume___July_2017.pdf"></a>
		
	</div>
</div>
</div><!-- End Desc-Outer -->	

<?php get_footer(); ?>
