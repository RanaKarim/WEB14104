<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php // wp_head(); // wordpress head functions ?>

		<link href="<?php theHTML5BoilerplateDirectory(); ?>css/normalize.css" rel="stylesheet">
		<link href="<?php theSkeletonDirectory(); ?>css/skeleton.css" rel="stylesheet">
		<link href="<?php theActiveThemeDirectory(); ?>css/main.css" rel="stylesheet">
        <link href="<?php theActiveThemeDirectory(); ?>css/new-noodle-foodle-header-css.css" rel="stylesheet">
        <link href="<?php theActiveThemeDirectory(); ?>css/new-noodle-foodle-findus-css.css" rel="stylesheet">
        <link href="<?php theActiveThemeDirectory(); ?>css/new-noodle-foodle-menu-pages-css.css" rel="stylesheet">
        <link href="<?php theActiveThemeDirectory(); ?>css/new-noodle-foodle-basket-css.css" rel="stylesheet">
        <link href="<?php theActiveThemeDirectory(); ?>css/new-noodle-foodle-home-css.css" rel="stylesheet">           

		<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

  <header class="cover">
  <img class="logo" src="<?php theActiveThemeDirectory(); ?>images/noodle foodle logo 3.png" alt="logo"/>
  </header>

  <nav>
    <a href="<?php echo get_site_url(); ?>" title="click here to go to home page" class="navbar">home</a>
    <a href="<?php echo get_site_url(); ?>/sushi-sashimi/" title="click here to go to sushi-sashimi menu page " class="navbar">sushi & sashimi </a>
    <a href="<?php echo get_site_url(); ?>/starters/" title="click here to go to starters menu page " class="navbar">starters </a>
    <a href="<?php echo get_site_url(); ?>/stir-fried-noodles/" title="click here to go to stir-fried-noodles menu page " class="navbar">stir fried noodles </a>
    <a href="<?php echo get_site_url(); ?>/noodles-in-soup/" title="click here to go to noodles-in-soup menu page " class="navbar">noodles in soup </a>
    <a href="<?php echo get_site_url(); ?>/bento-2/" title="click here to go to bento menu page " class="navbar">bento </a>
    <a href="<?php echo get_site_url(); ?>/don-buri/" title="click here to go to don buri menu page " class="navbar">don buri </a>
    <a href="<?php echo get_site_url(); ?>/rice-dishes/" title="click here to go to rice dishes menu page " class="navbar">rice dishes </a>
  </nav>
	


