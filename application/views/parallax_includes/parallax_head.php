<?php
/** parallax_head.php
 * 
 * @author Matthew Conk <mattconk@gmail.com> 
 * @version Sep 20, 2013
 * @package Jiggs app
 */

echo doctype('html5');
?>

<html>
<head>
	
	<title>Jiggs Marshall <?php echo (isset($title)) ? '| '.$title : ''; ?></title>
	
	<?php
	/* Meta Tags */
	echo meta('Content-Type', 'text/html; charset=utf-8',  'equiv');
	echo meta('viewport', 'width=device-width, initial-scale = 1.0, user-scalable = no');
	
	/* Stylessheets */	
	echo link_tag('css/parallax_style.css');
	echo link_tag('css/parallax_prettyPhoto.css');
	echo link_tag('css/parallax_normalize.css');
	echo link_tag('css/parallax_grid.css');

	/* Fonts */ 
	echo link_tag('http://fonts.googleapis.com/css?family=Droid+Sans:400,700');
	
	/* Icons & Favicons */
	echo link_tag('img/glyphicons_071_book.png', 'shortcut icon', 'image/ico');
	
	?>
	
	<!-- Javascript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.src.js"></script>
	<![endif]-->

</head>

<body>
