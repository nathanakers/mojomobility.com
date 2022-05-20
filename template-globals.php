<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
// require_once( $base_dir . '/admin-cms/cms.php' );
?>


<cms:template title="Sitewide Content" clonable="0" executable="1" order="1">

    <cms:editable name="group_general" label="General Content" type="group" order="1" />
        <cms:editable name="company_name"         label="Company Name"             group="group_general" type="text" order="1" required="1" />
        <cms:editable name="company_name_full"    label="Legal Company Name"       group="group_general" type="text" order="2" required="1" />
        <cms:editable name="phone"                label="Contact Phone"            group="group_general" type="text" order="3" required="1" desc="This number will display exactly as you format it." />

    <cms:editable name="group_address" label="Location Address" type="group" order="2"/>
        <cms:editable name="address_street"       label="Contact Address - Street" group="group_address" type="text" order="1" required="1" />
        <cms:editable name="address_city"         label="Contact Address - City"   group="group_address" type="text" order="2" required="1" />
        <cms:editable name="address_state"        label="Contact Address - State"  group="group_address" type="text" order="3" required="1" />
        <cms:editable name="address_zip"          label="Contact Address - Zip"    group="group_address" type="text" order="4" required="1" />

    <cms:editable name="group_emails" label="Emails" type="group" order="3" />
        <cms:editable name="email_common"         label="General Contact Email"    group="group_emails"  type="text" order="1" required="1" desc="This email should also exist in the 'All Company Emails' segment" />
        <cms:editable name="email_hr"             label="Careers Contact Email"    group="group_emails"  type="text" order="2" required="1" desc="This email should also exist in the 'All Company Emails' segment" />
        <cms:repeatable name="all_company_emails" label="All Company Emails"       group="group_emails"              order="3">
            <cms:editable name="email_title"      label="Email Title"                                    type="text" order="1"/>
            <cms:editable name="email_address"    label="Email Address"                                  type="text" order="2"/>
        </cms:repeatable>

</cms:template>


<?php
// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>