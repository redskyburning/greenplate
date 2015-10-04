<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title><?php woo_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php woo_meta(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   
	<!--[if IE 6]>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/menu.js"></script>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" />
    <![endif]-->	
	
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" />
	<![endif]-->
   
<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<link href="http://fonts.googleapis.com/css?family=Anton" rel="stylesheet" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/root.css" />

</head>

<body <?php body_class(); ?>>

<div id="container">

        
	<div id="header" class="col-full">

		<div id="site-logo">
			<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-only-white.svg" /></a>
		</div>

		<!--<div id="logo" class="fl">
	       
	       	<a href="<?php /*bloginfo('url'); */?>" title="<?php /*bloginfo('description'); */?>"><img class="title" src="<?php /*if ( get_option('woo_logo') <> "" ) { echo get_option('woo_logo'); } else { bloginfo('template_directory'); */?>/images/logo.png<?php /*} */?>" alt="<?php /*bloginfo('name'); */?>" /></a>
	      	
	      	<?php /*if(is_single() || is_page()) : */?>
	      		<span class="site-title"><a href="<?php /*bloginfo('url'); */?>"><?php /*bloginfo('name'); */?></a></span>
	      	<?php /*else: */?>
	      		<h1 class="site-title"><a href="<?php /*bloginfo('url'); */?>"><?php /*bloginfo('name'); */?></a></h1>
	      	<?php /*endif; */?>
	      	
	      		<span class="site-description"><?php /*bloginfo('description'); */?></span>
	      	
		</div>--><!-- /#logo -->
	       
	   	<div id="pagenav" class="nav">
			<?php
			if ( function_exists('has_nav_menu') && has_nav_menu('primary-menu') ) {
				wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => 'ul', 'theme_location' => 'primary-menu' ) );
			} else {
			?>
	   		<ul>
	   			<?php 
                if ( get_option('woo_custom_nav_menu') == 'true' ) {
                    if ( function_exists('woo_custom_navigation_output') )
                        woo_custom_navigation_output('name=Woo Menu 1');
    
                } else { ?>
	   			<?php if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
	            <li class="b <?php echo $highlight; ?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'woothemes') ?></a></li>
		    	<?php wp_list_pages('sort_column=menu_order&depth=3&title_li='); ?>
		    	<?php } ?>
	    	</ul>
	    	<?php } ?>
	    </div><!-- /#pagenav -->
       
	</div><!-- /#header -->