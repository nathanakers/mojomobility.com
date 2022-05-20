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


<cms:template title="Company Page Content" clonable="0" executable="1" order="15">
    <cms:editable name="team_content_header" label="Team Content Header"    type="text" order="1" />
    <cms:editable name="contact_header"      label="Contact Sidebar Header" type="text" order="1" />
</cms:template>


<section id="content-company">
    <div class="container">
        <div class="row">

            <div class="span5 span4-offset1-medium span4-offset2-large sidebar clearfix">
                <!--div class="sidebar-affixed" id="contact"-->
                    <cms:if contact_header >
                        <h2><cms:show contact_header /></h2>
                    </cms:if>
                    <div class="sidebar-group">
                        <h3><cms:show g_name /></h3>
                        <p>
                            <cms:show g_street />
                            <br><cms:show g_city />, <cms:show g_state />, <cms:show g_zip />
                            <br><cms:show g_phone />
                        </p>
                        <!--hr-->
                    </div>
                <!--/div-->
            </div>
            <div class="span8 span10-medium clearfix">
                <!--div class="sidebar-group"-->
                    <cms:pages masterpage="template-globals.php">
                        <cms:show_repeatable "all_company_emails" >
                            <div class="email-group">
                                <h5><cms:show email_title /></h5>
                                <a href="mailto:<cms:show email_address />"><cms:show email_address /></a>
                            </div>
                        </cms:show_repeatable>
                    </cms:pages>
                <!--/div-->
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
include( $base_dir . '/includes/html-content-footer.php' );
include( $base_dir . '/includes/html-app-footer.php' );

// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>