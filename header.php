<?php
	//This page is for the rendering of the header all code that's needed on every page in the header/nav section will go here
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php bloginfo('name'); // show the blog name, from settings ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title('');  ?>
	</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Set the viewport variables for mobile development -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Include wordpress header files -->
	<?php wp_head(); ?>
	<!-- Include the favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>
<body>
	<!-- The header code goes here -->
	<header>
		
	</header>