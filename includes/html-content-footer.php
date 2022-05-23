<?php
// BEGIN HTML FOOTER
// @has: html footer (closing body tag in app-footer.php)
// @requires: functions.php, app-header.php, app-footer.php, html-header.php
?>

			<?php // THE PAGE CONTENT WAS INSERTED HERE ?>


</div> <!-- #main from content-header -->

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="span16">

				<div class="row">
					<div class="span5">
						<p>© <?php echo date("Y"); ?> Copyright Mojo Mobility, Inc.</p>
					</div>

					<div class="span11">
						<?php echo $XXXmenuFull; ?>
						<?php echo $XXXmenuFullReverse; ?>
					</div>
				</div>

			</div> <!-- .span14 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</footer> <!-- #footer -->

<!-- End Footer -->

<!-- Begin Modals -->
<?php echo $XXXmodalContact; ?>
<!-- End Modals -->


<?php
// END HTML FOOTER
?>