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


		<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->


