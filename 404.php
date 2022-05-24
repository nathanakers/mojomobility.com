<?php
// Include Functions & Headers
include('/includes/functions.php');
include('/includes/html-app-header.php');
include('/includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<section id="content-error">
    <div class="container">
        <div class="row">
            <div class="span12 offset2">
                <h1>Error: Current Page Not Found</h1>
                <hr>

                <div class="row">
                    <div class="span4">
                        <h2>Visit One of Our Pages</h2>
                        <?php echo $menuFull; ?>
                    </div>
                    <div class="span7 offset1">

                        <div class="row">
                            <div class="span3">
                                <h2>Contact Us</h2>
                                <h3>Mojo Mobility</h3>
                                <p>
                                    <?php echo $contactInfo ?>
                                </p>
                            </div>
                            <div class="span4">
                                <?php echo $emailList ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- #content-error -->



<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include('/includes/html-content-footer.php');
include('/includes/html-app-footer.php');
?>