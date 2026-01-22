<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");
include "header.php" ?>

<!--Breadcrumb-->
<div class="page-header title-area style-1">
    <div class="header-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Careers</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <nav class="breadcrumb">
                        <a class="home" href="#!"><span>Home</span></a>
                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        <span>Careers</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb  end-->

<div class="container1">
    <div class="card" style="--clr: #009688">
        <div class="img-box">
            <img src="images/career/digital.webp">
        </div>
        <div class="content">
            <h2 class="head">Digital Marketing Team</h2>
            <button id="digital_form">Apply Now</button>


        </div>
    </div>
    <div class="card" style="--clr: #FF3E7F">
        <div class="img-box">
            <img src="images/career/businessdev.webp">
        </div>
        <div class="content">
            <h2 class="head">Business Development Team</h2>
            <button id="bus_form">Apply Now</button>

        </div>
    </div>
    <div class="card" style="--clr: #03A9F4">
        <div class="img-box">
            <img src="images/career/agrieng.jpg">
        </div>
        <div class="content">
            <h2 class="head">Agriculture Engineering Team</h2>
            <button id="agri_form">Apply Now</button>

        </div>
    </div>
    <div class="card" style="--clr: #009688">
        <div class="img-box">
            <img src="images/career/civil.webp">
        </div>
        <div class="content">
            <h2 class="head">Civil Engineering Team</h2>
            <button id="civil_form">Apply Now</button>


        </div>
    </div>
    <div class="card" style="--clr: #FF3E7F">
        <div class="img-box">
            <img src="images/career/ffff.webp">
        </div>
        <div class="content">
            <h2 class="head">Farmers Factory</h2>
            <button id="ff_form">Apply Now</button>



        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="images/career/driver.webp">
        </div>
        <div class="content">
            <h2 class="head">Logistics Manager</h2>
            <button id="driver">Apply Now</button>



        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="images/career/purchase.jpg">
        </div>
        <div class="content">
            <h2 class="head">QC Manager</h2>
            <button id="purchase">Apply Now</button>
        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="images/career/delivery.jpg">
        </div>
        <div class="content">
            <h2 class="head">Field Executive</h2>
            <button id="delivery">Apply Now</button>
        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="images/career/ware.webp">
        </div>
        <div class="content">
            <h2 class="head">Warehouse Incharge</h2>
            <button id="ware">Apply Now</button>
        </div>
    </div>

    <div class="card">
        <div class="img-box">
            <img src="images/career/farm.webp">
        </div>
        <div class="content">
            <h2 class="head">Farm Manager</h2>
            <button id="farm_man">Apply Now</button>
        </div>
    </div>
    <div class="card">
        <div class="img-box">
            <img src="images/career/live.webp">
        </div>
        <div class="content">
            <h2 class="head">Livestock Manager</h2>
            <button id="live">Apply Now</button>
        </div>
    </div>
