<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
require_once( $base_dir . '/admin-cms/cms.php' );
?>


<cms:template title="Patents" clonable="1" executable="1" order="3">
    <cms:editable name="patent_title" label="Patent Title"    type="text" order="1" />
    <cms:editable name="patent_id"    label="Patent ID"       type="text" order="1" required="1" />
    <cms:editable name="patent_doc"   label="Patent Document" type="file" order="3" desc="Upload all patent documents into the 'Patent' folder." />

    <cms:folder name="patent_type_us"             title="US Patents" />
    <cms:folder name="patent_type_us_pending"     title="US Patents Pending" />
    <cms:folder name="patent_type_non_us"         title="Non-US Patents" />
    <cms:folder name="patent_type_non_us_pending" title="Non-US Patents Pending" />
</cms:template>


<?php
// Required by Couch CMS, required at end of each page.
COUCH::invoke();
?>