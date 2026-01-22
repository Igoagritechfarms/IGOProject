<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

include "header.php"
?>
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <style>
        .hero-slider {
            width: 100%;
            display: flex;
            position: relative;
        }

        /* Make images responsive */
        .hero-slider .slide-inner img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
        }

        /* Swiper buttons style */
        .swiper-button-prev,
        .swiper-button-next {
            background-color: black;
            width: 60px;
            height: 60px;
            border-radius: 10px;
            color: #fff;
        }

        .swiper-button-prev:after,
        .swiper-button-next:after {
            font-size: 18px;
            color: #fff;
        }

        /* Hide buttons only on mobile */
        @media (max-width: 767px) {

            .swiper-button-prev,
            .swiper-button-next {
                display: none;
            }
        }
    </style>
</head>

<body>
    <section class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image">
                        <img src="images/w1.jpg" alt="Slide 1">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image">
                        <img src="images/w2.jpg" alt="Slide 2">
                    </div>
                </div>
                <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image">
                       <img src="images/w3.jpeg" alt="Slide 3">
                   </div>
                </div>


            </div>

            <!-- Swiper controls -->
            <div class="swiper-button-prev" style="color: #fff;"></div>
            <div class="swiper-button-next" id=swiper-next></div>
            <div class="swiper-pagination" style="color: #fff;"></div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</body>
<!--Main Slider  end-->

<!-- Welcome sec -->
<div class="welcomesec secpadd">
    <div class="container">
        <div class="fh-section-title clearfix  text-center style-1 version-dark has-icon">
            <h2>WHY CHOOSE <span class="main-color"><h1>IGO Agritech Farms</h1></span></h2>
            <span class="fh-icon"><i class="flaticon-nature-3"></i></span>
        </div>
        <p class="haeadingpara text-center">At IGO Agritech Farms, we offer a range of innovative and sustainable agricultural solutions, including IGO polyhouse projects, hydroponics projects, open cultivation, floriculture, Goat farming, Aquaculture, vertical farming, gardening, and rooftop gardens. Our team of experts has decades of experience and is committed to using only high-quality products and materials. We provide cost-effective solutions that maximize your return on investment and offer exceptional customer service and support. Choose IGO Agritech Farms for your next agricultural project and take your operations to the next level.</p>

        <!-- <div class="fh-service  style-1">
                    <div class="service-list row">
                        <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                            <div class="service-content">
                                <div class="entry-thumbnail">
                                    <a href="#!"></a>
                                    <img src="images/services/service1.jpg" alt="image" width="370" height="210">
                                </div>
                                <div class="summary">
                                    <h2 class="entry-title"><a href="#!">Spring &amp; Fall Cleanup</a></h2>
                                    <p>Our fall clean-up service is the process of removing all leaves, branches of the summer season</p>
                                    <a href="#!" class="fh-btn-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                            <div class="service-content">
                                <div class="entry-thumbnail">
                                    <a href="#!"></a>
                                    <img src="images/services/service2.jpg" alt="image" width="370" height="210">
                                </div>
                                <div class="summary">
                                    <h2 class="entry-title"><a href="#!">Snow & Ice Removal</a></h2>
                                    <p>Snow and Ice removal services can be customized to the best possible solution in the huge area</p>
                                    <a href="#!" class="fh-btn-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                            <div class="service-content">
                                <div class="entry-thumbnail">
                                    <a href="#!"></a>
                                    <img src="images/services/service3.jpg" alt="image" width="370" height="210">
                                </div>
                                <div class="summary">
                                    <h2 class="entry-title"><a href="#!">Lawn & Garden Care</a></h2>
                                    <p>Complete range of landscaping services all designed to enhance the beauty of your home and property</p>
                                    <a href="#!" class="fh-btn-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                            <div class="service-content">
                                <div class="entry-thumbnail">
                                    <a href="#!"></a>
                                    <img src="images/services/service4.jpg" alt="image" width="370" height="210">
                                </div>
                                <div class="summary">
                                    <h2 class="entry-title"><a href="#!">Irrigation & Drainage</a></h2>
                                    <p>Watering your lawn and is the key to preserving its lushness and beauty the experts carefully design</p>
                                    <a href="#!" class="fh-btn-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                            <div class="service-content">
                                <div class="entry-thumbnail">
                                    <a href="#!"></a>
                                    <img src="images/services/service5.jpg" alt="image" width="370" height="210">
                                </div>
                                <div class="summary">
                                    <h2 class="entry-title"><a href="#!">Stone and Hardscaping</a></h2>
                                    <p>Steady rains the leaves are dropping and each week our and hauling them off the properties</p>
                                    <a href="#!" class="fh-btn-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-service  col-xs-12 col-sm-6 col-md-4">
                            <div class="service-content">
                                <div class="entry-thumbnail">
                                    <a href="#!"></a>
                                    <img src="images/services/service6.jpg" alt="image" width="370" height="210">
                                </div>
                                <div class="summary">
                                    <h2 class="entry-title"><a href="#!">Planting and Removal</a></h2>
                                    <p>Environmental problems result when exotic plants are placed in the landscape</p>
                                    <a href="#!" class="fh-btn-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    </div>
