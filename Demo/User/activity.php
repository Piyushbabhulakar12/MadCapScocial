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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<title>Profile</title>
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



<?php include('navbar.php'); ?>




<br><br><br>


<div class="container"> 
  <h2 style="font-weight: 600;">Activity</h2>
</div>




<div class="container mt-4">
  <div class="row">
     <?php

       $is = $_GET['id'];
        
        $conn = mysqli_connect("localhost","root","","demo");

        $sql = " select * from addstory where user_id = '$is' ";

        $run = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_array($run)) 
        {
        
      ?>
<div class="col-xl-3 col-md-6 col-sm-6 col-6 mt-3">

        <a data-fancybox="images" data-fancybox data-caption="<?php echo $row['story_title']; ?>" href="../storyimg/<?php echo $row['story_img']; ?>"><img src="../storyimg/<?php echo $row['story_img']; ?>" style="height: 150px; width: 100%; border-radius: 10px;"></a>


 </div>
 <?php } ?>
  </div>
</div>

  









<script>
  $('[data-fancybox="images"]').fancybox({
  buttons : [ 
    'slideShow',
    'share',
    'fullScreen',
    'download',
    'close'
  ],
  thumbs : {
    autoStart : false
  }
});

$('[data-fancybox="gallery"]').fancybox({
  thumbs : {
    autoStart : true
  }
});
  
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</form>
</body>
</html>