<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim(dirname(realpath(__FILE__)), '/');

// Include Functions & Headers
include($base_dir . '/includes/functions.php');
include($base_dir . '/includes/html-app-header.php');
include($base_dir . '/includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<section id="content-company">
    <div class="container">
        <div class="row">

            <div class="span5 span4-offset1-medium span4-offset2-large sidebar clearfix">
                <div class="sidebar-group">
                    <h3>Mojo Mobility</h3>
                    <p>
                        <?php echo $contactInfo; ?>
                    </p>
                </div>
            </div>
            <div class="span8 span10-medium clearfix">
                <?php echo $emailList; ?>
            </div>

        </div>
    </div>
</section> <!-- #content-company -->



<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include($base_dir . '/includes/html-content-footer.php');
include($base_dir . '/includes/html-app-footer.php');
?>