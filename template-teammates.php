<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
require_once( $base_dir . '/admin-cms/cms.php' );
?>


<cms:template title="Management Team" clonable="1" executable="1" order="2">
    <cms:editable name="team_member_full_name" label="Team Member Full Name" type="text"     order="1" required="1" />
    <cms:editable name="team_member_title"     label="Team Member Title"     type="text"     order="2" required="1" />
    <cms:editable name="about_team_member"     label="About Team Member"     type="richtext" order="3" />
</cms:template>


<?php
// Required by Couch CMS, required at end of each page.
COUCH::invoke();
?>