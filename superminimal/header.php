<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
	    <link rel="profile" href="http://gmpg.org/xfn/11">
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header id="header">
			<h1>
				<?php bloginfo( 'title' ); ?>
			</h1>
			<h2>
				<?php bloginfo( 'description' ); ?>
			</h2>
		</header><!-- /#header -->