</div>
<!-- services sec  end-->

<div class="aboutsec3 secpadd1">
    <div class="container">
        <div class="fh-section-title clearfix  text-left style-1 version-dark">
            <h2>
                WHAT IGO <span class="main-color">PROVIDES?</span></h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="about3left">
                    <p class="mdlgrnpara">
                        India's Leading Agri Engineering And Agri
                        Consulting Brand.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p><span class="fa fa-leaf"></span>&nbsp;
                                Polyhouse Projects.</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Hydroponic Projects.</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Open Cultivation Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Roof Top Gardening Services</p>
                            <!-- <p><span class="fa fa-leaf"></span>&nbsp;	Agri Input Products</p> -->
                            <p><span class="fa fa-leaf"></span>&nbsp; AMC Service</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Joint Venture Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Nursery Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Vertical Farming Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Floriculture Projects</p>
                        </div>
                        <div class="col-sm-6">
                            <p><span class="fa fa-leaf"></span>&nbsp; Goat Farming Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Aquaculture Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Mushroom Cultivation Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Solar Dryer Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Pondliner Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Gardening Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Landscaping Projects</p>
                            <p><span class="fa fa-leaf"></span>&nbsp; Buyback Services</p>
                        </div>
                    </div>
                    <!-- <div class="fh-phone paddtop20 clearfix ">
                                <a href="#!" target="_self" class="fh-btn">More About Us</a>
                                <div class="hotline"><span class="fh-icon"><i class="flaticon-technology-1"></i></span>+44 567 89999</div>
                            </div> -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="about4rgt">
                    <img src="images/about.webp" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our-Features-1  sec-->
<!-- <div class="ourfeatures1 secpadd">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="fh-icon-box  style-1">
                                <h4><a href="#!" target=" _blank">Honest and
                                        Dependable</a></h4>
                                <a href="#!" target=" _blank"
                                    class="fh-icon"><span><i
                                            class="fa fa-pagelines"></i></span></a>
                                <div class="desc">
                                    <p>Honesty is the only policy and we strive
                                        to complete all projects with integrity,
                                        not just with our clients.</p>
                                </div>
                            </div>
                            <div class="fh-icon-box  style-1">
                                <h4><a href="#!" target=" _blank">30 Years of
                                        Expeirence </a></h4>
                                <a href="#!" target=" _blank"
                                    class="fh-icon"><span><i
                                            class="fa fa-leaf"></i></span></a>
                                <div class="desc">
                                    <p>Steady rains the leaves are dropping and
                                        each week our and hauling them off the
                                        properties..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="fh-icon-box  style-1">
                                <h4><a href="#!" target=" _blank">Landspacing
                                        Specialists</a></h4>
                                <a href="#!" target=" _blank"
                                    class="fh-icon"><span><i
                                            class="fa fa-user-secret"></i></span></a>
                                <div class="desc">
                                    <p>We have a range of water specialists who
                                        can help you along the way you want a
                                        massive fountain.</p>
                                </div>
                            </div>
                            <div class="fh-icon-box  style-1">
                                <h4><a href="#!" target=" _blank">Award Wining
                                        Company </a></h4>
                                <a href="#!" target=" _blank"
                                    class="fh-icon"><span><i
                                            class="fa fa-shield"></i></span></a>
                                <div class="desc">
                                    <p>Steady rains the leaves are dropping and
                                        each week our and hauling them off the
                                        properties..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="fh-icon-box  style-1">
                                <h4><a href="#!" target=" _blank">Licensed,
                                        Bonded, Insured</a></h4>
                                <a href="#!" target=" _blank"
                                    class="fh-icon"><span><i
                                            class="fa fa-certificate"></i></span></a>
                                <div class="desc">
                                    <p>Steady rains the leaves are dropping and
                                        each week our and hauling them off the
                                        properties..</p>
                                </div>
                            </div>
                            <div class="fh-icon-box  style-1">
                                <h4><a href="#!" target=" _blank">1000+ Sucessful
                                        Projects</a></h4>
                                <a href="#!" target=" _blank"
                                    class="fh-icon"><span><i
                                            class="fa fa-tree"></i></span></a>
                                <div class="desc">
                                    <p>Steady rains the leaves are dropping and
                                        each week our and hauling them off the
                                        properties..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