</div>
<!-- The form modal or form section -->
<div class="row" id="form_div" style="display: none;">
    <div class="col-sm-3">
        <h1 hidden>HI</h1>
    </div>
    <div class="col-sm-6" style="margin-bottom: 50px;">
        <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm40">
            <h2>Join Our <span class="main-color">Team</span></h2>
        </div>
        <div class="gh-contact-form-1">

            <form id="career_form">

                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Manager">Manager</option>
                                    <option value="SEO Analyst">SEO Analyst</option>
                                    <option value="Content Creater">Content Creater</option>
                                    <option value="Executive">Executive</option>
                                    <option value="Video Editer">Video Editer</option>
                                    <option value="Accounts">Accounts</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Select Qualification</option>
                                    <option value="Any degree">Any degree</option>
                                    <input value size="40" placeholder="others..... " type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>
                        <!--<div class="col-md-6 col-sm-12 col-xs-12">-->
                        <!--    <p class="field">-->
                        <!--        <b>Resume:</b><input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx" />-->
                                
                        <!--    </p>-->
                        <!--</div>-->


                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="bd_form">
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
                                <select value name="Apply for jobs" id="">
                                    <option value="0">Apply for job role</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Business Development Head">Business Development Head</option>
                                    <option value="Executive">Executive</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="Qualification" id="">
                                    <option value="0">Languages</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Telugu">Telugu</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Kannada">Kannada</option>
                                    <option value="English">English</option>
                                    <option value="Malayalam">Malayalam</option>
                                    <option value="Others">Others</option>

                                    <input value size="40" placeholder="others....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="Qualification" id="">
                                    <option value="0">Qualification</option>
                                    <option value="B.Sc. in Agriculture">B.Sc. in Agriculture</option>
                                    <option value=" B.Tech. in Agriculture Engineering"> B.Tech. in Agriculture Engineering</option>
                                    <option value=" B.Sc. in Forestry"> B.Sc. in Forestry</option>
                                    <option value=" B.Sc. in Agronomy"> B.Sc. in Agronomy</option>
                                    <option value="B.Sc. in Horticulture">B.Sc. in Horticulture</option>
                                    <option value=" B.Sc. in Soil Science "> B.Sc. in Soil Science </option>
                                    <option value="Others">Others</option>





                                    <input value size="40" placeholder="others..... " type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc">

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
                    </div>
                </div>

            </form>


            <form id="agri_eng_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Farm Manager">Farm Manager</option>
                                    <option value="Resource and Development">Resource and Development</option>
                                    <option value="MTS">MTS</option>
                                    <option value="Buy Back">Buy Back</option>
                                    <option value="Data Analyst">Data Analyst</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Select Qualification</option>
                                    <option value="B.Sc. in Agriculture">B.Sc. in Agriculture</option>
                                    <option value=" B.Tech. in Agriculture Engineering"> B.Tech. in Agriculture Engineering</option>
                                    <option value=" B.Sc. in Forestry"> B.Sc. in Forestry</option>
                                    <option value=" B.Sc. in Agronomy"> B.Sc. in Agronomy</option>
                                    <option value="B.Sc. in Horticulture">B.Sc. in Horticulture</option>
                                    <option value=" B.Sc. in Soil Science "> B.Sc. in Soil Science </option>
                                    <option value="Others">Others</option>

                                    <input value size="40" placeholder="others..... " type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="civil_eng_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Civil Manager">Civil Manager</option>
                                    <option value="Civil Designing">Civil Designing</option>
                                    <option value="Others">Others</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Qualification</option>
                                    <option value="B.E Civil Engineering">B.E Civil Engineering</option>
                                    <option value="Others">Others</option>
                                    <input value size="40" placeholder="others....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="famers_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Business Development Executive">Business Development Executive</option>
                                    <option value="Field Executive">Field Executive</option>
                                    <option value="Driver">Driver</option>
                                    <option value="warehouse incharge">Warehouse incharge</option>
                                    <option value="packing">Packing</option>
                                    <option value="unskilled labour">Unskilled Labour</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Select Qualification</option>
                                    <option value="10TH"><sup>10</sup>th</option>
                                    <option value="12TH">12th</option>
                                    <option value="Any Degree">Any Degree</option>

                                    <option value="others">Others.....</option>
                                    <input value size="40" placeholder="others..... " type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" rows="10" placeholder="Your Message..." id="message"></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="driver_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Civil Manager">Driver</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Select Qualification</option>
                                    <option value="B.E Civil Engineering">No Qualification</option>
                                    <option value="Others">Others</option>
                                    <input value size="40" placeholder="others....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="purchase_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="purchase manager">Purchase Manager</option>
                                    <option value="purchase executive">Purchase Executive</option>

                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Select Qualification</option>
                                    <option value="any qualification">Any Qualification</option>
                                    <input value size="40" placeholder="Qualificaton....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="delivery_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="delivery person">Delivery Person</option>


                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="0">Select Qualification</option>
                                    <option value="10th">10TH</option>
                                    <option value="12th">12TH</option>
                                    <option value="any qualification">Any Qualification</option>
                                    <option value="Others">Others</option>
                                    <input value size="40" placeholder="others....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="ware_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Warehouse incharge">Warehouse Incharge</option>
                                    <option value="packing">Packing</option>
                                    <option value="Loadman">Loadman</option>

                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="">Select Qualification</option>
                                    <option value="any qualification">Any Qualification</option>
                                    <option value="Others">Others</option>
                                    <input value size="40" placeholder="others....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="farm_man_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Hydroponic Farm Manager">Hydroponic Farm Manager</option>
                                    <option value="Mushroom Farm Manager">Mushroom Farm Manager</option>
                                    <option value="Landscaping Farm Manager">Landscaping Farm Manager</option>
                                    <option value="Livestock Farm Manager">Livestock Farm Manager</option>
                                    <option value="Site Supervisor">Site Supervisor</option>
                                    <option value="Site Sarovar">Site Sarovar</option>
                                    <option value="hydroponic junior Manager">Hydroponic Junior Manager</option>

                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="">Select Qualification</option>
                                    <option value="any qualification">Any Degree</option>
                                    <option value="Others">Others</option>
                                    <input value size="40" placeholder="Degree....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <form id="livestock_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <select value name="Apply_for_jobs" id="Apply_for_jobs">
                                    <option value=" ">Apply for job role</option>
                                    <option value="Livestock Farm Manager">Livestock Farm Manager</option>
                                    <option value="Livestock Manager">Livestock Manager</option>
                                    <option value="Livestock Supervisor">Livestock Supervisor</option>


                                </select>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <select value name="qualification" id="qualification">
                                    <option value="">Select Qualification</option>
                                    <option value="Animal Husbandry">Animal Husbandry </option>
                                    <option value="Livestock Management Certificate">Livestock Management Certificate </option>
                                    <option value="Bachelor of Veterinary Science">Bachelor of Veterinary Science</option>
                                    <option value="Any Qualification">Any Qualification</option>

                                    <option value="Others">Others</option>
                                    <input value size="40" placeholder="others....." type="text" name="qualification">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Current CTC*" type="text" name="Currentctc" id="Currentctc">

                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Expected CTC*" type="text" name="Expectedctc" id="Expectedctc">

                            </p>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field single-field">
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
                            </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="field submit">
                                <input value="Submit" class="fh-btn" type="submit">
                            </p>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function showForm(formId) {
            // Hide all forms inside #form_div
            document.querySelectorAll("#form_div form").forEach(form => {
                form.style.display = "none";
            });

            // Show the specific form related to the clicked button
            let selectedForm = document.getElementById(formId);
            if (selectedForm) {
                selectedForm.style.display = "block";
                document.getElementById("form_div").style.display = "block"; // Show main div
            }
        }

        // Attach event listeners dynamically
        document.getElementById("digital_form").addEventListener("click", function() {
            showForm("career_form");
        });

        document.getElementById("bus_form").addEventListener("click", function() {
            showForm("bd_form");
        });

        document.getElementById("agri_form").addEventListener("click", function() {
            showForm("agri_eng_form");
        });

        document.getElementById("civil_form").addEventListener("click", function() {
            showForm("civil_eng_form");
        });

        document.getElementById("ff_form").addEventListener("click", function() {
            showForm("famers_form");
        });
        document.getElementById("driver").addEventListener("click", function() {
            showForm("driver_form");
        });
        document.getElementById("purchase").addEventListener("click", function() {
            showForm("purchase_form");
        });
        document.getElementById("delivery").addEventListener("click", function() {
            showForm("delivery_form");
        });
        document.getElementById("ware").addEventListener("click", function() {
            showForm("ware_form");
        });
        document.getElementById("farm_man").addEventListener("click", function() {
            showForm("farm_man_form");
        });
        document.getElementById("live").addEventListener("click", function() {
            showForm("livestock_form");
        });

    });
    document.addEventListener("DOMContentLoaded", function() {
        // Mapping buttons to their respective forms
        const buttonFormMap = {
            "digital_form": "career_form",
            "bus_form": "bd_form",
            "agri_form": "agri_eng_form",
            "civil_form": "civil_eng_form",
            "ff_form": "famers_form",
            "driver_form": "driver_form",
            "purchase_form": "purchase_form",
            "delivery_form": "delivery_form",
            "ware_form": "ware_form",
            "farm_man": "farm_man_form",
            "live": "livestock_form"

        };

        // Loop through buttons and add event listener
        Object.keys(buttonFormMap).forEach(buttonId => {
            const button = document.getElementById(buttonId);
            const form = document.getElementById(buttonFormMap[buttonId]);

            if (button && form) {
                button.addEventListener("click", function() {
                    form.style.display = "block"; // Make sure the form is visible
                    form.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                });
            }
        });
    });
