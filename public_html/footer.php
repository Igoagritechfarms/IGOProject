<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Floating WhatsApp Button */
        .chat-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 28px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            transition: all 0.3s ease;
        }

        .chat-btn:hover {
            transform: scale(1.1);
            background-color: #20b957;
        }

        /* Chat popup box */
        .chat-popup {
            position: fixed;
            bottom: 80px;
            right: 25px;
            width: 320px;
            max-width: 90%;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            display: none;
            flex-direction: column;
            overflow: hidden;
            z-index: 9998;
            animation: slideUp 0.4s ease;
        }

        /* Header */
        .chat-header {
            background-color: #25D366;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header h4 {
            font-size: 16px;
            margin: 0;
        }

        .close-btn {
            background: white;
            color: #25D366;
            border: none;
            font-size: 20px;
            border-radius: 50%;
            cursor: pointer;
            width: 28px;
            height: 28px;
            text-align: center;
            line-height: 25px;
            transition: 0.3s;
        }

        .close-btn:hover {
            background-color: #e5f9ee;
        }

        /* Body */
        .chat-body {
            padding: 15px;
            font-size: 14px;
            color: #333;
            text-align: center;
        }

        .chat-msg {
            background: #f1f1f1;
            padding: 10px 15px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .chat-link {
            display: inline-block;
            background-color: #25D366;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .chat-link:hover {
            background-color: #20b957;
        }

        /* Typing animation */
        .typing-text {
            font-style: italic;
            color: #999;
            margin-bottom: 10px;
            animation: blink 1.2s infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0.4;
            }
        }

        /* Slide animation */
        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Mobile responsive */
        @media (max-width: 600px) {
            .chat-popup {
                bottom: 70px;
                right: 10px;
                width: 90%;
            }

            .chat-btn {
                width: 55px;
                height: 55px;
                font-size: 26px;
                bottom: 15px;
                right: 15px;
            }

            .chat-header h4 {
                font-size: 14px;
            }
        }
    </style>
</head><!--footer sec-->
 <!--footer sec-->
 <div id="footer-widgets" class="footer-widgets widgets-area">
     <div class="container">
         <div class="row">

             <div class="col-xs-12 col-sm-6 col-md-4">
                 <div class="widget footermission">
                     <p>
                         <a class="footer-logo" href="index.php"><img src="images/logo.png" alt="Footer Logo"></a>
                     </p>
                     <!-- <h5><b>Our Vision & Mission</b></h5> -->
                     <h5>Vision</h5>
                     <p>IGO Agritech Farms vision is to be leading pan India brand in precision agriculture and Agri engineering space.</p>
                     <h5>Mission</h5>
                     <p>IGO Agritech Farms Mission is to win lifetime loyal customers across pan India by farming every sqm of fertile/nonfertile open outdoor land,  indoor space and rooftop space of buildings. Its mission is to generate profits and passive income for its customer through various precision farming techniques.</p>                     <p style="line-height: 1.7;">
                     </p>
                 </div>
                <div class="widget footericon gardenhub-social-links-widget">
                    <a href="https://www.facebook.com/IGOAgriTechfarms/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/igoagritechfarm" target="_blank"><i><img src="images/x1.png" alt="TOP POLYHOUSE FARMING IN INDIA "></i></a>
                    <a href="https://www.instagram.com/igoagritechfarms/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/igo-agritechfarms/mycompany/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://youtube.com/@IGOAgriTechfarms?si=mUSQdsTySbT5d3Jo" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>             </div>

             <div class="col-xs-12 col-sm-6 col-md-2 ">
                 <div id="nav_menu-2" class="widget widget_nav_menu">
                     <h4 class="widget-title">Our Services</h4>
                     <div class="menu-service-menu-container">
                         <ul id="menu-service-menu" class="menu">
                             <li><a href="about-us.php">About Us</a></li>
                             <li><a href="projects.php">Projects</a></li>
                             <li><a href="services.php">Services</a></li>
                             <li><a href="products.php">Products</a></li>
                             <li><a href="faq.php">FAQ</a></li>
                             <li><a href="contact.php">Contact us</a></li>
                             <li><a href="mentorship.php">Mentorship</a></li>
                             <li><a href="career.php">Careers</a></li>

                         </ul>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-6 col-md-3">
                 <div id="text-3" class="widget">
                     <h4 class="widget-title">Contact Us</h4>

                     <div class="footer-contact address">
                         <div class="ft-contact"><i class="flaticon-pin"></i>
                             <p>No 17 ,