<!-- ourfeatures1  end-->
<div class="achivement1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="fh-counter  style-1">
                    <span class="fh-icon"><i class="flaticon-nature-1"></i></span>
                    <div class="counter">
                        <div class="value">10</div>
                        <span>+</span>
                    </div>
                    <h4>Year Of Experience</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="fh-counter  style-1">
                    <span class="fh-icon"><i class="flaticon-nature-2"></i></span>
                    <div class="counter">
                        <div class="value">6000</div>
                        <span>+</span>
                    </div>
                    <h4>Successfull Projects</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="fh-counter  style-1">
                    <span class="fh-icon"><i class="flaticon-people"></i></span>
                    <div class="counter">
                        <div class="value">1600</div>
                        <span>+</span>
                    </div>
                    <h4>Team Members</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="fh-counter  style-1">
                    <span class="fh-icon"><i class="flaticon-medal"></i></span>
                    <div class="counter">
                        <div class="value">75</div>
                        <span>+</span>
                    </div>
                    <h4>Winning Awards</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Welcome sec -->
<!-- ✅ Include Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="welcomesec secpadd bg-gray">
    <div class="container">
        <div class="fh-section-title clearfix text-center style-1 version-dark has-icon">
            <h2>OUR <span class="main-color">Projects</span></h2>
            <span class="fh-icon"><i class="flaticon-nature-3"></i></span>
        </div>

        <!-- ✅ Swiper Container -->
        <div class="swiper project-slider">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="polyhouseproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/Polyhouse.jpeg" alt="Polyhouse Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="polyhouseproject.php">Polyhouse Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="hydroponicproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/hydro1.jpg" alt="Hydroponic Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="hydroponicproject.php">Hydroponic Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="jointventureproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/jointventure.png" alt="Joint Venture Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="jointventureproject.php">Joint Venture Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="opencultivationproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/opencultivation.jpg" alt="Open Cultivation Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="opencultivationproject.php">Open Cultivation Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="verticalfarmingproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/vertical.jpeg" alt="Vertical Farming Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="verticalfarmingproject.php">Vertical Farming Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="goatfarmingproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/goat.jpeg" alt="Goat Farming Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="goatfarmingproject.php">Goat Farming Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-content">
                        <a href="microgreensproject.php">
                            <div class="entry-thumbnail">
                                <img src="images/micro-3.png" alt="microgreens Projects">
                            </div>
                        </a>
                        <div class="summary">
                            <h2 class="entry-title">
                                <a href="microgreensproject.php">Microgreens Projects</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ✅ Slider Pagination & Navigation Buttons -->
            <div class="swiper-pagination"></div>

            <!-- Left & Right Buttons -->
            <div class="swiper-button-prev custom-prev"></div>
            <div class="swiper-button-next custom-next"></div>
        </div>
    </div>
</div>

<!-- ✅ Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- ✅ Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.project-slider', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    });
</script>

<!-- ✅ Custom CSS -->
<style>
    .project-slider {
        position: relative;
        padding: 30px 0;
    }

    .project-slider .service-content {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
    }

    .project-slider .entry-thumbnail img {
        width: 100%;
        height: 210px;
        object-fit: cover;
        border-bottom: 3px solid #4CAF50;
        transition: transform 0.3s ease;
    }

    .project-slider .entry-thumbnail img:hover {
        transform: scale(1.05);
    }

    /* ✅ Button Styles */
    .swiper-button-next,
    .swiper-button-prev {
        color: #fff;
        background: #4CAF50;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        top: 45%;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: #2e7d32;
    }

    /* ✅ Custom positioning */
    .custom-prev {
        left: -60px;
        /* moves button to the left outside */
    }

    .custom-next {
        right: -60px;
        /* moves button to the right outside */
    }

    /* ✅ Pagination dots */
    .swiper-pagination-bullet {
        background-color: #ccc;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #4CAF50;
    }

    /* ✅ Responsive */
    @media (max-width: 992px) {
        .custom-prev {
            left: 10px;
        }

        .custom-next {
            right: 10px;
        }
    }

    @media (max-width: 768px) {

        .swiper-button-next,
        .swiper-button-prev {
            display: none;
        }
    }
</style>
<!-- services sec  end-->

<!-- Projects -->
<!--<div class="projects1 secpadd">-->
<!--    <div class="container">-->
<!--        <div class="fh-section-title clearfix  text-left style-1 version-light headh2">-->
<!--            <div class="container">-->
<!--                <h2>Our <span class="main-color">Services</span></h2>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="fh-project  style-1">-->
<!--            <div class="owl-carousel pro-slide">-->
               
