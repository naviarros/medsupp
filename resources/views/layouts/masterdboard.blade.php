<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome - Administrator</title>
    <link rel="stylesheet" href="{{ asset('/css/inputcss.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/customcss.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}">
    </script>
  </head>

<script type="text/javascript">
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "/msscontent/patients/addpatient", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: {
  '_token': $('input[name=_token]').val()
}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}
});
}));

// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
};
});
</script>
    <script type="text/javascript">
        function makecreate(){
          $("#creat").click(function(){
            $("#direct").load('/msscontent/reservation/createreservation');
          });
        }
        function edit(){
          $("#edit").click(function(){
            var id;
            $.ajax({
              type: "GET",
              url: "/msscontent/departments/laboratory/xray/editxray",
              data: {'id':id },
              success: function(response){
                  $("#editp").load('/msscontent/departments/laboratory/xray/editxray');
              }
            });
          });
        }
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    $("#selall").change(function() {
        if (this.checked) {
            $(".chk").each(function() {
                this.checked=true;
            });
        } else {
            $(".chk").each(function() {
                this.checked=false;
            });
        }
    });

    $(".chk").click(function () {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;

            $(".chk").each(function() {
                if (!this.checked)
                    isAllChecked = 1;
            });

            if (isAllChecked == 0) {
                $("#selall").prop("checked", true);
            }
        }
        else {
            $("#checkedAll").prop("checked", false);
        }
    });
});
  </script>
<script type="text/javascript">
function date_time(id)
{
      date = new Date;
      year = date.getFullYear();
      month = date.getMonth();
      months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
      d = date.getDate();
      day = date.getDay();
      days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
      h = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
      var am_pm = date.getHours() >= 12 ? "PM" : "AM";
        h = h < 10 ? "0" + h : h;
      if(h<10)
      {
              h = "0"+h;
      }
      m = date.getMinutes();
      if(m<10)
      {
              m = "0"+m;
      }
      s = date.getSeconds();
      if(s<10)
      {
              s = "0"+s;
      }
      result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s+':'+am_pm;
      document.getElementById(id).innerHTML = result;
      setTimeout('date_time("'+id+'");','1000');
      return true;
}
</script>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container-fluid">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#"><img src="{{asset('img/bannerlogo.png')}}" width="50" height="40" style="margin-top: -10px;" alt="Medical Support System"></a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li class="active"><a>Hello, {{session()->get('usern')}}</a></li>
           <li><a id="date_time"></a></li>
           <script type="text/javascript">window.onload = date_time('date_time');</script>
         </ul>

         <ul class="nav navbar-nav navbar-right">
           <li><a href="../navbar-static-top/">Help</a></li>
           <li class="active"><a href="javascript:void(0);" data-toggle="modal" data-target="#about">About <span class="sr-only">(current)</span></a></li>
           <li><a href="/logout">Log Out</a></li>
         </ul>
       </div><!--/.nav-collapse -->
     </div><!--/.container-fluid -->
   </nav>
   <div class="container">
     <div class="nav-side-menu">
       <div class="brand">&nbsp;</div>
       <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

          <div class="menu-list">

              <ul id="menu-content" class="menu-content collapse out">
                  <li>
                    <a href="/msscontent/dashboard">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                    </a>
                  </li>
                  <li data-toggle="collapse" data-target="#doctors" class="collapsed">
                    <a href="javascript:void(0);"><i class="glyphicon glyphicon-globe"></i> Doctors <span class="arrow"></span></a>
                    <ul class="sub-menu collapse" id="doctors">
                      <li><a href="/msscontent/dutyroster">Physician Lists</a></li>
                      <li><a href="/msscontent/addnewdoctor">Add New Doctor</a></li>
                    </ul>
                  </li>
                  <li data-toggle="collapse" data-target="#patients" class="collapsed">
                    <a href="javascript:void(0);"><i class="fa fa-users"></i> Patients <span class="arrow"></span></a>
                    <ul class="sub-menu collapse" id="patients">
                      <li><a href="/msscontent/patients/addpatient">Add Patient</a></li>
                      <li><a href="/msscontent/patients/patientstatus">Patient Status</a></li>
                      <li><a href="/msscontent/patients/requests">Patient Requests</a></li>
                      <li><a href="/msscontent/patients/consultation/consult">Consultation Reports</a></li>
                    </ul>
                  </li>
                  <li data-toggle="collapse" data-target="#dept" class="collapsed">
                    <a href="javascript:void(0);"><i class="fa fa-building"></i> Laboratory & Radiology <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="dept">
                    <li><a href="/msscontent/departments/laboratory/xray/labxray">X-RAY</a></li>
                    <li><a href="/msscontent/departments/laboratory/ctscan/ctscan">CT Scan</a></li>
                    <li><a href="/msscontent/departments/laboratory/diagnostics/urinalysis">Urinalysis</a></li>
                    <li><a href="/msscontent/departments/laboratory/cbc/cbc">CBC</a></li>
                  </ul>
                  <li data-toggle="collapse" data-target="#reserve" class="collapsed">
                    <a href="javascript:void(0);" ><i class="glyphicon glyphicon-calendar"></i> Reservation <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="reserve">
                    <li><a href="/msscontent/reservation/patientreservation">Patient Reservation</a></li>
                    <li><a href="/msscontent/reservation/availability/availability">Doctor's Availability</a></li>
                  </ul>
                  <li data-toggle="collapse" data-target="#profile" class="collapsed">
                    <a href="javascript:void(0);"><i class="glyphicon glyphicon-user"></i> User Profile <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="profile">
                     <li><a href="/logout">Sign Out</a></li>
                   </ul>
                 </ul>
     </div>
   </div>
   @include('layouts.about')
   <div style="margin-left:18%;padding:70px 40px;height:1000px;" id="maincnt">
     @yield('content')
   </div>
   
  </body>
</html>