Kovalan street, 
2nd main road,
Uthandi  kanathur, Chennai 600119.</p>
                         </div>
                         <div class="ft-contact phone"><i class="flaticon-phone-call"></i>
                             <p>7397789803, 
                                 7397789804, 
                                 7397789805</p>
                         </div>
                         <div class="ft-contact phone"><i class="flaticon-web"></i>
                             <p style=margin-left:>bankingbackend.indiagreen@gmail.com,</p>
                             <P>bd2@igogroups.com</P>
                         </div>
                         <!-- <div class="ft-contact fax"><i
                                            class="flaticon-phone-set"></i>
                                        <p>+(321) 58 759 89790</p>
                                    </div>
                                    <div class="ft-contact"><i
                                            class="flaticon-clock-1"></i>
                                        <p>Mon-Fri - 9am until 6pm</p>
                                    </div> -->
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 ">
                 <div id="nav_menu-2" class="widget widget_nav_menu">
                     <h4 class="widget-title">Our Brands</h4>
                     <div class="menu-service-menu-container footlogo">
                        <img src="images/foot1.png" alt="Farmers Factory">
                        <img src="images/foot2.png" alt="Valluvam">
                        <img src="images/foot3.png" alt="Nursery">
                        <img src="images/foot4.png" alt="Protein cuts">
                        <img src="images/foot5.png" alt="Financial services">
                        <!-- <img src="images/foot6.png" alt=""> -->
                     </div>
                 </div>
             </div>


         </div>
     </div>
 </div>
 <!--footer sec end-->

 <!--copyright sec-->
 <footer id="colophon" class="site-footer">
     <div class="container">
         <div class="row">
             <div class="footer-copyright col-md-7 col-sm-12 col-sx-12">
                 <div class="site-info">
                     Copyright @ 2025 <a href="#">IGO GROUP OF COMPANIES</a>,
                     All Right Reserved. </div>
             </div>
             <div
                            class="col-md-5 col-sm-12 col-xs-12 text-right footer-menu">
                            <ul id="menu-footer-menu" class="menu">
                                <li><a href="terms.php">Terms & Conditions</a></li>
                                <li><a href="privacy.php">Privacy Policy</a></li>
                            </ul>
                        </div>
         </div>
     </div>
 </footer>
 <!--copyright sec end-->
 </div>
 <!--End pagewrapper-->

 <!--primary-mobile-nav-->
 <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
     <a href="#" class="close-canvas-mobile-panel">X</a>
     <ul class="menu">
         <li class="<?= ($activePage == 'index') ? 'active':''; ?> "><a class="" href="index.php">Home</a></li>
         <li class="<?= ($activePage == 'projects') ? 'active':''; ?> "><a href="projects.php">Project</a></li>
         <li class="<?= ($activePage == 'services') ? 'active':''; ?> "><a href="services.php">Services</a></li>
         <li class="<?= ($activePage == 'products') ? 'active':''; ?> "><a href="products.php">Products</a></li>
         <li class="<?= ($activePage == 'blog') ? 'active':''; ?> "><a href="blog.php">Blog</a></li>
         <li class="<?= ($activePage == 'about-us') ? 'active':''; ?> "><a href="about-us.php">About</a></li>
         <li class="<?= ($activePage == 'career') ? 'active':''; ?> "><a href="career.php">Careers</a></li>

         <!-- <li><a href="services.php" class="dropdown-toggle">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.php">All Services</a></li>
                                                <li><a href="irrigation-drainage.php">Irrigation &amp; Drainage</a></li>
                                                <li><a href="lawn-and-garden-care.php">Lawn &amp; Garden Care</a></li>
                                                <li><a href="planting-and-removal.php">Planting and Removal</a></li>
                                                <li><a href="snow-ice-removal.php">Snow &amp; Ice Removal</a></li>
                                                <li><a href="spring-fall-cleanup.php">Spring &amp; Fall Cleanup</a></li>
                                                <li><a href="stone-and-hardscaping.php">Stone and Hardscaping</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="projects.php" class="dropdown-toggle">Projects</a>
                                            <ul class="sub-menu">
                                                <li><a href="projects.php">Project 2 Columns</a></li>
                                                <li><a href="projects-column-3.php">Project 3 Columns</a></li>
                                                <li><a href="projects-column-4.php">Project 4 Columns</a></li>
                                                <li><a href="projects-single.php">Single Project</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="dropdown-toggle">Features</a>
                                            <ul class="sub-menu">
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="our-team.php">Our Team</a></li>
                                                <li><a href="testimonials.php">Testimonials</a></li>
                                                <li><a href="pricing-table.php">Pricing Table</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.php" class="dropdown-toggle">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="#" class="dropdown-toggle">Blog Grid</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-column-2.php">Blog Grid 2 Columns</a></li>
                                                        <li><a href="blog-column-3.php">Blog Grid 3 Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-with-sidebar.php">Blog With Sidebar</a></li>
                                                <li><a href="blog-single.php">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.php" class="dropdown-toggle">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.php">Our Products</a></li>
                                                <li><a href="shop-single.php">Single Product</a></li>
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="my-account.php">My account</a></li>
                                            </ul>
                                        </li> -->
         <li class="<?= ($activePage == 'contact') ? 'active':''; ?> "><a href="contact.php">Contact</a></li>
         <li class="<?= ($activePage == 'faq') ? 'active':''; ?> "><a href="faq.php">FAQ</a></li>
         <li class="<?= ($activePage == 'mentorship') ? 'active':''; ?> "><a href="mentorship.php">Mentorship</a></li>

     </ul>

     <!-- <div class="extra-item menu-item-text"><i class="flaticon-technology-1"></i>
         <div class="extra-text">
             <p class="fh-text">Toll Free Number</p>
             <p class="number">+(32) 978 654 321</p>
         </div>
     </div> -->
 </div>
 <div id="off-canvas-layer" class="off-canvas-layer"></div>
 <!--primary-mobile-nav end-->

 <!--Scroll to top-->
 <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span class="icon fa fa-long-arrow-up"></span>
 </div>


