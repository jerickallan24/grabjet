<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GrabJet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<?php wp_head(); ?>
</head>

<?php
	global $logo;
	global $header_jet_img;		
?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header ptop30" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo $logo; ?>" />
					</a>
				</div>
			</div>

			<div class="col-md-8 col-sm-6">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</div>
	<div class="container ptop30">
		<div class="row">
			<div class="col-md-12">
				<img class="jet img-responsive" src="<?php echo $header_jet_img; ?>" />
			</div>
		</div>
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
