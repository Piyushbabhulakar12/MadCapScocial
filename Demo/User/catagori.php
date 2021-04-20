<?php

session_start();

if ($_SESSION['email'] == true) 
{
 $_SESSION['email'];
}
else
{
	header("location:login/login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>All Post</title>
     <style type="text/css">
    	 body
      {
        font-family: 'Poppins', sans-serif;
        background: #ededed;
        font-weight: 600;
      }
      .nav-link
{
	color: black;
	font-size: 18px;
}
.buttt
{
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
}

a{
	text-decoration: none;
	color: black;
}
a:hover
{
	text-decoration: none;
	color: black;
}
.buttt
{
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
	font-size: 15px;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 16px;
  color: #7C7C7C;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #322F2F;
  background: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


@media screen and (max-height: 1200px) {
  .navbarbottom
 {
 	visibility: hidden;
 }
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media only screen and (max-width: 600px) {
 .nav-item{
 	visibility: hidden;
 }
 .drop{
 	display: none;
 }
 .navbarbottom{
  visibility: visible;
 }
 .aaa
 {
 	visibility: visible;
 	position: relative;
 	right: -90px;
 }

}

.card_h
{
  background: #fff; 
  border-radius: 10px; 
  padding: 12px;
}
.card_h:hover
{
  background: #DCDCDC; 
}


  </style>
	<title>Catagori</title>
</head>
<body>



<?php include('navbar.php'); ?>








<br>

<div class="container">
  <h3 style="font-weight: 600;">Catagori</h3>
</div>


<div class="container mt-2">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
					<a href="catagori/nature.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #57FC98;"><i class="fa fa-leaf" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Nature</h5>
          </div>     
          </a>
				</div>
				<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
					<a href="catagori/movie.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #577FFC;"><i class="fa fa-film" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Movie</h5>
          </div>     
          </a>
				</div>
				<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
					<a href="catagori/music.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #FC8757;"><i class="fa fa-music" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Music</h5>
          </div>     
          </a>
				</div>
				<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
					<a href="catagori/entertainment.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #279CF8;"><i class="fa fa-video-camera" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Entertainment</h5>
          </div>     
          </a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container mt-1">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/comedy.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #FAEE2F;"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Comedy</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/people&blogs.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #FA2F45;"><i class="fa fa-users" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">People & Blogs</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/news.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #FF4F0D;"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">News & Politics</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/gaming.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #0DC1FF;"><i class="fa fa-gamepad" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Gaming</h5>
          </div>     
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container mt-1">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/sports.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #FE5426;"><i class="fa fa-trophy" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Sports</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/film&animation.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #C3FE26;"><i class="fa fa-play" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Film & Animation</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/travel.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #26FEB3;"><i class="fa fa-globe" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Travel & Events</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/howto&style.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #5FA5F9;"><i class="fas fa-tshirt"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Howto & Style</h5>
          </div>     
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container mt-1">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/education.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #5F66F9;"><i class="fas fa-chalkboard-teacher"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Education</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/science.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #F56907;"><i class="fas fa-vials"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Science & Tech</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/motivate.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #07F589;"><i class="fas fa-user-tie"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Motivation</h5>
          </div>     
          </a>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-6 mt-3">
          <a href="catagori/other.php">
           <div class="card_h">
            <span style="font-size: 30px; color: #707070;"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
            <h5 style="font-weight: 605; padding-top: 10px;">Other</h5>
          </div>     
          </a>
        </div>
      </div>
    </div>
  </div>
</div>





<br><br><br>





<?php 

date_default_timezone_set('Asia/Kolkata');

 $timer = date( 'h:i A' , time ());

?>

<?php


$conn = mysqli_connect("localhost","root","","demo");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>


<?php

$conn = mysqli_connect("localhost","root","","demo");

$sql = " update regi set status = 'Online' , online_time = '$timer' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	
}
else
{
	echo "Not Done";
}


?>











<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>