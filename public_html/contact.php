<?php include "header.php" ?>

<!--Breadcrumb-->
<div class="page-header title-area style-1">
    <div class="header-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="breadcrumb">
                        <a class="home" href="#"><span>Home</span></a>
                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        <span>Contact</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb  end-->

<!--page-content-->
<div class="pagewrapper">
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm30">
                        <h2>Contact <span class="main-color">Details</span></h2>
                    </div>
                    <div class="fh-contact-box  style-2 margbtm40">
                        <div class="info">
                            <div class="info-item"><span class="fh-icon"><i class="flaticon-pin"></i></span>
                                <div class="details">No 17 ,
Kovalan street, 
2nd main road,
Uthandi  kanathur, Chennai 600119.</div>
                            </div>
                            <div class="info-item"><span class="fh-icon"><i class="flaticon-web"></i></span>
                                <div class="details">
                                    bankingbackend.indiagreen@gmail.com</div>
                            </div>
                            <div class="info-item"><span class="fh-icon"><i class="flaticon-phone-set"></i></span>
                                <div class="details">7397789803, <br>
                                    7397789804, <br>
                                    7397789805.</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm30">
                                <h2>Working <span class="main-color">Hours</span></h2>
                            </div>
                            <ul class="opening-hours vc_opening-hours">
                                <li>Monday <span class="hour">9:30 am – 6.00 pm</span></li>
                                <li>Tuesday<span class="hour">9:30 am – 6.00 pm</span></li>
                                <li>Wednesday <span class="hour">9:30 am – 6.00 pm</span></li>
                                <li>Thursday<span class="hour">9:30 am – 6.00 pm</span></li>
                                <li>Friday <span class="hour">9:30 am – 6.00 pm</span></li>
                                <li>Saturday <span class="hour">9:30 am – 6.00 pm</span></li>
                                <li>Sunday <span class="hour main-color">Closed</span></li>
                            </ul> -->
                </div>

                <div class="col-sm-8">
                    <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm30">
                        <h2>Send Us a <span class="main-color">Message</span></h2>
                    </div>
                    <!-- <p class="margbtm30">We recently helped a from small to large scale of landscaping service so if you need and landscaping service or any suggession please ask our experts they will guide you as soon as possible.</p> -->
                    <form action="sendmail.php" method="post">
                        <div class="fh-form fh-form-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input placeholder="Your Name*" name="username" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input placeholder="Phone Number*" name="mobilnumber" type="text">
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input placeholder="Email id*" name="emailid" type="email">
                                    </p>
                                    <!--<p class="field">-->
                                    <!--    <input placeholder="Subject" name="subject" type="text">-->
                                    <!--</p>-->
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                                        <textarea placeholder="Your Message..." name="message"></textarea>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <p class="field submit">
                                        <input value="Submit" name="submit" class="fh-btn"  type="submit">
                                    </p>
                                </div>
                                <!-- <div class="col-md-8 col-sm-12 col-xs-12 note"><span class="main-color">Note:</span> We dont’t do spam and Your mail id very confidential.</div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--page-content end-->

<!--google map-->
<div class="google-map-area1">
    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.1704014997497!2d80.2114293!3d12.9644176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dc0a416aaab%3A0xc9fec0ce95a624d5!2sIGO%20Agri%20TechFarms!5e0!3m2!1sen!2sin!4v1648317687002!5m2!1sen!2sin" allowfullscreen></iframe>

    <!--      <div class="google-map" id="contact-google-map" data-map-lat="12.96514" data-map-lng="80.21371" data-icon-path="images/icon/maker1.png" data-map-title="Chester" data-map-zoom="13" data-markers='{-->
    <!--	"marker-1": [51.545527, -0.133272, "<h4>Garden Hub</h4><p>Camden Borough </p>"]-->
    <!--}' style="height:450px;width:100%;">-->
    <!--      </div>-->
</div>
<!--google map end-->

<?php include "footer.php" ?>