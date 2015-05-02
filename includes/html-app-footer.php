<?php
// BEGIN APP FOOTER
// @has: html closing scripts + tags
// @requires: functions.php, app-header.php
// NOTE - you should not have to change anything in here unless you are updating from Bootstrap 2.3.0
?>


<?php
// THE CONTENT FOOTER WAS INSERTED HERE
 ?>

<?php /* JS from initializr:
	   1. JQuery
	   2. Bootstrap
	   3. Main Project Based JS
	   4. Google Page Tracking */ ?>
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script-->
<!--script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.1.1.min.js"><\/script>')</script-->
<script src="assets/js/vendor/bootstrap.js"></script>
<script src="assets/js/main.js?t=<?php echo filemtime('assets/js/main.js'); ?>"></script>
<!--script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script-->

</body>
</html>

<?php
// END APP FOOTER
?>