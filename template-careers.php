<?php
// Get absolute path to find our includes files
// NOTE - we can't get our @var $base-url until we call functions
global $base_dir;
$base_dir = rtrim( dirname( realpath( __FILE__ ) ), '/' );

// Required as the first instance for each page, and for editing using Couch CMS, REF = http://www.couchcms.com/
require_once( $base_dir . '/admin-cms/cms.php' );
?>


<cms:template title="Career Openings" clonable="1" executable="1" order="4">
    <cms:editable name="group_required_info" label="Required Job Info" type="group" order="1"/>
        <cms:editable name="job_id"               label="Job Internal ID"                           group="group_required_info"     type="text"     order="1" required="1"/>
        <cms:editable name="job_title"            label="Job Title"                                 group="group_required_info"     type="text"     order="2" required="1"/>

    <cms:editable name="group_job_info" label="About the Job" type="group" order="2"/>
        <cms:editable name="job_intro"            label="Job Intro"                                 group="group_job_info"          type="richtext" order="1"/>
        <cms:editable name="job_duties"           label="Job Duties"                                group="group_job_info"          type="richtext" order="2" desc="Enter as list items. See Help for best practice."/>

    <cms:editable name="group_candidate_info" label="About the Candidate" type="group" order="3"/>
        <cms:editable name="candidate_background" label="Desired Candidate Background"              group="group_candidate_info"    type="richtext" order="1" desc="Enter as list items. See Help for best practice."/>
        <cms:editable name="candidate_education"  label="Desired Candidate Education"               group="group_candidate_info"    type="richtext" order="2" desc="Enter as list items. See Help for best practice."/>
        <cms:editable name="candidate_experience" label="Additional Desirable Candidate Experience" group="group_candidate_info"    type="richtext" order="3" desc="Enter as list items. See Help for best practice."/>
</cms:template>


<?php
// Required by Couch CMS, required at end of each page.
COUCH::invoke();
?>