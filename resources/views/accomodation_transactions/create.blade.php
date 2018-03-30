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




<div id="breadCrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="breadCrumbText">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Accomodation</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                <a href="{{ url('home')}}">Home</a>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ url('accomodation_transactions/create')}}">Book your Hotel</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div style ="margin-top: 50px;margin-bottom: 50px;">
    <h2 align="center">Book Your Accomodation Now</h2>
    </div>

<div style ="vertical-align: center;">
    <div style ="position:center;margin: auto; width:700px;">
    
<form class="form-horizontal" method="post" action="/accomodation_transactions">

<div class="form-group">

    <label for="hotel_id" class="col-lg-2 control-label">
        Hotel
         </label>
         <div class="col-lg-10">
    <select class="form-control" name="hotel_id">
         @foreach($hotels as $hotel)
      <option value="{{$hotel->id}}">{{$hotel->name}}</option>
    @endforeach
  </select>
</div>
</div>

<div class="form-group">

    <label for="bedroom_id" class="col-lg-2 control-label">
        Bedroom
         </label>
         <div class="col-lg-10">
    <select class="form-control"  name="bedroom_id">
         @foreach($bedrooms as $bedroom)
      <option value="{{$bedroom->id}}">{{$bedroom->name}}</option>
    @endforeach
  </select>
</div>
</div>


<div class="form-group">
    <label for="no_of_bedrooms" class="col-lg-2 control-label">
        Number of Bedrooms
    </label>
    <div class="col-lg-10">
        <input type="number" class="form-control" id="no_of_bedrooms" name="no_of_bedrooms">
    </div>
</div>


<div class="form-group">
    <label for="no_of_days" class="col-lg-2 control-label">
        Number of Days (Stay Duration)
    </label>
    <div class="col-lg-10">
        <input type="number" class="form-control" id="no_of_days" name="no_of_days">
    </div>
</div>


<div class="form-group">
    <label for="transport" class="col-lg-2 control-label">
        Want Transport? *Fixed fee =10,000 Rs
    </label>
    <div class="col-lg-10">
    <input type="checkbox" name="transport" id="transport" value=1/>        
    </div>
</div>

<div class="form-group">
    <label for="payment_method" class="col-lg-2 control-label">
        Payment Method
    </label>
    <div class="col-lg-10">
        <select class="form-control" name="payment_method" >
            <option value="PayPal">PayPal</option>
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="card_number" class="col-lg-2 control-label">
        Card Number
    </label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="card_number" id="card_number" >
    </div>
</div>


<div class="form-group">
    <label for="total_amount" class="col-lg-2 control-label">
        Total Amount
    </label>
    <div class="col-lg-10">
        <input type="text" disabled="true" class="form-control" name="total_amount" id="total_amount" >
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







