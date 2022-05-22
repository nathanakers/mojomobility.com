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


<cms:template title="Career Page Content" clonable="0" executable="1" order="16">
    <cms:editable name="group_sidebar" label="Sidebar Content" type="group" order="1"/>
        <cms:editable name="job_nav_header"              label="Sidebar Header"               group="group_sidebar"      type="text" order="1" desc="Default is 'Current Openings'" >Current Openings</cms:editable>

    <cms:editable name="group_job_headings" label="Job Headings" type="group" order="2"/>
        <cms:editable name="job_duties_header"           label="Duties Header"                group="group_job_headings" type="text" order="1" desc="Default is 'Duties and Responsibilities:'" ></cms:editable>
        <cms:editable name="candidate_bg_header"         label="Candidate Background Header"  group="group_job_headings" type="text" order="2" desc="Default is 'Must have background and experience as follows:'" >Must have background exeperience as follows:</cms:editable>
        <cms:editable name="candidate_experience_header" label="Candidate Experience Header"  group="group_job_headings" type="text" order="3" desc="Default is 'Education and Experience:'" >Education and Experience:</cms:editable>
        <cms:editable name="candidate_additional_header" label="Additional Experience Header" group="group_job_headings" type="text" order="4" desc="Default is 'Additional Desirable Experience:'" >Additional Desirable Experience:</cms:editable>

    <cms:editable name="group_post_ending" label="Job Ending Content" type="group" order="3"/>
        <cms:editable name="resume_request"              label="Resume Request Line"          group="group_post_ending"  type="text" order="1" desc="Default is 'Please submit your resume to' and ends with the ' <the HR email>.'">Please submit your resume to</cms:editable>
        <cms:editable name="job_post_ending"             label="Ending for Each Job Post"     group="group_post_ending"  type="text" order="2" />

    <cms:editable name="group_no_post" label="Shows if No Jobs Are Posted" type="group"    order="4"/>
        <cms:editable name="no_posted_job"               label="No Posted Job Page Filler"    group="group_no_post"      type="text" order="1" desc="This paragraph/statement ends with ' <the HR email>.'" />
</cms:template>


<?php // finds if job exists ?>
<cms:set jobs_count="<cms:pages masterpage='template-careers.php' count_only='1' />" />


<section id="content-careers">
    <div class="container">
        <div class="row">

            <!--cms:if jobs_count -->

                <div class="span5 span4-offset1-medium span4-offset2-large sidebar">
                    <nav class="sidebar-affixed" id="jobnav">
                        <h2>Current Openings</h2>
                        <ul class="nav sidenav">
                            <li class="link-<cms:show job_id />">
                                <a href="#job-<cms:show job_id />">
                                    <i class="icon-chevron-right"></i>
                                    <cms:show job_title />
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="span11 span10-offset0-medium span8-offset0-large">
                    <div class="maincolumn" id="joblistings">
                        <cms:pages masterpage='template-careers.php' >
                            <div class="joblisting" id="job-<cms:show job_id />">
                                <h3><cms:show job_title /></h3>
                                <cms:show job_intro />
                                <cms:if job_duties>
                                    <h4><cms:show job_duties_header /></h4>
                                    <cms:show job_duties />
                                </cms:if>
                                <cms:if candidate_background>
                                    <h4><cms:show candidate_bg_header /></h4>
                                    <cms:show candidate_background />
                                </cms:if>
                                <cms:if candidate_education>
                                    <h4><cms:show candidate_experience_header /></h4>
                                    <cms:show candidate_education />
                                </cms:if>
                                <cms:if candidate_experience>
                                    <h4><cms:show candidate_additional_header /></h4>
                                    <cms:show candidate_experience />
                                </cms:if>
                                <p><cms:show resume_request />&nbsp;<a href="mailto:<cms:show g_email_hr />"><cms:show g_email_hr /></a>.
                                <br><cms:show job_post_ending /></p>
                                <hr>
                            </div>
                        </cms:pages>
                    </div>
                </div>

            <!--cms:else /-->

                <div class="span16 span14-offset1-medium span12-offset2-large">
                    <h1><cms:show no_posted_job />&nbsp;<a href="mailto:<cms:show g_email_hr />"><cms:show g_email_hr /></a>.</h1>
                    <hr>
                </div>

            <!--/cms:if-->

        </div>
    </div>
</section> <!-- #content-careers -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-content-footer.php' );
include( $base_dir . '/includes/html-app-footer.php' );

// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>