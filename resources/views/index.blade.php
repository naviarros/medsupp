<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home - Medical Support System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}">
    </script>
  </head>
  <style>
 body {
     font: 400 15px Lato, sans-serif;
     line-height: 1.8;
     color: #818181;
 }
 h2 {
     font-size: 24px;
     text-transform: uppercase;
     color: #303030;
     font-weight: 600;
     margin-bottom: 30px;
 }
 h4 {
     font-size: 19px;
     line-height: 1.375em;
     color: #303030;
     font-weight: 400;
     margin-bottom: 30px;
 }
 .jumbotron {
     background-image: url('img/download.jpg');
     background-repeat: no-repeat;
     background-size: 100%;
     padding: 100px 25px;
     font-family: Montserrat;
     color: red;
     font-style: italic;
 }
 .imgbg {

   background-position: center;
   background-repeat: no-repeat;
   background-size: 100%;
 }
 .bg-grey {
     background-color: #f6f6f6;
 }
 .logo-small {
     color: #f4511e;
     font-size: 50px;
 }
 .logo {
     color: #f4511e;
     font-size: 200px;
 }
 .thumbnail {
     padding: 0 0 15px 0;
     border: none;
     border-radius: 0;
 }
 .thumbnail img {
     width: 100%;
     height: 100%;
     margin-bottom: 10px;
 }
 .carousel-control.right, .carousel-control.left {
     background-image: none;
     color: #f4511e;
 }
 .carousel-indicators li {
     border-color: #f4511e;
 }
 .carousel-indicators li.active {
     background-color: #f4511e;
 }
 .item h4 {
     font-size: 19px;
     line-height: 1.375em;
     font-weight: 400;
     font-style: italic;
     margin: 70px 0;
 }
 .item span {
     font-style: normal;
 }
 .panel {
     border: 1px solid #f4511e;
     border-radius:0 !important;
     transition: box-shadow 0.5s;
 }
 .panel:hover {
     box-shadow: 5px 0px 40px rgba(0,0,0, .2);
 }
 .panel-footer .btn:hover {
     border: 1px solid #f4511e;
     background-color: #fff !important;
     color: #f4511e;
 }
 .panel-heading {
     color: #fff !important;
     background-color: #f4511e !important;
     padding: 25px;
     border-bottom: 1px solid transparent;
     border-top-left-radius: 0px;
     border-top-right-radius: 0px;
     border-bottom-left-radius: 0px;
     border-bottom-right-radius: 0px;
 }
 .panel-footer {
     background-color: white !important;
 }
 .panel-footer h3 {
     font-size: 32px;
 }
 .panel-footer h4 {
     color: #aaa;
     font-size: 14px;
 }
 .panel-footer .btn {
     margin: 15px 0;
     background-color: #f4511e;
     color: #fff;
 }
 .navbar {
     margin-bottom: 0;
     background-color: #0000A0;
     z-index: 9999;
     border: 0;
     font-size: 12px !important;
     line-height: 1.42857143 !important;
     letter-spacing: 4px;
     border-radius: 0;
     font-family: Montserrat, sans-serif;
 }
 .servicelogo {
   background-image: url('img/images.jpg');
   background-repeat: no-repeat;
   background-size: 100%;
   background-position: center;
 }
 .reserve {
   background-image: url('img/service.jpg');
   background-repeat: no-repeat;
   background-size: 100%;
   background-position: center;
 }
 .navbar li a, .navbar .navbar-brand {
     color: #fff !important;
 }
 .navbar-nav li a:hover, .navbar-nav li.active a {
     color: #f4511e !important;
     background-color: #fff !important;
 }
 .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #fff !important;
 }
 footer .glyphicon {
     font-size: 20px;
     margin-bottom: 20px;
     color: #f4511e;
 }
 .slideanim {visibility:hidden;}
 .slide {
     animation-name: slide;
     -webkit-animation-name: slide;
     animation-duration: 1s;
     -webkit-animation-duration: 1s;
     visibility: visible;
 }
 @keyframes slide {
   0% {
     opacity: 0;
     transform: translateY(70%);
   }
   100% {
     opacity: 1;
     transform: translateY(0%);
   }
 }
 @-webkit-keyframes slide {
   0% {
     opacity: 0;
     -webkit-transform: translateY(70%);
   }
   100% {
     opacity: 1;
     -webkit-transform: translateY(0%);
   }
 }
 @media screen and (max-width: 768px) {
   .col-sm-4 {
     text-align: center;
     margin: 25px 0;
   }
   .btn-lg {
       width: 100%;
       margin-bottom: 35px;
   }
 }
 @media screen and (max-width: 480px) {
   .logo {
       font-size: 150px;
   }
 }
 </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="/index"><img src="{{asset('img/bannerlogo.png')}}" width="50" height="40" style="margin-top: -10px;" alt="Medical Support System"></a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav">
       <li><a href="/login/signin" onclick="window.open('/login/signin');">SIGN IN</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#about">ABOUT</a></li>
       <li><a href="#services">SERVICES</a></li>
       <li><a href="#portfolio">RESERVE NOW</a></li>
       <li><a href="#contact">CONTACT</a></li>
     </ul>
   </div>
 </div>
</nav>

<div class="jumbotron text-center">

