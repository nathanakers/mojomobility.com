<?php
// Include Functions & Headers
include('includes/functions.php');
include('includes/html-app-header.php');
include('includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<!-- Content Slider!! -->

<!-- Hello Computing For All Level 2! -->

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
                <img src="/assets/images/slider-desk.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span6 offset8">
                                <p class="slider-headline">
                                    <span>Mojo’s position free multi device charging enables intuitive, hassle-free charging in any environment</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item-bedside">
                <img src="/assets/images/slider-bed.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span12 offset2">
                                <p class="slider-headline">
                                    <span>Mojo’s technology enables wireless charging of multiple products simultaneously</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item-cafe">
                <img src="/assets/images/slider-cafe.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span9 offset3">
                                <p class="slider-headline">
                                    <span>Mojo’s position-free wireless charging, and ability to charge through surfaces, allows easy integration into public places</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" id="item-car">
                <img src="/assets/images/slider-car.jpg" />
                <div class="over-text">
                    <div class="container">
                        <div class="row">
                            <div class="span9 offset2">
                                <p class="slider-headline">
                                    <span>Mojo technology enables the integration of easy to use, distraction-free wireless charging solutions for automotive applications</span>
                                </p>
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

                <h1>Mojo Mobility partners with OEMs to design and develop unique, cutting-edge products that incorporate Mojo’s patented wireless charging technologies into a variety of different industries and applications—from mobile devices, to industrial and medical devices, to electric vehicles.</h1>
                <p class="icons">
                    <i class="icon-mobile-phone"></i>
                    <i class="icon-home"></i>
                    <i class="icon-dashboard"></i>
                </p>
                <p>Established in 2005, Mojo Mobility has been at the forefront of the development of wireless power technologies that allow consumers to conveniently charge and power their devices. Mojo Mobility has partnered with a number of OEMs to create unique, advanced solutions for wireless charging for many different products. Mojo’s unique proprietary Near Field Power® technology allows position-free charging and powering of multiple devices simultaneously. Near Field Power® places Mojo Mobility several generations ahead of their competitors by providing unsurpassed performance, cost, efficient power transfer and a simplified user experience.</p>
                <p>Mojo has also partnered with OEMs to enhance the automotive experience in several ways. Mojo incorporates its wireless charging technology into various surfaces in the car, creating a safer and more convenient alternative to cord-charging. Mojo Mobility is also transforming the electric vehicle consumer experience by enabling high-power, efficient wireless charging of the vehicle. Mojo is eliminating the hassle of plug-in charging by enabling a user-friendly, ubiquitous method of charging electric vehicles wirelessly.</p>
                <hr>

                <div class="row">
                    <div class="span6">
                        <h2>What We Do</h2>
                        <p>Mojo Mobility delivers position-free wireless charging technology to OEMs, which enables multiple devices to charge simultaneously without the restriction of exact positioning of the transmitter and receiver. Traditional wireless charging has been limited by the necessity of precise alignment of the transmitter and receiver. We partner with OEMs worldwide to provide cutting-edge, production-ready wireless charging solutions. These solutions are industry proven and provide tremendous advantages over existing wireless charging technology. Our solutions are user-friendly, highly efficient, extremely safe, and meet all regulatory guidelines.</p>
                        <p>
                            <a class="btn btn-large btn-inverse btn-mojoblue btn-mojostyleflat" href="/technology">
                                Explore Our Technology&nbsp;→
                            </a>
                        </p>
                    </div>
                    <div class="span6">
                        <h2>OUR POINT OF VIEW</h2>
                        <p>We believe wireless charging is the future of a world that is becoming truly mobile. No longer will consumers be restricted by an array of cords and chargers to charge their mobile devices or by the cord of an electric vehicle charging station. Our technology solutions allow designers of powered products to re-think and re-shape their design ideas to free their customers of the constraints of wired charging.</p>
                        <p>
                            <a class="btn btn-large btn-inverse btn-mojoblue btn-mojostyleflat" href="/solutions">
                                View Our Solutions&nbsp;→
                            </a>
                        </p>
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
include('includes/html-content-footer.php');
include('includes/html-app-footer.php');
?>