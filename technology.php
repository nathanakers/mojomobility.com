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


<cms:template title="Technology Page Content" clonable="0" executable="1" order="11">
    <cms:editable name="group_general" label="General Page Content" type="group" order="1" />
    <cms:editable name="intro_headline" label="Intro Headline" group="group_general" type="text" order="1" />

    <cms:editable name="group_position_free" label="Position Free Technology" type="group" order="2" />
    <cms:editable name="position_free_title" label="Position Free Title" group="group_position_free" type="text" order="1" />
    <cms:editable name="position_free_content" label="Position Free Content" group="group_position_free" type="richtext" order="2" />

    <cms:editable name="group_multi_device" label="Multi-Device Technology" type="group" order="3" />
    <cms:editable name="multi_device_title" label="Multi-Device Title" group="group_multi_device" type="text" order="1" />
    <cms:editable name="multi_device_content" label="Multi-Device Content" group="group_multi_device" type="richtext" order="2" />

    <cms:editable name="group_integration" label="Integration Technology" type="group" order="4" />
    <cms:editable name="integration_title" label="Integration Title" group="group_integration" type="text" order="1" />
    <cms:editable name="integration_content" label="Integration Content" group="group_integration" type="richtext" order="2" />

    <cms:editable name="group_wireless" label="Wireless Technology" type="group" order="5" />
    <cms:editable name="wireless_vs_title" label="Wireless vs Cord Title" group="group_wireless" type="text" order="1" />
    <cms:editable name="wireless_vs_content" label="Wireless vs Cord Content" group="group_wireless" type="richtext" order="2" />

    <cms:editable name="group_safe_charging" label="Safe-Charging Technology" type="group" order="6" />
    <cms:editable name="safe_charging_title" label="Safe Charging Title" group="group_safe_charging" type="text" order="1" />
    <cms:editable name="safe_charging_content" label="Safe Charging Content" group="group_safe_charging" type="richtext" order="2" />
</cms:template>



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
                                <img src="assets/images/tech-position-bedside2-sm.jpg" />
                                <img src="assets/images/tech-position-bedside2.jpg" class="hide" />
                            </div>
                            <h3>Position Freedom</h3>
                            <p>Mojo Mobility’s unique Near Field Power® allows consumers to charge their devices position free by placing the device anywhere on the charging surface.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/tech-multi-cafe2-sm.jpg" />
                                <img src="assets/images/tech-multi-cafe2.jpg" class="hide" />
                            </div>
                            <h3>Multi-Device</h3>
                            <p>Using a unique patented design, Mojo Mobility’s charging solutions allow multiple devices with different power requirements to be charged simultaneously on the same charging surface.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/tech-integration-phone-sm.jpg" />
                                <img src="assets/images/tech-integration-phone.jpg" class="hide" />
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
                                <img src="assets/images/tech-cords-table2.jpg" />
                            </div>
                            <h3>Wireless vs Cord-Charging</h3>
                            <p>Mojo’s wireless charging performance is comparable to conventional cord-charging in that it is fast, highly efficient, and able to meet charging power levels ranging from 1W to 90W and higher for mobile devices and up to 20kW for electric vehicles. Consumers will experience no charging performance degradation when switching to Mojo’s wireless technology.</p>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/tech-safe-desk2.jpg" />
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

// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>