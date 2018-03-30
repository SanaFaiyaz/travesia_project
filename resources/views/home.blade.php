<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Travasia - HTML Responsive Template</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<!-- Style -->

<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/hover-min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href="css/YouTubePopUp.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/imagehover.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link href="css/jquery.bxslider.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slicknav.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/colors.css">
</head>

<body>

<!-- Top Bar -->
<div id="topBar">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> <img src="images/hotelone.png" alt="Hotel One"> </div>
            <div class="col-sm-8 text-right">
                <div class="headerTopBar">
                    <p><i class="fa fa-phone"></i><a href="tel:123-123-1234">123-123-1234</a></p>
                    <p><i class="fa fa-envelope"></i><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<div id="navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div id="main-nav" class="navbar-collapse collapse">
                        <ul id="menu-list" class="list-inline list-unstyled pull-right">
                            <li> <a href="{{ url('home')}}"> Home </a> </li>
                            <li> <a href="{{ url('hotels')}}"> Hotels </a> </li>
                            <li> <a href="{{ url('accomodation_transactions/create')}}"> Accomodation </a></li>
                            <li> <a href="packages.html"> Packages </a> </li>
                            <li> <a href="budget.html"> Budget </a> </li>
                            <li> <a href="booking.html"> Booking </a> </li>
                            <li> <a href="{{ url('places')}}"> Places </a> </li>
                            <li><a href="{{ url('contacts/create')}}">Contact Us </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Banner-->
<div id="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="bannerText">
                    <h1>Welcome to <span>Travesia</span></h1>
                    <ul>
                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                    </ul>
                    <p> <a href="contact.html" class="contactUs">Contact Now</a> </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="bannerForm">
                    <div class="bookUs">
                        <h3><i class="fa fa-calendar-check-o"></i> Book Online</h3>
                    </div>
                    <form id="bannerContactForm" method="post">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name *">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email *">
                        </div>
                        <div class="form-group">
                            <input name="phone" type="tel" class="form-control" placeholder="Phone Number *">
                        </div>
                        <div class="form-group">
                            <select name="type" class="form-control">
                                <option value="">Select Room Type</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="adate" type="text" class="form-control" placeholder="Arrival Date *">
                        </div>
                        <div class="form-group">
                            <input name="ddate" type="text" class="form-control" placeholder="Departure Date *">
                        </div>
                        <button type="submit" name="submit" class="form-control">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Packages -->
<div id="packages">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="sectionText">
                    <h3>Place We Offer</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna <br>
                        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
            </div>
        </div>
        <div id="packagesBox"  class="owl-carousel">
            <div class="placeBox item"> <img src="images/swat.jpg" alt="Swat">
                <h3>Swat</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            </div>
            <div class="placeBox item"> <img src="images/naran.jpg" alt="Swat">
                <h3>Naran</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. </p>
            </div>
            <div class="placeBox item"> <img src="images/murree.jpg" alt="Swat">
                <h3>Murree</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. </p>
            </div>
            <div class="placeBox item"> <img src="images/swat.jpg" alt="Swat">
                <h3>Swat</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            </div>
            <div class="placeBox item"> <img src="images/naran.jpg" alt="Swat">
                <h3>Naran</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. </p>
            </div>
            <div class="placeBox item"> <img src="images/murree.jpg" alt="Swat">
                <h3>Murree</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. </p>
            </div>
            <div class="placeBox item"> <img src="images/swat.jpg" alt="Swat">
                <h3>Swat</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            </div>
            <div class="placeBox item"> <img src="images/naran.jpg" alt="Swat">
                <h3>Naran</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. </p>
            </div>
            <div class="placeBox item"> <img src="images/murree.jpg" alt="Swat">
                <h3>Murree</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. </p>
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="sectionText">
                    <h3>Our Services</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna <br>
                        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="serviceBox">
                    <div class="serviceImage"> <img src="images/hotel.png"> </div>
                    <h4>Hotel</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="serviceBox">
                    <div class="serviceImage"> <img src="images/transport.jpg"> </div>
                    <h4>Transport</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="serviceBox">
                    <div class="serviceImage"> <img src="images/favicon.png"> </div>
                    <h4>Food</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="serviceBox">
                    <div class="serviceImage"> <img src="images/events.png"> </div>
                    <h4>Events</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Packages -->
