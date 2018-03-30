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
<link rel="stylesheet" type="text/css" href="{{url ('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url ('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/hover-min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url ('css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url ('css/jquery-ui.css')}}">">
<link href="{{url ('css/YouTubePopUp.css')}}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="{{url ('css/imagehover.min.css')}}">
<link rel="stylesheet" href="{{url ('css/owl.carousel.css')}}">
<link href="css/jquery.bxslider.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url('slicknav.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/colors.css')}}">
</head>

<body>




<!-- Top Bar -->
<div id="topBar">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/hotelone.png" alt="Hotel One">
            </div>
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>
                        
                    </div>
                    <div id="main-nav" class="navbar-collapse collapse">
                        <ul id="menu-list" class="list-inline list-unstyled pull-right">
                            <li> <a href="index.html"> Home </a> </li>
                            <li> <a href="accomodation.html"> Accomodation </a> </li>
                            <li> <a href="transport.html"> Transport </a> </li>
                            <li> <a href="packages.html"> Packages </a> </li>
                            <li> <a href="budget.html"> Budget </a> </li>
                            <li> <a href="booking.html"> Booking </a> </li>
                            <li> <a href="places.html"> Places </a> </li>
                            <li> <a href="contact.html"> Contact Us </a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>




<div id="breadCrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="breadCrumbText">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                                <a href="contact.html">Contact Us</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div style ="margin-top: 50px;margin-bottom: 50px;">
    <h2 align="center">Confused? Give us a shout!</h2>
    </div>
<div style ="vertical-align: center;">
    <div style ="position:center;margin: auto;width:700px">
    
<form class="form-horizontal" method="post" action="/contacts">

<div class="form-group">
    <label for="name" class="col-lg-2 control-label">
        Name
    </label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="name" >
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-lg-2 control-label">
        Email
    </label>
    <div class="col-lg-10">
        <input type="email" class="form-control" id="email" name="email">
    </div>
</div>

<div class="form-group">
    <label for="phone" class="col-lg-2 control-label">
        Phone
    </label>
    <div class="col-lg-10">
        <input type="number" class="form-control" id="phone" name="phone">
    </div>
</div>


<div class="form-group">
    <label for="comment" class="col-lg-2 control-label">
        Comment
    </label>
    <div class="col-lg-10">
        
    
    <textarea rows="4" cols="50" name="comment" >
Enter text here...</textarea>
</div>
</div>

<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Create</button>

    </div>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>


<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="images/under-construction.png" alt="Under Construction">
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
                    
                        <li><a href="accomodation.html">Accomodation</a> <span>| </span></li>
                        <li><a href="transport.html">Transport</a> <span>| </span></li>
                        <li><a href="packages.html">Packages</a> <span>| </span></li>
                        <li><a href="budget.html">Budget</a> <span>| </span></li>
                        <li><a href="booking.html">Booking</a> <span>| </span></li>
                        <li><a href="places.html">Places</a> <span>| </span></li>
                        <li><a href="contact.html">Contact</a></li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts --> 

<script src="{{ url('js/jquery-1.12.3.min.js')}}"></script> 
<script src="{{ url('js/jquery-ui.js')}}"></script> 
<script src="{{url('js/wow.min.js')}}"></script> 
<script src="{{url('js/bootstrap.min.js')}}"></script> 
<script src="{{ url('js/owl.carousel.js')}}"></script> 
<script src="{{ url('js/YouTubePopUp.js')}}"></script> 
<script src="{{url('js/jquery.mixitup.min.js')}}"></script> 
<script src="{{url('js/jquery.counterup.min.js')}}"></script> 
<script src="{{url('js/waypoint.js')}}"></script> 
<script src="{{url('js/jquery.bxslider-rahisified.min.js')}}"></script> 
<script src="{{ url('js/jquery.validate.js')}}"></script> 
<script src="{{url('js/jquery.slicknav.min.js')}}"></script> 
<script src="{{url('js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{url('js/custom.js')}}"></script>
</body>
</html>