<!--                            <div class="item item-project project_category-snow-removal">-->
<!--                    <div class="project-inner">-->
<!--                        <div class="project-thumbnail">-->
<!--                            <a href="#!" class="pro-link"></a><img src="images/amc.jpg" alt="images" />-->
<!--                        </div>-->
<!--                        <div class="project-summary">-->
<!--                            <h2 class="project-title"><a href="#!">AMC</a></h2>-->
<!--                            <div class="project-cat">-->
<!--                                <a href="#!" class="cat">View More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="item item-project project_category-planting">-->
<!--                    <div class="project-inner">-->
<!--                        <div class="project-thumbnail">-->
<!--                            <a href="#!" class="pro-link"></a><img src="images/gardening.jpg" alt="images" />-->
<!--                        </div>-->
<!--                        <div class="project-summary">-->
<!--                            <h2 class="project-title"><a href="#!">GARDENING</a></h2>-->
<!--                            <div class="project-cat">-->
<!--                                <a href="#!" class="cat">View More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="item item-project project_category-planting">-->
<!--                    <div class="project-inner">-->
<!--                        <div class="project-thumbnail">-->
<!--                            <a href="images/se.jpeg" class="pro-link"></a><img src="images/se.jpeg" alt="images" />-->
<!--                        </div>-->
<!--                        <div class="project-summary">-->
<!--                            <h2 class="project-title"><a href="#!">BUY BACK</a></h2>-->
<!--                            <div class="project-cat">-->
<!--                                <a href="#!" class="cat">View More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- Projects end -->

<div class="questionrequest secpadd">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm40">
                    <h2>Frequently Asked <span class="main-color">Questions</span></h2>
                </div>
                <div class="faqbox">
                    <div class="fp-accordion  style-1 active">
                        <div class="accordion-title">
                            <span class="icons">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </span>
                            <h2>What is open cultivation in agriculture?</h2>
                        </div>
                        <div class="toggle-content">
                            <p>Open cultivation refers to the traditional method of growing crops in open fields, where plants are directly sown in soil or transplanted, and rely on natural environmental conditions such as sunlight, rain, and wind for their growth and development.</p>
                        </div>
                    </div>
                    <div class="fp-accordion  style-1">
                        <div class="accordion-title">
                            <span class="icons">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </span>
                            <h2>What are the advantages of open cultivation?</h2>
                        </div>
                        <div class="toggle-content">
                            <p>Some advantages of open cultivation include:</p>
                            <p>Lower initial setup costs compared to controlled environment methods like hydroponics or greenhouse cultivation.</p>
                            <p>Reliance on natural sunlight and rain, reducing energy costs.</p>
                            <p>Large-scale production potential, suitable for growing crops that require extensive space, such as grains, oilseeds, and fiber crops.</p>
                            <p>Opportunity for natural pest control and pollination through ecosystem services provided by beneficial insects and wildlife.</p>
                        </div>
                    </div>
                    <div class="fp-accordion  style-1">
                        <div class="accordion-title">
                            <span class="icons">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </span>
                            <h2>How is irrigation managed in IGO Agritech Farms' open cultivation projects?</h2>
                        </div>
                        <div class="toggle-content">
                            <p> IGO Agritech Farms may use different irrigation methods in their open cultivation projects, such as drip irrigation, sprinkler irrigation, or furrow irrigation, depending on factors such as crop type, soil type, and water availability. Irrigation scheduling, monitoring, and water conservation practices may be implemented to ensure efficient water use and optimize crop growth.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm40">
                    <h2>Request for <span class="main-color">Quote</span></h2>
                </div>
                <div class="gh-contact-form-1">
                    <form action="sendmail.php" method="post">
                        <div class="fh-form fh-form-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input value size="40" placeholder="Your Name*" type="text" name="username">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <p class="field">
                                        <input value size="40" placeholder="Email id*" type="email" name="emailid">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <p class="field">
                                        <select value name="projects" id="">
                                            <option value="0">Projects</option>
                                            <option value="Polyhouse Projects">Polyhouse Projects</option>
                                            <option value="Hydroponic Projects">Hydroponic Projects</option>
                                            <option value="Joint Venture Projects">Joint Venture Projects</option>
                                            <option value="Vertical Farming Projects">Vertical Farming Projects</option>
                                            <option value="Open Cultivation Projects">Open Cultivation Projects</option>
                                            <option value="Rooftop Projects">Rooftop Projects</option>
                                            <option value="Floriculture Projects">Floriculture Projects</option>
                                            <option value="Goat Farming Projects">Goat Farming Projects</option>
                                            <option value="Horticulture Projects">Horticulture Projects</option>
                                            <option value="Landscaping Projects">Landscaping Projects</option>
                                            <option value="Mushroom Cultivation Projects">Mushroom Cultivation Projects</option>
                                            <option value="Pondliner Projects">Pondliner Projects</option>
                                            <option value="Solar Dryer Projects">Solar Dryer Projects</option>
                                            <option value="Nursery Projects">Nursery Projects</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <select value name="product" id="">
                                            <option value="0">Products</option>
                                            <option value="Polyhouse Products">Polyhouse Products</option>
                                            <option value="Hydroponic Products">Hydroponic Products</option>
                                        </select>
                                        <!-- <input value size="40"
                                                        placeholder="Subject"
                                                        type="text"> -->
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <select value name="Services" id="">
                                            <option value="0">Services</option>
                                            <option value="AMC">AMC</option>
                                            <option value="Gardening">Gardening</option>
                                            <option value="Buy Back">Buy Back</option>
                                        </select>
                                        <!-- <input value size="40"
                                                        placeholder="Subject"
                                                        type="text"> -->
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="field single-field">
                                        <textarea cols="40" name="message" rows="10" placeholder="Your Message..."></textarea>
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="field submit">
                                        <input value="Submit" class="fh-btn" type="submit">
                                    </p>
                                </div>
                                <!-- <div
                                                class="col-md-8 col-sm-12 col-xs-12 note"><span
                                                    class="main-color">Note:</span>
                                                We dont’t do spam and Your mail id
                                                very confidential.</div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- About Company end -->

