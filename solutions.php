<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
// require_once( $base_dir . '/admin-cms/cms.php' );
// Include Functions & Headers
include( $base_dir . '/includes/functions.php' );
include( $base_dir . '/includes/html-app-header.php' );
include( $base_dir . '/includes/html-content-header.php' );
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<cms:template title="Solution Page Content" clonable="0" executable="1" order="12">
    <cms:editable name="group_general" label="General Page Content" type="group" order="1" />
        <cms:editable name="intro_headline"   label="Intro Headline"                      group="group_general"  type="text"     order="1" />

    <cms:editable name="group_mobile" label="Mobile Solutions" type="group" order="2" />
        <cms:editable name="mobile_title"     label="Mobile Solution Title"               group="group_mobile"   type="text"     order="1" />
        <cms:editable name="mobile_content"   label="Mobile Solution Content"             group="group_mobile"   type="richtext" order="2" />

    <cms:editable name="group_wearable" label="Wearable Solutions" type="group" order="3" />
        <cms:editable name="wearable_title"   label="Wearable Solution Title"             group="group_wearable" type="text"     order="1" />
        <cms:editable name="wearable_content" label="Wearable Solution Content"           group="group_wearable" type="richtext" order="2" />

    <cms:editable name="group_auto" label="Automotive Solutions" type="group" order="4" />
        <cms:editable name="auto_title"       label="Automotive Solution Title"           group="group_auto"     type="text"     order="1" />
        <cms:editable name="auto_content"     label="Automotive Solution Content"         group="group_auto"     type="richtext" order="2" />

    <cms:editable name="group_ev" label="Electric Vehicle Solutions" type="group" order="5" />
        <cms:editable name="ev_title"         label="Electric Vehicle Solution Title"     group="group_ev"       type="text"     order="1" />
        <cms:editable name="ev_content"       label="Electric Vehicle Solution Content"   group="group_ev"       type="richtext" order="2" />

    <cms:editable name="group_consumer" label="Consumer Solutions" type="group" order="6" />
        <cms:editable name="consumer_title"   label="Consumer Solution Title"             group="group_consumer" type="text"     order="1" />
        <cms:editable name="consumer_content" label="Consumer Solution Content"           group="group_consumer" type="richtext" order="2" />

    <cms:editable name="group_other" label="Other Application Solutions" type="group" order="7" />
        <cms:editable name="other_title"      label="Other Application Solutions Title"   group="group_other"    type="text"     order="1" />
        <cms:editable name="other_content"    label="Other Application Solutions Content" group="group_other"    type="richtext" order="2" />
</cms:template>



<section id="content-solutions">
    <div class="container cards">
        <div class="row">
            <div class="span12 offset2">

                <h1><cms:show intro_headline /></h1>
                <?php echo $contactDiscuss; ?>
                <hr>

                <div class="row">
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/solutions-mobile-bedside.jpg" />
                            </div>
                            <h3><cms:show mobile_title /></h3>
                            <cms:show mobile_content />
                        </div>
                    </div>
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/IMG_5471-crop-140429a-newlogo-brannan.jpg" />
                            </div>
                            <h3><cms:show wearable_title /></h3>
                            <cms:show wearable_content />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/solutions-auto-console.jpg" />
                            </div>
                            <h3><cms:show auto_title /></h3>
                            <cms:show auto_content />
                        </div>
                    </div>
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/solutions-ev-car2.jpg" />
                            </div>
                            <h3><cms:show ev_title /></h3>
                            <cms:show ev_content />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/solutions-consumer-ipad.jpg" />
                            </div>
                            <h3><cms:show consumer_title /></h3>
                            <cms:show consumer_content />
                        </div>
                    </div>
                    <div class="span6">
                        <div class="card">
                            <div class="head">
                                <img src="assets/images/solutions-other-turbines2.jpg" />
                            </div>
                            <h3><cms:show other_title /></h3>
                            <cms:show other_content />
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section> <!-- #content-solutions -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-content-footer.php' );
include( $base_dir . '/includes/html-app-footer.php' );

// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>