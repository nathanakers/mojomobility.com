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


<cms:template title="Home Page Content" clonable="0" executable="1" order="10">
    <cms:editable name="group_sliders" label="Slider Content" type="group" order="1" />
        <cms:editable name="slider_desk"       label="Desk Slider Text"           group="group_sliders" type="text"     order="1" required="1" />
        <cms:editable name="slider_bed"        label="Bed Slider Text"            group="group_sliders" type="text"     order="2" required="1" />
        <cms:editable name="slider_cafe"       label="Cafe Slider Text"           group="group_sliders" type="text"     order="3" required="1" />
        <cms:editable name="slider_car"        label="Car Slider Text"            group="group_sliders" type="text"     order="4" required="1" />

    <cms:editable name="group_body" label="Main Content" type="group" order="3" />
        <cms:editable name="intro_headline"    label="Intro Headline"             group="group_body"    type="text"     order="1" required="1" />
        <cms:editable name="body_content"      label="Body Content"               group="group_body"    type="richtext" order="2" required="1" />
        <cms:editable name="wwd_header"        label="What We Do Header"          group="group_body"    type="text"     order="3"              desc="Default is 'What We Do'" >What We Do</cms:editable>
        <cms:editable name="what_we_do"        label="What We Do"                 group="group_body"    type="richtext" order="4" required="1" />
        <cms:editable name="pov_header"        label="Point of View Header"       group="group_body"    type="text"     order="5"              desc="Default is 'Our Point of View" >Our Point of View</cms:editable>
        <cms:editable name="point_of_view"     label="Our Point of View"          group="group_body"    type="richtext" order="6" required="1" />
        <cms:editable name="button_technology" label="Button links to Technology" group="group_body"    type="text"     order="7" required="1" desc="This text is followed by  →" />
        <cms:editable name="button_solutions"  label="Button links to Solutions"  group="group_body"    type="text"     order="8" required="1" desc="This text is followed by  →" />
</cms:template>


<!-- Content Slider -->

<section id="content-carousel">
    <div id="carousel-main" class="carousel slide" data-inerval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-main" data-slide-to="1" class="active"><i class="icon-circle"></i></li>
            <li data-target="#carousel-main" data-slide-to="2"><i class="icon-circle"></i></li>
            <li data-target="#carousel-main" data-slide-to="3"><i class="icon-circle"></i></li>
            <li data-target="#carousel-main" data-slide-to="4"><i class="icon-circle"></i></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active" id="item-desk">
                <img src="assets/images/slider-desk.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span6 offset8">
                                <p class="slider-headline"><span><cms:show slider_desk /></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item-bedside">
                <img src="assets/images/slider-bed.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span12 offset2">
                                <p class="slider-headline"><span><cms:show slider_bed /></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item-cafe">
                <img src="assets/images/slider-cafe.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span9 offset3">
                                <p class="slider-headline"><span><cms:show slider_cafe /></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item-car">
                <img src="assets/images/slider-car.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span9 offset2">
                                <p class="slider-headline"><span><cms:show slider_car /></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#carousel-main" data-slide="prev"><i class="icon-chevron-left"></i></a>
        <a class="carousel-control right" href="#carousel-main" data-slide="next"><i class="icon-chevron-right"></i></a>
    </div>
</section> <!-- #content-carousel -->

<!-- End Content Slider -->

<section id="content-values">
    <div class="container">
        <div class="row">
            <div class="span12 offset2">

                <h1><cms:show intro_headline /></h1>
                <p class="icons">
                    <i class="icon-mobile-phone"></i>
                    <i class="icon-home"></i>
                    <i class="icon-dashboard"></i>
                </p>
                <cms:show body_content />
                <hr>

                <div class="row">
                    <div class="span6">
                        <h2><cms:show wwd_header /></h2>
                        <cms:show what_we_do />
                        <p><a class="btn btn-large btn-inverse btn-mojoblue btn-mojostyleflat" href="technology"><cms:show button_technology />&nbsp;→</a></p>
                    </div>
                    <div class="span6">
                        <h2><cms:show pov_header /></h2>
                        <cms:show point_of_view />
                        <p><a class="btn btn-large btn-inverse btn-mojoblue btn-mojostyleflat" href="solutions"><cms:show button_solutions />&nbsp;→</a></p>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section> <!-- #content-values -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include( $base_dir . '/includes/html-content-footer.php' );
include( $base_dir . '/includes/html-app-footer.php' );

// Required by Couch CMS, required at end of each page.
// COUCH::invoke();
?>