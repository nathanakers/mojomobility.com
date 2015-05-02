<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
require_once( $base_dir . '/admin-cms/cms.php' );
// Include Functions & Headers
include( $base_dir . '/includes/functions.php' );
include( $base_dir . '/includes/html-app-header.php' );
include( $base_dir . '/includes/html-content-header.php' );
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<cms:template title="Error Page Content" clonable="0" executable="1" order="20">
    <cms:editable name="error_message"  label="Error Message"      type="text" order="1" desc="Default is 'Error: Current Page Not Found'">Error: Current Page Not Found</cms:editable>
    <cms:editable name="pages_header"   label="Visit Pages Header" type="text" order="2" desc="Default is 'Visit one of our pages'">Visit one of our pages</cms:editable>
    <cms:editable name="contact_header" label="Contact Us Header"  type="text" order="2" desc="Default is 'Contact us'">Contact us</cms:editable>
</cms:template>


<section id="content-error">
    <div class="container">
        <div class="row">
            <div class="span12 offset2">
                <h1><cms:show error_message /></h1>
                <hr>

                <div class="row">
                    <div class="span4">
                        <h2><cms:show pages_header /></h2>
                        <?php echo $menuFull; ?>
                    </div>
                    <div class="span7 offset1">

                        <div class="row">
                            <div class="span3">
                                <h2><cms:show contact_header /></h2>
                                <h3><cms:show g_name /></h3>
                                <p>
                                    <cms:show g_street />
                                    <br><cms:show g_city />, <cms:show g_state />, <cms:show g_zip />
                                    <br><cms:show g_phone />
                                </p>
                            </div>
                            <div class="span4">
                                <cms:pages masterpage="template-globals.php">
                                    <cms:show_repeatable "all_company_emails" >
                                        <h5><cms:show email_title /></h5>
                                        <a href="mailto:<cms:show email_address />"><cms:show email_address /></a>
                                    </cms:show_repeatable>
                                </cms:pages>
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
include( $base_dir . '/includes/html-content-footer.php' );
include( $base_dir . '/includes/html-app-footer.php' );

// Required by Couch CMS, required at end of each page.
COUCH::invoke();
?>