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


<cms:template title="Company Page Content" clonable="0" executable="1" order="15">
    <cms:editable name="team_content_header" label="Team Content Header" type="text" order="1" />
    <cms:editable name="contact_header" label="Contact Sidebar Header" type="text" order="1" />
</cms:template>


<section id="content-company">
    <div class="container">
        <div class="row">

            <div class="span5 span4-offset1-medium span4-offset2-large sidebar clearfix">
                <!--div class="sidebar-affixed" id="contact"-->
                <div class="sidebar-group">
                    <h3>Mojo Mobility</h3>
                    <p>
                        3350 Scott Blvd.<br>
                        Bldg. 37A<br>
                        Santa Clara, CA, 95054<br>
                        <a href="tel:6504460004">(650) 446-0004</a>
                    </p>
                    <!--hr-->
                </div>
                <!--/div-->
            </div>
            <div class="span8 span10-medium clearfix">
                <div class="email-group">
                    <h5>Sales / General</h5>
                    <a href="mailto:sales@mojomobility.com">sales@mojomobility.com</a>
                </div>
                <div class="email-group">
                    <h5>HR / Careers</h5>
                    <a href="mailto:hr@mojomobility.com">hr@mojomobility.com</a>
                </div>
                <div class="email-group">
                    <h5>Accounting</h5>
                    <a href="mailto:accounting@mojomobility.com">accounting@mojomobility.com</a>
                </div>
                <div class="email-group">
                    <h5>Business Development</h5>
                    <a href="mailto:bus.dev@mojomobility.com">bus.dev@mojomobility.com</a>
                </div>
            </div>


            <!--div class="span11 span10-offset0-medium span8-offset0-large">
                <div class="maincolumn" id="team">
                    <cms:if team_content_header >
                        <h2><cms:show team_content_header /></h2>
                    </cms:if>
                    <cms:pages masterpage="template-teammates.php" orderby="publish_date" order="asc">
                        <h3><cms:show team_member_full_name /></h3>
                        <h4><cms:show team_member_title /></h4>
                        <cms:if about_team_member >
                            <p><cms:show about_team_member /></p>
                        </cms:if>
                        <hr>
                    </cms:pages>
                </div>
            </div-->

        </div>
    </div>
</section> <!-- #content-company -->



<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include($base_dir . '/includes/html-content-footer.php');
include($base_dir . '/includes/html-app-footer.php');

// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>