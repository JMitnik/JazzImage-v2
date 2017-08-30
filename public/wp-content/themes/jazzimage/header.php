<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,400|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="<?=get_template_directory_uri();?>/styles/main.css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<div class="nav cleafix">
	<div class="container clearfix">
		<a href="<?=get_home_url();?>" class="header-logo pull-left"></a>
		<?=wp_nav_menu('header_nav');?>
	</div>
</div>
