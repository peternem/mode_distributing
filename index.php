<?php
include 'includes/sitewide-globals.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Mode Distributing - Superior Products By Design - High-End Home Appliance Distributor</title>
        <meta name="description" content="Mode Distributing is the premier home appliance distributor in Southwest California, Arizona, Nevada and Hawaii.   We carry Vent-A-Hood Range Hoods, AGA, Heartland, Marvel high-end home and kitchen appliances.">
        <meta name="keywords" content=" Vent-A-Hood Range Hoods, AGA, Heartland, Marvel, American Range, Luxury Appliances, Luxury Appliance Showrooms, Appliances Southern California, Appliance Showrooms">
        <meta content="range hoods, range hood, kitchen range hoods, range vent hoods, kitchen range hood, kitchen vent hood, kitchen ventilations, kitchen ventilation, kitchen island range hood, island range hoods, range hood under cabinet, wall mount range hoods, range hood style, euro style wall mount, european style wall mount, island range hoods, kitchen island hoods, island ceiling mount hoods, island vent hoods, island exhaust hoods, island stove hoods, liner inserts, general ventilations, hood canopy, blower system"/>
        <meta content="stoves, cooking ranges, kitchen refridgerators, under counter refridgerators, outdoor patio, outdoor patio refridgerators"/>

        <?php
		include 'includes/sitewide-metaTags.php';
        ?>
        <link href="css/mode-style1.css" rel="stylesheet" type="text/css" />
        <link href="css/main_navigation_style.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php
		include 'includes/sitewide-scripts.php';
        ?>
        <script type="text/javascript" src="js/chili-1.7.pack.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/sitewide-scripts-slideshow.js"></script>
        <?php include_once("includes/analyticstracking.php") ?>
	    <style media="all" type="text/css">
	        #wrapper {
	                position: relative;
	            }
	            #bannerPromo {
	                display: none;
	                position: absolute;
	                background-color: #161616;
	                border: 1px solid #444B50;
	                left: 50%;
	                top: 20%;
	                margin-left: -300px;
	                margin-top: -200px;
	                width: 600px;
	                height: 440px;
	                z-index: 1000;
	                -webkit-box-shadow: 7px 7px 5px rgba(50, 50, 50, 0.75);
	                -moz-box-shadow: 7px 7px 5px rgba(50, 50, 50, 0.75);
	                box-shadow: 7px 7px 5px rgba(50, 50, 50, 0.75);
	            }
	            #bannerPromo .banner-header {
	                text-align: left;
	                font-weight: bold;
	                margin: 10px;
	            }
	            #bannerPromo .close-btn {
	                background-color: #000000;
	                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMtJREFUeNpi+P//PwMU9wJxPhIfF64D4jkwPkyw6z8C4DOkAkndBJgB7f8xATZDSrGo62ViYGB4x4AJJgBxPhK/CIi7sKh7DTO96D92kA/F2EAFchiAcM5/4kEFeiDCcBopmrEZQMiQCnT1TFgCRoIBN/iLIYJmYiMlXmghIRCr0Q3ApRkUM5n4DMGVEv9D0wbMAlxpoQ4UiDxYAqsSiPuQ+BOBuBiLuo8wGyYjm0pkZgLnFxaoSblA/B2Km/BEYwcQs4FthriKASDAACO1tJCWVmonAAAAAElFTkSuQmCC);
	                background-position: 2px 2px;
	                background-repeat: no-repeat;
	                border: 1px solid #444B50;
	                border-radius: 3px;
	                cursor: pointer;
	                height: 20px;
	                position: absolute;
	                right: 10px;
	                top: 10px;
	                width: 20px;
	                
	            }
	
	            #bannerPromo .close-btn:hover {
	                background-color: #1D96C1;
	                border: 1px solid #1D96C1;
	            }
	            
	            #bannerPromo img {
	                width: 100%;
	                height: auto;
	            }
	            
	            .partyPopup {
	                background-color: #1C97C1;
	                border: 1px solid #444B50; 
	                color: #FFFFFF;
	                border-radius: 3px;
	                display: block;
	                float: right;
	                font-size: 12px;
	                padding: 4px 8px;
	                position: absolute;
	                right: 20px;
	                top: 63px;
	                z-index: 1000;
	            }
	            .partyPopup:hover {
	                background-color: #6AADC4;
	                 color: #FFFFFF;
	            }
	
	    </style>
	    <script type="text/javascript">
	        $(document).ready(function() {
	                var bannerPromo = $("#bannerPromo");
	                var popDelay = 1000;
	                var fadeSpeed = 600;
	                var timeOut = 15000;
	
	                $(bannerPromo).delay(popDelay).fadeIn(fadeSpeed);
	
	                setTimeout(function() {
	                    bannerPromo.fadeOut(fadeSpeed);
	                }, timeOut);
	                
	                $(".partyPopup").click(function() {
	                    bannerPromo.slideToggle(fadeSpeed)
	                });
	                
	                $(".close-btn").click(function() {
	                    bannerPromo.slideToggle(fadeSpeed)
	                });
	            });
	    </script>
    </head>
    <body>
        <div id="wrapper">
            <a href="#" class="partyPopup"><span>NKBA PARTY INFO</span></a>
        	<div id="bannerPromo" class="modal-dialog">
                <div class="banner-header">
                    NKBA PARTY
                </div>
                <div class="close-btn" alt="X" title="Close"></div>
                <img src="images/MODE_BlackWhite_4X6.jpg" alt="NKBA Black and White Holliday Event" />
            </div>
            <?php
			include 'includes/sitewide-header.php';
            ?>
            <div id="quickLinks">
                &nbsp;
            </div>
            <article id="mainContentImage">
                <hgroup id="index_main_panel" class="indexTitle">
                    <div id="hide_btn">
                        &#8595;
                    </div>
                    <h2>Superior Products By Design</h2>
                    <p> Mode Distributing is the premier home appliance distributor in California,Hawaii, and Northern Nevada. Our goal is to provide you with the highest level of service and luxury appliances for your building, remodeling or replacement project. </p>
                    <p> What sets Mode Distributing apart is the complete experience that we provide to our customers: The experience begins in our factory trained Territory Managers that specialize in product knowledge and technical support.  Our locations in Union City and Buena Park California offer hands on learning
                        opportunity as you test drive the most elegant appliances available with the latest in technology and convenience. Finally our Inside Sales support provides quick knowledgeable response to any questions you might have. </p>
                </hgroup>
                <div id="slideShowControls1" class="slide_Index">
                    <a id="prev" href="javascript:void(0)" class="prev_next">&larr;&laquo;</a>
                    <a id="pause" href="javascript:void(0)">Pause</a>
                    <a id="next" href="javascript:void(0)" class="prev_next">&raquo;&rarr;</a>
                    <div id="pgr"></div>
                </div>
                <div id="slideshow" class="pics">

                    <img src="images/hero-images-index/CILH9-2+200-hero-image.jpg"/>
                    <img src="images/hero-images-index/vah-CILH9-hero-image.jpg" alt="Vent-A-Hood - Manufacturer of the original kitchen venting system." />
                    <img src="images/hero-images-index/marvel-keg-cooler-hero-image.jpg" alt="Marvel - Luxury undercounter refrigeration products." />
                    <img src="images/hero-images-index/MPRO3WCM_MPRO6WCM_940x500.jpg" alt="Marvel - Luxury undercounter refrigeration products." />
                    <img src="images/hero-images-index/Classic-Suite_Black-940x500.jpg" alt="Heartland - stoves, ovens and refrigeration." />
                    <img src="images/hero-images-index/heartland-artisan_940x500.jpg" alt="Heartland - stoves, ovens and refrigeration." />
                </div>
            </article>
            <article id="mainContent">
                <section class="indexbox1">
                    <a href="products.php" title="Products"><h3>Products</h3></a>
                    <a title="Visit Products" href="products.php" class="imageLink rollButton"><img src="images/rollover/product-btn.png" alt="" width="90" height="120" class="imageTabBox1" /></a>
                    <h4>Luxurious Home Appliances to meet the needs of your home.</h4>
                    <p> Our product offering ranges from stove, range hoods and exhaust fans and refridgerators for wine or beer. </p>
                    <ul class="linkList">
                        <li><a href="aga.php">AGA</a></li>
                        <li><a href="american_range.php">American Range</a></li>
                        <li><a href="heartland.php">Heartland</a></li>
                        <li><a href="marvel.php">Marvel</a></li>
                    </ul>
                    <ul class="linkList right">
                        <li><a href="marvel_outdoor.php">Marvel Outdoor</a></li>
                        <li><a href="marvel_professional.php">Marvel Professional</a></li>
                        <li><a href="vent-a-hood.php">Vent-A-Hood</a></li>
                    </ul>
                    <div class="moreInfoDiv">
                        <a href="products.php"><span>Learn More</span><img src="images/icons/learnMoreArrow.png" alt="&raquo;" /></a>
                    </div>
                </section>
                <section class="indexbox2">
                    <div class="subBox clearfix">
                        <a href="new_products.php"><h3>New Products</h3></a>
                        <a title="New Mode Products" href="new_products.php" class="imageLink rollButton"><img src="images/rollover/newproduct-btn.png" alt="New Products" class="imageCenterBox" /></a>
                    </div>
                    <div class="subBox">
                        <a href="contact.php"><h3>Contact</h3></a>
                        <a title="Contact Mode" href="contact.php" class="imageLink rollButton"><img src="images/rollover/contact_btn.png" alt="" class="imageCenterBox" /></a>
                    </div>
                </section>
                <section class="indexbox3 clearfix">
                    <a href="services.php"><h3>Services</h3></a>
                    <a href="services.php" class="imageLink rollButton"><img src="images/rollover/services-btn.png" alt="" width="90" height="120" class="imageTabBox1" /></a>
                    <h4>Services to meet the needs of our clients.</h4>
                    <p> Mode Distributing provides an extensive range of services that are tailored to specific project types. Services offered may range from designing unit layouts and providing finish specifications a home, condominium or townhome. </p>
                    <div class="moreInfoDiv">
                        <a href="services.php"><span>Learn More</span><img src="images/icons/learnMoreArrow.png" alt="&raquo;"/></a>
                    </div>
                </section>
            </article>
        </div>
        <footer>
            <?php
			include 'includes/sitewide-footer.php';
            ?>
        </footer>
        <?php
		include 'includes/sitewide-copyright.php';
        ?>
    </body>
</html>
