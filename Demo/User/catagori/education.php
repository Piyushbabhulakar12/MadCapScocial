
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
	<title>Education</title>
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




<?php include('../navbar_cat.php'); ?>












<br>

<div class="container">
  <h2 style="font-weight: 600;">Education</h2>
</div>


<?php


$conn = mysqli_connect("localhost","root","","demo");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$arow = mysqli_fetch_array($run);

$id = $row['id'];

?>

<?php

$conn = mysqli_connect("localhost","root","","demo");

$sql = " select * from post where catagori = 'Education' and visibility = 'Public' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	

?>

<?php 

              $conn = mysqli_connect("localhost","root","","demo");

              $u_id = $row['user_id'];
            
              $sql1 = " select * from regi where id = '$u_id' ";

              $runs = mysqli_query($conn,$sql1);

              $rows = mysqli_fetch_array($runs);

          ?>

  <div class="container mt-1">
         	<div class="row">
         		<center>
         			<div class="col-md-8">
         			
         			<div class="container">
         				<div class="row">
         					<div class="col-md-12">
         						<div style="background-color: #fff; border-radius: 10px 10px 0 0; height: 60px;" class="shadow-lg">
         							<div style="padding: 10px; text-align: left;">
         								<a href="../profile_detail.php?id=<?php echo $rows['id']; ?>"><img src="../../Image/<?php echo $rows['p_img']; ?>" height="40" width="40" style="border-radius: 50px;"> &nbsp <?php echo $rows['f_name']; ?> <?php echo $rows['l_name']; ?></a>
         							</div>
         						</div>
  <?php
            
            if ($row['type_cont'] == 'Image') 
            {
             ?>
             <a href="../post_view.php?id=<?php echo $row['id']; ?>"> <img src="../../Image/<?php echo $row['p_img'] ?>" style="height: 500px; width: 100%;" class=""></a>
             <?php
            }
            else
            {
              ?>
<a href="../post_view.php?id=<?php echo $row['id']; ?>"> <video src="../../Image/<?php echo $row['p_img'] ?>"  style="height: 500px; width: 100%;" class=""></video></a>
              <?php
            }


           ?>


         						
         						<div style="background:#fff; border-radius: 0 0 10px 10px; text-align: left;">
         							<div class="container">
         								<br>
         								<a href="../post_view.php?id=<?php echo $row['id']; ?>"><h6 style="font-size: 20px; font-weight: 700;"><?php echo $row['p_name']; ?></h6></a>
         							
         									<p style="font-size: 11px;"><?php echo $row['p_des']; ?></p>

     <a href="../post_view.php?id=<?php echo $row['id']; ?>"> 
     <input type="button" name="" value="Read More" class="btn btn-dark rounded-pill buttt" style="margin-top: "><br><br>
         							</div>
         						</div>
         					</div>
         				</div>
         			</div>

         				
         		</div>
         		</center>
         	</div>
         </div>
 
 

       
      <br>





<?php

}

?>





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