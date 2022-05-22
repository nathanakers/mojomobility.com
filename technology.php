<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim(dirname(realpath(__FILE__)), '/');

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
// require_once( $base_dir . '/admin-cms/cms.php' );
// Include Functions & Headers
include($base_dir . '/includes/functions.php');
include($base_dir . '/includes/html-app-header.php');
include($base_dir . '/includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<section id="content-technology" class="cards">
    <div class="container">
        <div class="row">
            <div class="span12 offset2">

                <h1>Mojo’s patented Near Field Power® enables next generation wireless charging systems.</h1>
                <?php echo $contactDiscuss; ?>
                <hr>

                <div class="row">
                    <div class="span4">
                        <div class="card">
                            <div class="head">
                                <img src="/_testing/assets/images/tech-position-bedside2-sm.jpg" />
                                <img src="/_testing/assets/images/tech-position-bedside2.jpg" class="hide" />
                            </div>
                            <h3>Position Freedom</h3>
                            <p>Mojo Mobility’s unique Near Field Power® allows consumers to charge their devices position free by placing the device anywhere on the charging surface.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="card">
                            <div class="head">
                                <img src="/_testing/assets/images/tech-multi-cafe2-sm.jpg" />
                                <img src="/_testing/assets/images/tech-multi-cafe2.jpg" class="hide" />
                            </div>
                            <h3>Multi-Device</h3>
                            <p>Using a unique patented design, Mojo Mobility’s charging solutions allow multiple devices with different power requirements to be charged simultaneously on the same charging surface.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="card">
                            <div class="head">
                                <img src="/_testing/assets/images/tech-integration-phone-sm.jpg" />
                                <img src="/_testing/assets/images/tech-integration-phone.jpg" class="hide" />
                            </div>
                            <h3>Integration</h3>
                            <p>Mojo’s small receiver circuit allows for easy integration and high reliability into products such as mobile devices, cases, and batteries. Mojo Mobility’s Near Field Power® is compatible with popular wireless charging industry standards.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="/_testing/assets/images/tech-cords-table2.jpg" />
                            </div>
                            <h3>Wireless vs Cord-Charging</h3>
                            <p>Mojo’s wireless charging performance is comparable to conventional cord-charging in that it is fast, highly efficient, and able to meet charging power levels ranging from 1W to 90W and higher for mobile devices and up to 20kW for electric vehicles. Consumers will experience no charging performance degradation when switching to Mojo’s wireless technology.</p>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="/_testing/assets/images/tech-safe-desk2.jpg" />
                            </div>
                            <h3>Safe Charging Technology</h3>
                            <p>Wireless charging technology provides many safety advantages over conventional cord charging. Mojo’s unique Near Field Power® system provides:
                                <ul>
                                    <li>A safety advantage in waterproof or sealed environments due to the lack of connecting points that conventional cord-charging requires</li>
                                    <li>A charging surface that does not heat up metallic objects, making it a safe place to put coins and keys</li>
                                    <li>Electromagnetic emissions that conform to all regulatory guidelines</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section> <!-- #content-technology -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include($base_dir . '/includes/html-content-footer.php');
include($base_dir . '/includes/html-app-footer.php');
?>