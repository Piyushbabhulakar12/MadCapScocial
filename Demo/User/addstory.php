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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>Add Story</title>
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

.allbtff
{
  background: #fff;
  border: none;
  color: #006CFF;
  font-size: 21px;
}
.nonallbtff
{
  background: #fff;
  border: none;
  font-size: 21px;
}
.shareaa
{
   background: #fff;
  border: none;
  font-size: 21px;
  
}


.panel
{
display:none;
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




  </style>
</head>
<body>



<?php include('navbar.php'); ?>












<br>
<div class="container">
	<h2 style="font-weight: 600;">Add Story</h2>
</div>



<form method="post" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
				<div class="container">
					<div class="row">
						<center>
							<div class="col-md-6">
							<div style="background: #fff; border-radius: 10px; text-align: left;">
                                 <br>
                           
                           <div class="container">
                           	  <h6 class="mt-3">Add Story</h6>
                            <input type="file" name="story_img" >
                            <h6 class="mt-3">Add Describtion</h6>
                            <input type="text" name="story_title" placeholder="Enter Story Describtion">
                            <h6 class="mt-3">Select Story</h6>
                            <input type="radio" name="display" value="Public"> Public
				<input type="radio" name="display" value="Private"> Private
                   <br>
                    <input type="submit" name="submit" value="Add Story" class="btn btn-dark rounded-pill mt-3" style="font-weight: 600;">
<br>
                           </div>
<br>
							</div>
						</div>
						</center>
					</div>
				</div>
			
		</div>
	</div>
</div>





<input type="hidden" name="uploaddate" value="<?php echo date("Y/m/d"); ?>">



<input type="hidden" name="todate" value="<?php $datetime = new DateTime('tomorrow'); echo $datetime->format('Y-m-d');?>">



<?php


$conn = mysqli_connect("localhost","root","","demo");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

$user_email = $row['email'];

$user_email = $row['p_img'];

?>


<input type="hidden" name="user_name" value="<?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?>">

<?php

$conn = mysqli_connect("localhost","root","","demo");

if (isset($_POST['submit'])) 
{
	
	 
	 $story_title = $_POST['story_title'];
     $display = $_POST['display'];
     $user_id = $row['id'];
     $user_name = $_POST['user_name'];
     $user_email = $row['email'];
     $user_img = $row['p_img'];
     $uploaddate = $_POST['uploaddate'];
     $todate =$_POST['todate'];

$story_img = $_FILES['story_img'] ['name'];

    $image_tmp_name = $_FILES['story_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../storyimg/$story_img");






     $sql = " insert into addstory (story_img,story_title,display,user_id,user_name,user_email,user_img,uploaddate,todate) values ('$story_img','$story_title','$display','$user_id','$user_name','$user_email','$user_img','$uploaddate','$todate') ";

     if (mysqli_query($conn,$sql)) 
     {
     	
     }
     else
     {
     	echo "Not Done";
     }


}


?>






</form>






<script>

function funbtn()
{
  document.getElementById("demo").style.display = "block";
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>