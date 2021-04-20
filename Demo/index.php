<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


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
  overflow: scroll;
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




  </style>
  </head>
  <body>





<?php include('header.php'); ?>







<br><br>

       
       <div class="container">
         <div class="row">
           <div class="col-md-8">
             <div style="background: #fff; border-radius: 10px;">
              




<?php

$conn = mysqli_connect("localhost","root","","demo");

$sql = " select * from post ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  
  $p_tag = $row['p_tag'];

?>


<form method="post">
  <center>
    <table>
       <?php 

              $conn = mysqli_connect("localhost","root","","demo");

              $u_id = $row['user_id'];
            
              $sql1 = " select * from regi where id = '$u_id' ";

              $runs = mysqli_query($conn,$sql1);

              $rows = mysqli_fetch_array($runs);



          ?>
      <td style="background: #fff;" class="shadow-lg"><div style="display: flex; margin-left: 15px; margin-top: 8px; margin-bottom: 8px;"><a href="user/login/login.php"><img src="Image/<?php echo $rows['p_img']; ?>" height="50" width="50" style="border-radius: 50px;"> <span style="margin-left: 10px;"><?php echo $rows['f_name']; ?> <?php echo $rows['l_name']; ?></span></a></div></td>
  <tr>
    <td>
           
           <?php
            
            if ($row['type_cont'] == 'Image') 
            {
             ?>
             <img src="Image/<?php echo $row['p_img'] ?>" style="height: 500px; width: 100%; object-fit: cover;" class="">
             <?php
            }
            else
            {
              ?>
<video src="Image/<?php echo $row['p_img'] ?>" style="height: 500px; width: 100%; object-fit: cover;" class=""></video>
              <?php
            }


           ?>


      </td>
  </tr>
  <tr>
    <td><a href="user/login/login.php"><p style="font-size: 20px; margin: 10px; margin-left: 16px;"><?php echo $row['p_name']; ?></p></a></td>
  </tr>
  <tr>
    <td>
      <?php 

              $conn = mysqli_connect("localhost","root","","demo");

              $u_id = $row['user_id'];
            
              $sql1 = " select * from likepost where likeby_name = '$p_tag'";

              $ruans = mysqli_query($conn,$sql1);

              $arows = mysqli_fetch_array($ruans);

            
 ?>
<a href="user/login/login.php" style="font-size: 10px; color: #18A0FE; margin-left: 13px; margin-top: -50px;">#<?php echo $row['p_tag']; ?></a>

      <p style="font-size: 11px; padding: 15px; margin-top: -20px;"><?php echo $row['p_des']; ?></p>

     <a href="user/login/login.php"> 
     <input type="button" name="" value="Read More" class="btn btn-dark rounded-pill buttt" style="margin-top: -16px; margin-left: 12px; ">
     </a>
    </td>
  </tr>
  <tr>
          
         
         







         </td>

  
  </tr>
</table>
<br>
  </center>
</form>

<?php

}

?>
<br>

             </div>
           </div>
           <div class="col-md-4 d-none d-sm-block">
             
<div style="background: #fff; border-radius: 10px;">
  
<br>

<div class="container">
  <h6 style="font-size: 12px;">Suggestion</h6>
</div>

<?php
            
$conn = mysqli_connect("localhost","root","","demo");

$sql = " select * from regi ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

       $id = $row['id'];
    ?>


            

 <a href="user/login/login.php"> <div style="display: flex; margin-bottom: 12px;">

    <img src="Image/<?php echo $row['p_img']; ?>" height="50" width="50" style="border-radius: 50px; margin-top: px; margin-left: 20px;">
    <span style="margin-top: 6px; margin-left: 12px; font-size: 12px;"><?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?><br><span style="color: gray; font-size: 10px;">Suggestions For You</span> </span>
    
  </div></a>
   

 

     <?php } ?>                  
         
         <p style="font-size: 8px; text-align: center; padding: 6px; color: gray;">@2021 Piyush Babhulakar</p>


</div>
           </div>
         </div>
       </div>




<br>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>