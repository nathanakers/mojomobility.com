<?php
// Include Functions & Headers
include('/_testing/includes/functions.php');
include('/_testing/includes/html-app-header.php');
include('/_testing/includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<section id="content-company">
    <div class="container">
        <div class="row">

            <div class="span5 span4-offset1-medium span4-offset2-large sidebar clearfix">
                <div class="sidebar-group">
                    <h3>Mojo Mobility</h3>
                    <p>
                        <?php echo $XXXcontactInfo; ?>
                    </p>
                </div>
            </div>
            <div class="span8 span10-medium clearfix">
                <?php echo $XXXemailList; ?>
            </div>

        </div>
    </div>
</section> <!-- #content-company -->



<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include('/_testing/includes/html-content-footer.php');
include('/_testing/includes/html-app-footer.php');
?>