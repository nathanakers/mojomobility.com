<?php
// BEGIN HTML HEADER
// @has: html header (body tag in app-header.php)
// @requires: functions.php, app-header.php, app-footer.php, html-footer.php
?>

<header class="navbar navbar-fixed-top" id="header">
	<div class="navbar-inner">
		<div class="container">
			<div class="row">
				<div class="span16">

					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span>Menu</span>
						<i class="icon-reorder"></i>
					</a>

					<!-- Be sure to leave the brand out there if you want it shown -->
					<a class="brand" href="/">
						<img src="/assets/images/logo.png" alt="Mojo Mobility logo" />
					</a>

					<!-- Everything you want hidden at 940px or less, place within here -->
					<div class="nav-collapse collapse">
						<!-- .nav, .navbar-search, .navbar-form, etc -->
						<?php echo $menu; ?>
						<!-- same nav, except "home" is not an icon -->
						<?php echo $menuFull; ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</header>

<div id="main">


	<?php // THE PAGE CONTENT IS INSERTED HERE
	?>


	<?php
	// END HTML HEADER
	?>