<!-- âœ… Font Awesome for WhatsApp icon -->
<!-- WhatsApp Chat Button -->
<button class="chat-btn" id="chatBtn">
    <i class="fa-brands fa-whatsapp"></i>
</button>

<!-- Chat Popup -->
<div class="chat-popup" id="chatPopup">
    <div class="chat-header">
        <h4>IGO AgritechFarms Support</h4>
        <button class="close-btn" id="closeBtn">&times;</button>
    </div>
    <div class="chat-body">
        <p class="typing-text" id="typingText">IGO AgritechFarms Support is typing...</p>
        <p class="chat-msg"> Hi! How can we help you today?</p>
        <a href="https://wa.me/+917397789803" target="_blank" class="chat-link">Start Chat on WhatsApp</a>
    </div>
</div>

<script>
    const chatBtn = document.getElementById('chatBtn');
    const chatPopup = document.getElementById('chatPopup');
    const closeBtn = document.getElementById('closeBtn');

    let userClosedChat = false;

    function showChatbox() {
        if (!userClosedChat) {
            chatPopup.style.display = 'flex';
        }
    }

    function hideChatbox() {
        chatPopup.style.display = 'none';
    }

    // Manual open (WhatsApp / chat button)
    chatBtn.addEventListener('click', () => {
        chatPopup.style.display = 'flex';
    });

    // Close button → stop auto-open
    closeBtn.addEventListener('click', () => {
        userClosedChat = true;
        hideChatbox();
    });

    // Auto open after 5 seconds on site open / refresh
    window.addEventListener('load', () => {
        hideChatbox(); // ensure closed initially

        setTimeout(() => {
            showChatbox();
        }, 5000); // ✅ 5 seconds
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6960e4671ed061197ff3e1b9/1jeh7oe5f';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 <!-- jquery Liabrary -->
 <script src="js/jquery-1.12.4.min.js" async></script>
 <!-- bootstrap v3.3.6 js -->
 <script src="js/bootstrap.min.js" async></script>
 <!-- fancybox js -->
 <script src="js/jquery.fancybox.pack.js" async></script>
 <script src="js/jquery.fancybox-media.js"async></script>
 <script src="js/isotope.pkgd.min.js" async></script>
 <!-- owl.carousel js -->
 <script src="js/owl.js" async></script>
 <!-- counter js -->
 <script src="js/jquery.appear.js" async></script>
 <script src="js/jquery.countTo.js" async></script>
 <!-- validate js -->
 <script src="js/validate.js" async></script>
 <!-- switcher js -->
 <script src="js/switcher.js" async></script>

 <!-- google map -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A" async></script>
 <script src="js/gmap.js" async></script>
 <script src="js/map-helper.js" async></script>

 <!-- REVOLUTION JS FILES -->
 <script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js" async></script>
 <script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.actions.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.carousel.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.kenburn.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.layeranimation.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.migration.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.navigation.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.parallax.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.slideanims.min.js" async></script>
 <script type="text/javascript" src="js/revolution/extensions/revolution.extension.video.min.js" async></script>

 <!-- script JS  -->
 <script src="js/scripts.min.js" async></script>
 <!-- <script src="js/owl.carousel.js"></script> -->
 <script src="js/script.js" async></script>

<!--<script>-->
<!--(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="xcIP5tj30Co6QiKxS7cgv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();-->
<!--</script>-->
<!-- </body>-->

 <!-- Mirrored from st.ourhtmldemo.com/template/gardenhub/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2024 05:05:04 GMT -->

 </html>