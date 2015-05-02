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
						<p>© <?php echo date("Y"); ?> Copyright <cms:show g_name_f /></p>
					</div>

					<div class="span11">
						<?php echo $menuFull; ?>
						<?php echo $menuFullReverse; ?>
					</div>
				</div>

			</div> <!-- .span14 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</footer> <!-- #footer -->

<!-- End Footer -->

<!-- Begin Modals -->
<?php echo $modal_contact; ?>
<!-- End Modals -->


<?php
// END HTML FOOTER
?>