<!-- Testimonial -->
<!-- <div class="testimonial-1">
    <div class="fh-testimonials-carousel  style-1">
        <div class="container">
            <h3 class="feedback-title"><span class="fh-icon icon-1"><i class="flaticon-left-quote-sketch"></i></span>Customer
                Feedback</h3>
            <div class="testi-list">
                <div class="testi-item">
                    <div class="testi-content">
                        <div class="testi-des"><span class="fh-icon icon-1"><i class="flaticon-left-quote-sketch"></i></span>
                            "The team at IGO Agritech Farms provided me with exceptional support throughout the entire process, from planning to execution. The Polyhouse technology used by IGO Agritech Farms is truly revolutionary - it has allowed me to grow fresh, high-quality produce all year round, regardless of the weather conditions outside. The ROI on my investment has been impressive, and I'm looking forward to expanding my Polyhouse project with the help of IGO Agritech Farms in the future. I highly recommend IGO Agritech Farms to anyone looking to get involved in sustainable agriculture and farming!"</div>
                        <div class="info clearfix">

                            <h4 class="testi-name"> Balashanthini B</h4>
                            <div class="testi-star">
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="testi-content">
                        <div class="testi-des"><span class="fh-icon icon-1"><i class="flaticon-left-quote-sketch"></i></span>
                            "I recently started my hydroponics project with IGO Agritech Farms, and I'm beyond impressed with the results. The team provided excellent support and guidance throughout the entire process, and their expertise in hydroponics was evident in the quality of the plants I grew. The yield was exceptional, and the produce was incredibly fresh and flavorful. I highly recommend IGO Agritech Farms to anyone looking to start a hydroponics project. Their dedication to sustainable agriculture and commitment to customer satisfaction truly sets them apart."</div>
                        <div class="info clearfix">
                            <h4 class="testi-name">Pthipati Joshna</h4>
                            <div class="testi-star">
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="testi-content">
                        <div class="testi-des"><span class="fh-icon icon-1"><i class="flaticon-left-quote-sketch"></i></span>
                            <h2 class="testi-feedback">Great !
                                Garden Designs and
                                Maintenance</h2>
                            “I recently had the opportunity to learn about the Open Cultivation project by IGO Agritech Farms, and I must say, I'm impressed! This innovative project has the potential to transform agriculture as we know it. By utilizing cutting-edge technology and sustainable farming practices, IGO Agritech Farms is creating a more efficient and eco-friendly way of farming. As someone who cares deeply about the environment, I'm thrilled to see companies like IGO Agritech Farms taking steps to reduce their carbon footprint and make a positive impact on our planet. I highly recommend supporting this project and helping to create a more sustainable future for us all”
                        </div>
                        <div class="info clearfix">

                            <h4 class="testi-name">Astley
                                Jenifer</h4>
                            <div class="testi-star">
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                                <i class="fa fa-star fa-md"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial end -->
<?php include 'subscribe.php' ?>


<?php include "footer.php" ?>