<div id="offers">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="sectionText">
                    <h3>Latest Packages</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna <br>
                        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </div>
            </div>
        </div>
        <div id="offersBox">
            <div class="row">
                <div class="col-sm-4">
                    <div class="placeBox"> <img src="images/offer1.jpg" alt="Swat">
                        <h3>Shogran Family Holiday Package (4Days /3Nights)</h3>
                        <hr>
                        <p>3 / 5 based on 1 review(s) Shogran • Show on map</p>
                        <hr>
                        <h4> Couple with 2 kids <span>Rs 45,000</span> </h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="placeBox"> <img src="images/offer2.jpg" alt="Swat">
                        <h3>Picturesque Shogran Siri Paye (4D/3N)</h3>
                        <hr>
                        <p>3 / 5 based on 1 review(s) Shogran • Show on map</p>
                        <hr>
                        <h4> Couple with 2 kids <span>Rs 45,000</span> </h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="placeBox"> <img src="images/offer3.jpg" alt="Swat">
                        <h3>Naran Kaghan Shogran Tour Package (5 Days/4 Nights)</h3>
                        <hr>
                        <p>3 / 5 based on 1 review(s) Shogran • Show on map</p>
                        <hr>
                        <h4> Couple with 2 kids <span>Rs 45,000</span> </h4>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 text-right"> <a href="#">Read More <i class="fa fa-angle-right"></i></a> </div>
            </div>
        </div>
    </div>
</div>
<div id="testimonial">
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="sectionText">
                <h3>What Our Client Says</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna <br>
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            </div>
        </div>
        <div class="row">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 377px;">
                    <ul class="testimonial-slider" style="width: 515%; position: relative; transition-duration: 0s; transform: translate3d(-2340px, 0px, 0px);">
                        <li style="float: left; list-style: none; position: relative; width: 1170px;" class="bx-clone">
                            <div class="testimonial-content"> <i class="fa fa-quote-left"></i>
                                <p class="text-center"> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, 
                                    elementum sed varius. </p>
                                <i class="fa fa-quote-right"></i>
                                <div class="clearfix"></div>
                                <div class="testimonial-img"> <img class="img-circle  text-center" src="images/testimonial.jpg" alt="thmub"> <span class="hidden-xs">Angela Ahrendts</span> </div>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 1170px;">
                            <div class="testimonial-content"> <i class="fa fa-quote-left"></i>
                                <p class="text-center"> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, 
                                    elementum sed varius. </p>
                                <i class="fa fa-quote-right"></i>
                                <div class="clearfix"></div>
                                <div class="testimonial-img"> <img class="img-circle  text-center" src="images/testimonial.jpg" alt="thmub"> <span class="hidden-xs">Angela Ahrendts</span> </div>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 1170px;">
                            <div class="testimonial-content"> <i class="fa fa-quote-left"></i>
                                <p class="text-center"> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, 
                                    elementum sed varius. </p>
                                <i class="fa fa-quote-right"></i>
                                <div class="clearfix"></div>
                                <div class="testimonial-img"> <img class="img-circle  text-center" src="images/testimonial.jpg" alt="thmub"> <span class="hidden-xs">Angela Ahrendts</span> </div>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 1170px;">
                            <div class="testimonial-content"> <i class="fa fa-quote-left"></i>
                                <p class="text-center"> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, 
                                    elementum sed varius. </p>
                                <i class="fa fa-quote-right"></i>
                                <div class="clearfix"></div>
                                <div class="testimonial-img"> <img class="img-circle  text-center" src="images/testimonial.jpg" alt="thmub"> <span class="hidden-xs">Angela Ahrendts</span> </div>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 1170px;" class="bx-clone">
                            <div class="testimonial-content"> <i class="fa fa-quote-left"></i>
                                <p class="text-center"> Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, 
                                    elementum sed varius. </p>
                                <i class="fa fa-quote-right"></i>
                                <div class="clearfix"></div>
                                <div class="testimonial-img"> <img class="img-circle  text-center" src="images/testimonial.jpg" alt="thmub"> <span class="hidden-xs">Angela Ahrendts</span> </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bx-controls"></div>
            </div>
        </div>
    </div>
</div>
    </div>

<div id="prefooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="prefooterText">
                    <h4><span>CALL: </span><a href="tel:123-123-1234">123-123-1234</a></h4>
                    <p>Travasia - HTML Responsive Template</p>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <div class="prefooterText">
                    <p>Copyright © 2018 Travasia</p>
                    <p>All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div id="footerText">
                    <ul>
                    
                        <li><a href="{{ url('accomodation_transactions/create')}}">Accomodation</a> <span>| </span></li>
                        <li><a href="{{ url('hotels')}}">Hotels</a> <span>| </span></li>
                        <li><a href="packages.html">Packages</a> <span>| </span></li>
                        <li><a href="budget.html">Budget</a> <span>| </span></li>
                        <li><a href="booking.html">Booking</a> <span>| </span></li>
                        <li><a href="{{ url('places')}}">Places</a> <span>| </span></li>
                        <li><a href="{{ url('contacts/create')}}">Contact Us</a></li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts --> 

<script src="js/jquery-1.12.3.min.js"></script> 
<script src="js/jquery-ui.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/YouTubePopUp.js"></script> 
<script src="js/jquery.mixitup.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script src="js/waypoint.js"></script> 
<script src="js/jquery.bxslider-rahisified.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/jquery.slicknav.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>