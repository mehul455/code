<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamic Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link  rel="stylesheet" href="https://fonts.goooleapis.com/css?family=Josefin+Sans&display=swap">
  <link href="https://fonts.goooleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

  <script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<!---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
  
</head>
<body>
<!--nav bar-->
<?php require 'partials/_nav.php'?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/sh/1.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/sh/2.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/sh/3.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<!--about -->

<section  style="background-color:#353b48" class="my-5" style="margin-top:30px;">
<div class="py-5">
    <h2 class="text-center" style="color:white;"><b>About</b></h2>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
      <img src="images/1212.jpg" class="img-fluid aboutimg">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4" class="m12" style="color:white;">More about M.K.E.S and Pre-Primary</h2>
      <p class="py-3"style="color:white;"></p>
      <a href="check.php" class="btn btn-success">Check More</a>
   </div>   
</div>  
</div>
</section>

<!--Services -->


<section class="my-5">
<div class="py-5">
    <h2 class="text-center"><b>Our Services</b></h2>
</div>
<div class="container-fluid">
  <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
     <div class="card">
      <img class="card-img-top" src="images/images.jfif" alt="Card image">
     <div class="card-body">
     <h4 class="card-title">Sweety ma'am</h4>
     <p class="card-text">subject:- DBMS</p>
     <a href="#" class="btn btn-primary">See Profile</a>
  </div>
     </div>
      </div>  


      <div class="col-lg-4 col-md-4 col-12">
     <div class="card">
      <img class="card-img-top" src="images/images.jfif" alt="Card image">
     <div class="card-body">
     <h4 class="card-title">Anisha ma'am</h4>
     <p class="card-text">Subject:-Webprogramming</p>
     <a href="#" class="btn btn-primary">See Profile</a>
  </div>
     </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
     <div class="card">
      <img class="card-img-top" src="images/images.jfif" alt="Card image">
     <div class="card-body">
     <h4 class="card-title">Vishaka ma'am</h4>
     <p class="card-text">Subject:- Python Programming</p>
     <a href="#" class="btn btn-primary">See Profile</a>
  </div>
     </div>
      </div>

  </div>
</div>
</section>







<!-- our gallary-->

<section style="background-color:#353b48" class="dark" class="my-5">
    <div class="py-5">
        <h2 class="text-center" style="color:white;"><b>Our Gallary</b</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/sh/4.jpeg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/sh/5.jpeg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/sh/6.jpeg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/sh/7.jpeg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/sh/8.jpeg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/sh/1.jpeg" class="img-fluid pb-4">
        </div>
    </div>
</section>


<!-- contact-->
 
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><b>Contact Us</b></h2>
    </div>
    <div class="map">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:100%;'><div id='gmap_canvas' style='height:300px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://buywebtrafficexperts.com">buy website traffic</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(19.1926915,72.84751340000003),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.1926915,72.84751340000003)});infowindow = new google.maps.InfoWindow({content:'<strong>MKES English School</strong><br>Nagindas Khandwala College<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			<center><H2>M.K.E.S. English School</H2><BR>
			<H4>Bhavishya Bharat Campus,<BR>
			S. V. Road, Malad(W). Mumbai: 400064<BR><BR>
			School Office: 022-28653006 (Primary)<BR><BR>
			Email: mkes_malad@hotmail.com</H4></center>
			
		 </div>
    <div class="w-50 m-auto">
       <form action="userinfo.php" method="post">
         <div class="form-group">
            <lable><b>Username</b></label>
            <input type="text" name="user" placeholder="Enter your full name" autocomplete="off" class="form-control border border-dark" style="background-color: #353b48; color: white;">
         </div>
         <div class="form-group">
            <lable><b>Email Id</b></label>
            <input  type="text" name="email" placeholder="Enter your email ID" autocomplete="off" class="form-control border border-dark" style="background-color: #353b48; color: white;">
         </div>
         <div class="form-group">
            <lable><b>Mobile<b></label> 
            <input  type="text" name="mobile" placeholder="Enter your mobile number" autocomplete="off" class="form-control border border-dark" style="background-color: #353b48; color: white;">
         </div>
         <div class="form-group">
            <lable><b>Comments</b></label>
            <textarea  class="form-control border border-dark"  name="comments" placeholder="Enter your comment"  autocomplete="off" style="background-color: #353b48; color: white;">
            </textarea>
         </div>
        <button type="submit" class="btn btn-info">Submit</button>
       </form>
    </div>
</section>


<footer >
   <div style="height:250px; width:100%; background-color: black; text-align:center;">
      <div style="color:white; padding:5%;">
         &copy; <b>2021 | Created & designed by</b> <a href="#" style="color: #48dbfb">WebGohil</a>
      </div>
      <div  class="sm">
        <a href="#" style="color: #48dbfb; margin-right:12px;" class="fab fa-facebook-f"></a>
        <a href="#" style="color: #48dbfb;  margin-right:12px;" class="fab fa-twitter"></a>
        <a href="#" style="color: #48dbfb;  margin-right:12px;"class="fab fa-instagram"></a>
        <a href="#" style="color: #48dbfb;  margin-right:12px;"class="fab fa-linkedin-in"></a>
        <a href="#" style="color: #48dbfb;  margin-right:12px;"class="fab fa-youtube"></a><br>
        <img src="images/school/logo.png" style="width:60px; height:50px; margin-top:10px;">
        
   
      </div>
   </div>
   
</footer>

</body>
</html>


