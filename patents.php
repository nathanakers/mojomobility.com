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


<cms:template title="Patent Page Content" clonable="0" executable="1" order="13">
    <cms:editable name="intro_headline" label="Intro Headline" type="text" order="1" required="1" />
    <cms:editable name="patent_header"  label="Patent Header"  type="text" order="1" />
</cms:template>

<?php // if there's a lot of patents, use these custom variables to separate patents based on type ?>
<cms:set patent_count="<cms:pages masterpage='template-patents.php' count_only='1' />" />
<cms:set us_count="<cms:pages masterpage='template-patents.php' folder='patent_type_us' count_only='1' />" />
<cms:set us_pending_count="<cms:pages masterpage='template-patents.php' folder='patent_type_us_pending' count_only='1' />" />
<cms:set non_us_count="<cms:pages masterpage='template-patents.php' folder='patent_type_non_us' count_only='1' />" />
<cms:set non_us_pending_count="<cms:pages masterpage='template-patents.php' folder='patent_type_non_us_pending' count_only='1' />" />


<?php
$patent_box = '
<div class="span4 fourths">
    <cms:if patent_doc >
        <a href="<cms:show patent_doc />" class="card">
            <div class="hide-until-hover"><span><i class="icon-external-link-sign"></i></span></div>
            <h3 class="icons"><i class="icon-file-text"></i>&nbsp;<cms:show patent_id /></h3>
            <p><cms:if patent_title ><cms:show patent_title /><cms:else /><cms:show patent_id /></cms:if></p>
        </a>
    <cms:else />
        <div class="card">
            <h3><cms:show patent_id /></h3>
            <p><cms:if patent_title ><cms:show patent_title /><cms:else /><cms:show patent_id /></cms:if></p>
        </div>
    </cms:if>
</div>';
?>


<section id="content-patents">
    <div class="container">
        <div class="row">
            <div class="span16 span14-offset1-medium span12-offset2-large">

                <h1><cms:show intro_headline /></h1>
                <hr>

                <cms:if patent_count>
                    <cms:if patent_header >
                        <h2><cms:show patent_header /></h2>
                    </cms:if>
                    <div class="row">
                        <cms:pages masterpage="template-patents.php" folder="patent_type_us" orderby="patent_id" order="desc">
                            <?php echo $XXXpatent_box; ?>
                        </cms:pages>
                        <cms:pages masterpage="template-patents.php" folder="patent_type_us_pending" orderby="patent_id" order="desc">
                            <?php echo $XXXpatent_box; ?>
                        </cms:pages>
                        <cms:pages masterpage="template-patents.php" folder="patent_type_non_us" orderby="patent_id" order="desc">
                            <?php echo $XXXpatent_box; ?>
                        </cms:pages>
                        <cms:pages masterpage="template-patents.php" folder="patent_type_non_us_pending" orderby="patent_id" order="desc">
                            <?php echo $XXXpatent_box; ?>
                        </cms:pages>
                    </div>
                    <hr>
                </cms:if>

            </div>
        </div>
    </div>
</section> <!-- #content-patents -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-content-footer.php' );
include( $base_dir . '/includes/html-app-footer.php' );

// Required by Couch CMS, required at end of each page.
COUCH::invoke();
?>