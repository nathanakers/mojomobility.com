<?php
// BEGIN HTML FOOTER
// @has: html footer (closing body tag in app-footer.php)
// @requires: functions.php, app-header.php, app-footer.php, html-header.php
?>

<?php // THE PAGE CONTENT WAS INSERTED HERE
?>


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
<div id="modal-contact" tabindex="-1" role="dialog" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<i class="icon-remove"></i>
		</button>
		<h3>Contact Info</h3>
	</div>
	<div class="modal-body big">
		<img src="/assets/images/logomark-color.png" alt="Mojo Mobility logo" />
		<h4>Contact Info</h4>
		<p>
			<?php echo $contactInfo; ?>
			<a href="mailto:sales@mojomobility.com">mailto:sales@mojomobility.com</a><br>
		</p>
		<hr>
		<a href="contact" class="btn btn-link">View all contact info&nbsp;→</a>
	</div>
</div>';

<!-- End Modals -->


<?php
// END HTML FOOTER
?>