</script>
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script>
  (function () {
    emailjs.init("xJZpHYXuN15dk5MnE");
  })();

  const handleFormSubmit = async (formId, requiresUpload = false) => {
    const form = document.getElementById(formId);
    form.addEventListener('submit', async function (event) {
      event.preventDefault();

      if (requiresUpload) {
        const resumeFile = document.getElementById('resume').files[0];
        if (!resumeFile) {
          alert("Please upload your resume file.");
          return;
        }

        const uploadData = new FormData();
        uploadData.append('resume', resumeFile);

        try {
          const uploadResponse = await fetch('upload_resume.php', {
            method: 'POST',
            body: uploadData
          });
          const result = await uploadResponse.json();
          console.log("Upload result:", result);

          if (!result.success) {
            alert("File upload failed: " + result.message);
            return;
          }

          document.getElementById('resume_link').value = result.file_url;

        } catch (err) {
          alert("An error occurred while uploading the resume.");
          console.error(err);
          return;
        }
      }

      // Send the form using EmailJS
      emailjs.sendForm('service_nba8i2q', 'template_jttvf8d', form)
        .then(() => {
          alert("Application sent successfully!");
          form.reset();
        }, (error) => {
          alert("Failed to send application.");
          console.error("EmailJS error:", error);
        });
    });
  };

  // Register all forms
  handleFormSubmit('career_form', true); // Requires resume upload
  handleFormSubmit('bd_form');
  handleFormSubmit('agri_eng_form');
  handleFormSubmit('civil_eng_form');
  handleFormSubmit('famers_form');
  handleFormSubmit('driver_form');
  handleFormSubmit('purchase_form');
  handleFormSubmit('delivery_form');
  handleFormSubmit('ware_form');
  handleFormSubmit('farm_man_form');
  handleFormSubmit('livestock_form');