</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid imgbg">
 <div class="row">
   <div class="col-sm-8">
     <h2>Cyberus Grp</h2><br>
     <p>We, Cyberus Grp. are group of students from Polytechnic University of the Philippines.
     <br>The team offers widely competitive when it comes in e-commerce industry <br>here in the Philippines.</p>

   </div>
   <div class="col-sm-4">
     <img src="{{ asset('img/grouplogo.png')}}" width="300" height="300" alt="">
   </div>
 </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center servicelogo ">
 <h2>SERVICES</h2>
 <h4>What we offer</h4>
 <br>
 <div class="row slideanim">
   <div class="col-sm-4">
     <span class="glyphicon glyphicon-off logo-small"></span>
     <h4>POWER</h4>
   </div>
   <div class="col-sm-4">
     <span class="glyphicon glyphicon-heart logo-small"></span>
     <h4>LOVE</h4>
   </div>
   <div class="col-sm-4">
     <span class="glyphicon glyphicon-lock logo-small"></span>
     <h4>JOB DONE</h4>
   </div>
 </div>
 <br><br>
 <div class="row slideanim">
   <div class="col-sm-4">
     <span class="glyphicon glyphicon-leaf logo-small"></span>
     <h4>GREEN</h4>
   </div>
   <div class="col-sm-4">
     <span class="glyphicon glyphicon-certificate logo-small"></span>
     <h4>CERTIFIED</h4>
   </div>
   <div class="col-sm-4">
     <span class="glyphicon glyphicon-wrench logo-small"></span>
     <h4 style="color:#303030;">HARD WORK</h4>
   </div>
 </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center reserve">

   <h2 class="text-center">RESERVATION FORM</h2>
        <div class="panel panel-primary">
          <div class="panel-heading">
            Book an Appointment to a Doctor
          </div>
          @if(session()->has('message.level'))
          <div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
            {!! session('message.content') !!}
          </div>
          @endif
          <div class="panel-body">
            {{ Form::open(['action' => 'Auth\LoginController@store', 'method' => 'post'])}}
              {{ csrf_field() }}
            <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label>Last Name:</label>
                <input type="text" name="lname" value="">
              </div>
              <div class="col-md-4">
                <label>First Name:</label>
                <input type="text" name="fname" value="">
              </div>
              <div class="col-md-4">
                <label>Middle Name:</label>
                <input type="text" name="mname" value="">
              </div>
            </div>
          </div>
            <br>
            <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label>Birthday:</label>
                <input type="date" name="dayb" value="">
              </div>
              <div class="col-md-4">
                <label>Mobile No:</label>
                <input type="number" name="mobno" value="">
              </div>
              <div class="col-md-4">
                <label>Landline No:</label>
                <input type="number" name="telno" value="">
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="form-group">
              <div class="col-md-4">

                <label>Specialization</label>
                <select class="" name="fiel" id="fiel">
                  <option>--- Select what field: ---</option>
                  @foreach($sp as $key => $spc)
                    <option value="{{ $key }}">{{ $spc }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-4">
                <label>Physician Name:</label>
                <select class="" name="pname" id="pname">

                </select>
              </div>
            </div>
          </div>
            <br>
            <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label>Health Care Card:</label>
                <select class="" name="hmo">
                  <option value="Insular">Insular Life</option>
                  <option value="MaxiCare">MaxiCare</option>
                  <option value="IntelliCare">IntelliCare</option>
                  <option value="Fortune">Fortune Care</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              <div class="col-md-4">
                <label>Request Date:</label>
                <input type="date" name="requ" value="">
              </div>
              <div class="col-md-4">
                <label>Action:</label>
                <select class="" name="act">
                  <option value="Consultation">Consultation</option>
                  <option value="Certificate">Medical Clearance</option>
                </select>
              </div>
            </div>
          </div>
          <br>
              <input type="submit" class="btn btn-info" name="req" id="req" value="Reserve Now">
          </div>
        </div>
      {{ Form::close()}}
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="fiel"]').on('change', function() {
                    var stateID = $(this).val();
                    if(stateID) {
                        $.ajax({
                            url: '/getindex/'+stateID,
                            type: "GET",
                            dataType: "json",
                            success:function(data) {


                                $('select[name="pname"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="pname"]').append('<option value="'+ key +'">'+ 'Dr./Drs.'+ value +'</option>');
                                });
                            }
                        });
                    }else{
                        $('select[name="pname"]').empty();
                    }
                });
            });
        </script>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
 <h2 class="text-center">CONTACT</h2>
 <div class="row">
   <div class="col-sm-5">
     <p>Contact us and we'll get back to you within 24 hours.</p>
     <p><span class="glyphicon glyphicon-map-marker"></span> NDC Compound, Pureza St., Sta. Mesa, Manila, Philippines</p>
     <p><span class="glyphicon glyphicon-phone"></span> +63 9120429426</p>
     <p><span class="glyphicon glyphicon-envelope"></span> aysiti1.2@gmail.com</p>
   </div>
   <div class="col-sm-7 slideanim">
     <div class="row">
       <div class="col-sm-6 form-group">
         <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
       </div>
       <div class="col-sm-6 form-group">
         <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
       </div>
     </div>
     <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
     <div class="row">
       <div class="col-sm-12 form-group">
         <button class="btn btn-default pull-right" type="submit">Send</button>
       </div>

     </div>
   </div>
 </div>
</div>

<!-- Add Google Maps -->

<script>
$(document).ready(function(){
 // Add smooth scrolling to all links in navbar + footer link
 $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Prevent default anchor click behavior
   event.preventDefault();

   // Store hash
   var hash = this.hash;

   // Using jQuery's animate() method to add smooth page scroll
   // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
   $('html, body').animate({
     scrollTop: $(hash).offset().top
   }, 900, function(){

     // Add hash (#) to URL when done scrolling (default click behavior)
     window.location.hash = hash;
   });
 });

 // Slide in elements on scroll
 $(window).scroll(function() {
   $(".slideanim").each(function(){
     var pos = $(this).offset().top;

     var winTop = $(window).scrollTop();
       if (pos < winTop + 600) {
         $(this).addClass("slide");
       }
   });
 });
})
</script>

</body>

</html>
