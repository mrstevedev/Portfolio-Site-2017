<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:image" content="https://www.stevenpulido.com/wp-content/uploads/2017/06/facebook_img.png">
  <meta name="description" content="San Diego Web Design, Web Development, User Interface Design, & Wordpress Development. Need a website presence? I am an expert designer and developer. I am an expert in Wordpress, and using various languanges and tools to bring a modern and elegant design to life.">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>    

       <ul class="social nav navbar-nav col-sm-4 col-md-4 col-lg-4">
          <li><a target="_blank" href="https://www.facebook.com/spolido1"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="16" height="16" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;"
            xml:space="preserve">
          <g>
            <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
              c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
              c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
          </g>
          </svg></a></li>
          <li><a target="_blank" href="https://www.linkedin.com/in/spolido/"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="16" height="16" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;"
            xml:space="preserve">
          <g>
            <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707
              c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21
              v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824
              C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463
              c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z
              M5.477,420.56h92.184v-277.32H5.477V420.56z"/>
          </g>

          </svg></a></li>
          <li><a href="#"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="16" height="16" viewBox="0 0 430.117 430.118" style="enable-background:new 0 0 430.117 430.118;"
	 xml:space="preserve">
<g>
	<path id="Dribbble" d="M215.05,0C96.274,0.009,0,96.289,0,215.068c0,118.758,96.274,215.049,215.05,215.049
		c118.776,0,215.054-96.291,215.067-215.049C430.104,96.289,333.826,0.009,215.05,0z M346.819,111.506
		c20.983,26.645,34.121,59.638,35.778,95.668c-24.278-5.153-47.217-7.661-68.602-7.661v-0.005h-0.158
		c-17.217,0-33.375,1.563-48.604,4.264c-3.701-9.071-7.453-17.784-11.233-26.129C287.916,162.767,320.47,141.585,346.819,111.506z
		 M215.05,47.28c39.576,0,75.882,13.836,104.626,36.87c-21.996,26.334-51.029,45.406-82.393,58.873
		c-22.038-42.615-43.333-73.101-57.89-91.739C190.916,48.727,202.81,47.28,215.05,47.28z M140.941,64.77
		c11.646,13.756,34.963,44.013,59.867,91.253c-50.649,15.077-101.651,18.619-132.51,18.61c-0.88,0-1.75,0-2.604-0.009h-0.028
		c-5.197,0-9.666-0.082-13.397-0.196C64.308,126.254,97.311,86.357,140.941,64.77z M47.266,215.068c0-0.789,0.028-1.591,0.075-2.417
		c4.791,0.177,10.935,0.329,18.33,0.329h0.042c33.727-0.22,92.614-3.038,152.292-21.879c3.253,7.113,6.473,14.519,9.656,22.208
		c-39.853,13.329-71.241,34.564-94.457,55.711C110.854,289.377,95.754,309.54,86.931,323
		C62.242,293.769,47.279,256.204,47.266,215.068z M215.05,382.859c-37.339,0-71.754-12.349-99.673-33.07
		c5.934-9.773,18.657-28.535,38.917-47.922c20.845-19.975,49.62-40.538,87.19-52.775c12.77,35.797,24.325,76.718,33.127,122.781
		C256.068,378.934,236.032,382.859,215.05,382.859z M310.011,353.065c-8.513-41.659-19.215-79.224-30.966-112.748
		c10.897-1.563,22.336-2.445,34.41-2.445h0.434h0.028h0.028c20.012,0,42.003,2.487,65.852,7.906
		C371.541,290.143,345.844,328.352,310.011,353.065z"/>
</g>

</svg></a></li>
          <li><a href="#"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="16" height="16" viewBox="0 0 430.123 430.123" style="enable-background:new 0 0 430.123 430.123;"
	 xml:space="preserve">
<g>
	<path id="Behance" d="M388.432,119.12H280.659V92.35h107.782v26.77H388.432z M208.912,228.895
		c6.954,10.771,10.429,23.849,10.429,39.203c0,15.878-3.918,30.122-11.889,42.704c-5.071,8.326-11.367,15.359-18.932,21.021
		c-8.52,6.548-18.607,11.038-30.203,13.437c-11.633,2.403-24.224,3.617-37.787,3.617H0V81.247h129.25
		c32.579,0.53,55.676,9.969,69.315,28.506c8.184,11.369,12.239,25.011,12.239,40.868c0,16.362-4.104,29.454-12.368,39.401
		c-4.597,5.577-11.388,10.65-20.378,15.229C191.675,210.236,202.007,218.086,208.912,228.895z M61.722,186.76h56.632
		c11.638,0,21.046-2.212,28.292-6.634c7.241-4.415,10.854-12.263,10.854-23.531c0-12.449-4.784-20.712-14.375-24.689
		c-8.244-2.763-18.792-4.186-31.591-4.186H61.722V186.76z M162.953,264.275c0-13.902-5.682-23.513-17.023-28.67
		c-6.342-2.931-15.29-4.429-26.763-4.536H61.722v71.322h56.556c11.619,0,20.612-1.521,27.102-4.694
		C157.084,291.863,162.953,280.76,162.953,264.275z M428.419,220.736c1.302,8.756,1.891,21.46,1.652,38.065H290.493
		c0.77,19.266,7.421,32.739,20.035,40.449c7.607,4.835,16.83,7.196,27.63,7.196c11.388,0,20.67-2.879,27.815-8.797
		c3.893-3.137,7.327-7.565,10.296-13.152h51.16c-1.34,11.379-7.5,22.92-18.57,34.648c-17.151,18.641-41.205,27.988-72.097,27.988
		c-25.52,0-48.011-7.883-67.533-23.592C249.772,307.777,240,282.211,240,246.746c0-33.257,8.773-58.712,26.378-76.43
		c17.67-17.751,40.474-26.586,68.583-26.586c16.661,0,31.68,2.978,45.079,8.965c13.357,5.993,24.396,15.425,33.09,28.388
		C420.998,192.499,426.058,205.699,428.419,220.736z M378.062,225.73c-0.938-13.322-5.386-23.405-13.395-30.296
		c-7.943-6.91-17.866-10.379-29.706-10.379c-12.886,0-22.836,3.708-29.906,10.996c-7.118,7.273-11.547,17.161-13.362,29.68H378.062
		L378.062,225.73z"/>
</g>
</svg>
</a></li>
        </ul> 

          <div class="site-brand col-sm-3 col-md-4 col-lg-4">
            <a class="navbar-brand" href="/home">
              <img src="<?php bloginfo('url')?>/wp-content/uploads/2018/11/logo.svg">
              <p class="site-description lead">Front-End Web Developer / Wordpress Developer</p>
            </a>
          </div>
        
         <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_id'      => 'navbar',
              'container_class'   => 'collapse navbar-collapse navbar-right',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'menu_id'           => 'main-menu',
              'walker'            => new wp_bootstrap_navwalker()
            )
          ); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">