</script>



<div class="row" id="form_div" style="display: none;">
    <div class="col-sm-3">
        <h1 hidden>HI</h1>
    </div>
    <div class="col-sm-6">
        <div class="fh-section-title clearfix  text-left style-2 version-dark margbtm40">
            <h2>Request for <span class="main-color">Quote</span></h2>
        </div>
        <div class="gh-contact-form-1">
            <form id="carrer_form">
                <div class="fh-form fh-form-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Your Name*" type="text" name="username" id="username">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="field">
                                <input value size="40" placeholder="Phone Number*" type="text" name="mobilnumber" id="mobilnumber">
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="field">
                                <input value size="40" placeholder="Email id*" type="email" name="emailid" id="emailid">
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
                                <textarea cols="40" name="message" id="message" rows="10" placeholder="Your Message..."></textarea>
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









<!-- The modal -->
<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- <h4 class="modal-title" id="modalLabel">Modal Title</h4> -->
                <div class="fh-section-title clearfix  text-left style-2 version-dark quote">
                    <h2>Enquiry <span class="main-color">Now</span></h2>
                </div>
            </div>
            <div class="modal-body">

                <div class="gh-contact-form-1">
                    <form>
                        <div class="fh-form fh-form-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input value size="40" placeholder="Your Name*" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input value size="40" placeholder="Phone Number*" type="text">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <input value size="40" placeholder="Email id*" type="email">
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="field">
                                        <select value name="projects" id="">
                                            <option value="0">Products</option>
                                            <option value="1">POLYETHYLENE SHEET</option>
                                            <option value="2">ZIG ZAG WIRES</option>
                                            <option value="2">INSECT NET</option>
                                            <option value="2">SHADE NET</option>
                                            <option value="2">GUTTER</option>
                                            <option value="2">UNIVERSAL JOINT</option>
                                            <option value="2">ALUMINIUM PROFILE</option>
                                            <option value="2">SCREW</option>
                                            <option value="2">NUTS & BOLTS</option>
                                            <option value="2">CLAMBS</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="field single-field">
                                        <textarea cols="40" rows="10" placeholder="Your Message..."></textarea>
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
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<?php include "footer.php" ?>