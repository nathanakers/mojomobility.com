<?php
// BEGIN APP HEADER INCLUDES FILE
// @has: HTML head + body tag
// @requires: functions.php, app-footer.php
// NOTE - built with Bootstrap 2.3 in mind, downloaded REF = http://www.initializr.com/
// NOTE - you should not have to change anything in here unless you are updating from Bootstrap 2.3 or you have moved your files around
// NOTE - 'filemtime' is a PHP variable used here to force browser cache-updating whenever the file is modified
?>


<!DOCTYPE html>
<?php
// Set IE classes and a dynamic class for the current screen (@var set in functions.php) \\
echo '
<!--[if lt IE 7]>		<html class="no-js screen-' . $currentPageID . ' lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>			<html class="no-js screen-' . $currentPageID . ' lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>			<html class="no-js screen-' . $currentPageID . ' lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js screen-' . $currentPageID . '" lang="en"> <!--<![endif]-->'; ?>

<head>
	<?php /* Important Standards:
		   1. Ensure UTF-8 encoding. REF =
		   2. Set viewport to device width. initial scale helps avoid mobile landscape resizing REF =
		   3. X-UA-Compatible forces IE to use its latest rendering engine
		   4. Insert content description (@var set in functions.php)
		   5. Page Title (@var set in functions.php) */ ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="<?php echo $project['meta-description']; ?>">
	<title>
		<?php echo $currentPage['title']; ?> | Mojo Mobility
	</title>
	<?php /* Icons: Favicon + Apple Touch
		   * Included in /assets/images/ instead of domain root in case this site isn't itself at the root.
		   * Also, 'filemtime' is used to force browser cache-updating whenever the file is modified. */ ?>
	<link rel="shortcut icon" href="/assets/images/favicon.ico?t=<?php echo filemtime('assets/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png?t=<?php echo filemtime('assets/images/apple-touch-icon.png'); ?>">
	<?php /* CSS:
		   1. Bootstrap 2.3.0 base and responsive addition
		   2. FontAwesome 3.0
		   3. Google Font CSS declaration(s)
		   4. Main Project CSS (filemtime used) */ ?>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<!--link rel="stylesheet" href="/assets/css/bootstrap-responsive.css"-->
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/assets/css/main.css?t=<?php echo filemtime('assets/css/main.css'); ?>">
	<?php /* JS:
		   * modernizer & jquery included
		   * all other javascripts are included at the base in html-app-footer.php */ ?>
	<script src="/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body data-spy="scroll" data-target="#jobnav">


	<?php
	// THE CONTENT HEADER IS INSERTED HERE
	// Note - This could be templated here
	?>


	<?php
	// END APP HEADER INCLUDES FILE
	?>