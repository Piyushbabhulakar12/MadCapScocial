

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

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<title>Profile</title>
	<style type="text/css">
 body
      {
        font-family: 'Poppins', sans-serif;
        background: #ededed;
        font-weight: 600;
      }
      .liank
      {

      }
      .logo
      {
        font-family: 'Lobster', cursive; 
        font-weight: 590;
        color: #2b2b2b;
      }
      .nav-link
{
  color: #606770;
  font-size: 18px;
   border-radius: 10px;
}
.nav-link:hover
{
  background: #ededed;
  border-radius: 10px;
}
.buttt
{
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
}
.fa-user-circle-o{
  font-size: 17px;
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
 .aaa
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
 .navbar-toggler
 {
  display: none;
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
  color: ;
 }

}



.hide {
  display: none;
  font-size: 15px;
  background-color: #ECF0F1; border:1px solid #fff; border-radius: 25px; width: 60px; padding: 8px;
  text-align: center;
  width: 150px;
}
    
.myDIV:hover + .hide {
  display: block;
  color: #FC601C;
}

.dropbtn {
  background: #fff;
  padding: 8px;
  font-size: 12px;
  border: none;
  text-align: right;
}

.dropdowna {
  margin-top: -16px;
 }

.dropdowna-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdowna-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdowna-content a:hover {background-color: #ddd;}

.dropdowna:hover .dropdowna-content {display: block;}

.dropdowna:hover .dropbtn {background-color: #fff;}

.dem_text
{
	font-size: 11px;
	color: gray;
	font-weight: 600;
	margin-bottom: 5px;
}

</style>
</head>
<body>



<div id="mySidenav" class="sidenav">
  <p href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="cursor: pointer;">&times;</p>
  <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp <span style="margin-left: 19px;">Home</span></a>
  
  <hr>

 <a href="User/login/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp <span style="margin-left: 19px;">Login</span></a>





<br><br>
</div>




<form method="post">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h4 style="font-weight: 600;">Send Us Some feedback</h4>  
      <span style="font-size: 12px; color: gray;">Do you have a suggestions or found bug ? Let us know in the field below . </span> 

      <textarea class="form-control mt-3" rows="5" name="des" placeholder="Describe your issue or idea ..."></textarea>  

      <div class="mt-3">
        <input type="radio" name="type" value="Bug"> <label>Bug</label> &nbsp&nbsp&nbsp

      <input type="radio" name="type" value="Comment"> <label>Comment</label> &nbsp&nbsp&nbsp

       <input type="radio" name="type" value="Other"> <label>Other</label>  
      </div>
 
      


</form>
      </div>
    </div>
  </div>
</div>



<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span style="cursor:pointer; " onclick="openNav()">
&nbsp&nbsp

  <i class="fa fa-bars" aria-hidden="true"></i></span>&nbsp&nbsp
    <span class="logo">Madcap</span></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
   <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link liank" href="index.php" title="Home"><span><i class="fa fa-home" aria-hidden="true"></i></span></a>
  </li>
   
  <li class="nav-item">
    <a class="nav-link liank" href="User/login/login.php" title="Profile" class="btn btn-primary rounded-pill">Sign In</a>
  </li>



  </ul>
    </div>

  </div>
</nav>



      


<nav class="navbar fixed-bottom navbar-light bg-light navbarbottom shadow-lg">
  <div class="container-fluid">
    <a class="navbar-brand nav_hovet" href="index.php"><i class="fas fa-home"></i></a>
    <a  class="navbar-brand nav_hovet" href="User/login/login.php"><i class="fas fa-search"></i></a>
    <a class="navbar-brand nav_hovet" href="User/login/login.php"><i class="fas fa-plus-square"></i></a>
    <a class="navbar-brand nav_hovet" href="User/login/login.php"><i class="far fa-bell"></i></a>
    <a class="navbar-brand nav_hovet" href="User/login/login.php"><i class="fas fa-user"></i></a>
  </div>
</nav>














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