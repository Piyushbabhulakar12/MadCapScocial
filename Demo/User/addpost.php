
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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Add Post</title>
    <style type="text/css">
    	 body
      {
        font-family: 'Poppins', sans-serif;
        background: #ededed;
        font-weight: 600;
      }
.dropdown-item{
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
	color: black;
	border:none;
}
.buttt
{
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
}
.nav-link
{
	color: black;
}
.navbar-brand{
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
}
.div_center{
	 width: 350px;
       margin: auto;
        margin-top: 40px;
        padding: 10px;
}
 p{
      padding-top: 10px;
       font-size: 14px;
       color: #898989;
       font-weight: 600;
      }
      h2{
      	text-align: center;
      	font-weight: 600;
      	margin-top: 16px;
      }
      .inp
      {
         font-weight: 600;
         outline: none;
      }
      .btn{
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



     
    



<form method="post" enctype="multipart/form-data">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="background: #fff; border-radius: 10px;  border: none; " class="div_center">
                  
                       <h2>Upload Post</h2>



                     

                     	<p>Post Name</p>
                     	<input type="text" name="p_name" placeholder="Enter Post Name" class="form-control inp">
                     	<p>Post Describtion</p>
                     	<textarea cols="12" name="p_des" rows="5" placeholder="Enter Describtion" class="form-control inp"></textarea>
                     	<p>Post Image</p>
                     	<input type="file" name="p_img" class="form-control inp">
                      <p>Post Content</p>
                      <select name="type_cont" required class="form-control">
                        <option>Select</option>
                        <option value="Image">Photo</option>
                        <option value="Video">Video</option>
                      </select>
                     	<p>Post Tag</p>


<?php


$conn = mysqli_connect("localhost","root","","demo");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$iasd = $row['id'];

?>

<center><input type="submit" name="selects" value="Select" class="btn btn-outline-secondary" style="width: 150px;"><br><br></center>

<?php

if (isset($_POST['selects'])) 
{
	
?>

<?php


$conn = mysqli_connect("localhost","root","","demo");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$rsow = mysqli_fetch_array($run);

$id = $rsow['id'];

?>

<?php 

$conn = mysqli_connect("localhost","root","","demo");

$sql = " select * from follow where user_id = '$id' ";

$run = mysqli_query($conn,$sql);

while ($rowas = mysqli_fetch_array($run)) 
{
	
?>

<input type="checkbox" name="p_tag[]" value="<?php echo $rowas['foll_name'] ?> <?php echo $rowas['foll_namelast'] ?>"> &nbsp <?php echo $rowas['foll_name'] ?> <?php echo $rowas['foll_namelast'] ?><br>
<br>


<?php } ?>


<?php
  
}

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

                       $sql = " select * from regi where id = '$id' ";

                       $run = mysqli_query($conn,$sql);

                       while ($row = mysqli_fetch_array($run)) 
                       {
                       
                       
                     ?>


				<input type="hidden" name="catagori" value="<?php echo $row['catagori']; ?>">
				<?php } ?>



			<center><input type="submit" name="submit" value="Post" class="btn btn-primary" style="width: 200px;"></center>









                  
             


<br>

			</div>
		</div>
	</div>
</div>


   







    			</div>
    			
    		</div>
    	</div>
    </div>

<br><br>



<?php


$conn = mysqli_connect("localhost","root","","demo");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>





<?php

error_reporting(0);

$conn = mysqli_connect("localhost","root","","demo");

if (isset($_POST['submit'])) 
{
	
     $p_name = $_POST['p_name'];
     $p_des = $_POST['p_des'];
     $type_cont = $_POST['type_cont'];



       $p_img = $_FILES['p_img'] ['name'];

    $image_tmp_name = $_FILES['p_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img");


   $catagori = $_POST['catagori'];

   


    $p_taga = $_POST['p_tag'];
    $chk="";
     foreach($p_taga as $chk1)  
    {  
      $chk .= $chk1.",";  
    }  
 


        $sql = " insert into post (p_name,p_des,p_img,catagori,p_tag,user_id,type_cont) values ('$p_name','$p_des','$p_img','$catagori','$chk','$id','$type_cont') ";

        if (mysqli_query($conn,$sql)) 
        {
        echo '<meta http-equiv="refresh" content="0">';	
        }
        else
        {
        	echo "Not Done";
        }



}


?>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>