
<!--Backup File-->

<!--Index Page-->
<?php 

setcookie("username","PiyushBhai",time()+60*60*24*10);

 $_COOKIE["username"];

?>


<?php

session_start();

if ($_SESSION['email'] == true) 
{
 echo $_SESSION['email'];
}
else
{
  header("location:login/login.php");
}


?>

<a href="logout.php">Logout</a>
<!DOCTYPE html>
<html>
<head>
  <title>All Post</title>
</head>
<body>










<center>
  <table border="1">
  <tr>
    <td><a href="index.php">Home</a></td>
    <td><a href="trading.php">Trading</a></td>
    <td><a href="search.php">Search</a></td>
    <td><a href="catagori.php">Catagori</a></td>
    <td><a href="addpost.php">Add Post</a></td>
    <td><a href="notification.php">Notification</a></td>
    <td><a href="savedpost.php">Saved</a></td>
    <td><a href="profile.php">Profile</a></td>
    <td><a href="likedpost.php">Liked Post</a></td>
    <td><a href="message.php">Message</a></td>
  </tr>
</table>
</center>








<div style="display: flex;">
  <a href="addstory.php"><input type="button" name="" value="Add Story"></a>
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

$sql = " select * from follow where user_id = '$id' ";

$run = mysqli_query($conn,$sql);

$roadw = mysqli_fetch_array($run);

$iddas = $roadw['foll_id'];

?>



<?php 



$conn = mysqli_connect("localhost","root","","demo");

$sql = " select * from addstory where user_id = '$iddas' ";

$run = mysqli_query($conn,$sql);

while ($rowaa = mysqli_fetch_array($run)) 
{
  ?>





<?php



 $conn = mysqli_connect("localhost","root","","demo");

 $sql = " select * from addstory where user_id = '$id' ";

 $runsasd = mysqli_query($conn,$sql);

 $rsasow = mysqli_fetch_array($runsasd);

  ?>



<a href="view_story.php?id=<?php echo $rsasow['user_id']; ?>"><img src="../storyimg/<?php echo $rsasow['story_img']; ?>"  height="50" width="50" style="border-radius: 50px; margin: 6px;"><p style="position: absolute; top: 70px; left:123; list-style: none; font-size: 25px; color: red;">+</p></a>




   <?php

       
        $rowno = mysqli_fetch_array($run);

   ?>

 

  






  <a href="view_story.php?id=<?php echo $rowno['user_id']; ?>"><img src="../storyimg/<?php echo $rowno['story_img']; ?>" height="50" width="50" style="border-radius: 50px; margin: 6px;"></a>








<?php 
}

?>

</div>



















<br>

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

$sql = " select * from post where user_id != '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  
  $p_tag = $row['p_tag'];

?>

<br>
<form method="post">
  <center>
    <table border="1">
       <?php 

              $conn = mysqli_connect("localhost","root","","demo");

              $u_id = $row['user_id'];
            
              $sql1 = " select * from regi where id = '$u_id' ";

              $runs = mysqli_query($conn,$sql1);

              $rows = mysqli_fetch_array($runs);



          ?>
      <td><div style="display: flex;"><a href="profile_detail.php?id=<?php echo $rows['id']; ?>"><img src="../Image/<?php echo $rows['p_img']; ?>" height="30" width="30" style="border-radius: 50px;"> <?php echo $rows['f_name']; ?> <?php echo $rows['l_name']; ?></a></div></td>
  <tr>
    <td><img src="../Image/<?php echo $row['p_img'] ?>" height="100" width="100" style="border-radius: 10px;"></td>
  </tr>
  <tr>
    <td><a href="post_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['p_name']; ?></a></td>
  </tr>
  <tr>
    <td><?php echo $row['p_des']; ?></td>
  </tr>
  <tr>
          
         
         


<?php 

              $conn = mysqli_connect("localhost","root","","demo");

              $u_id = $row['user_id'];
            
              $sql1 = " select * from follow where user_name = '$p_tag'";

              $ruans = mysqli_query($conn,$sql1);

              $arows = mysqli_fetch_array($ruans);

 ?>
<td>Tag = <a href="profile_detail.php?id=<?php echo $arows['user_id'] ?>"><?php echo $row['p_tag']; ?></td>




         </td>

  
  </tr>
</table>
  </center>
</form>

<?php

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
  header("Refresh:10");
}
else
{
  echo "Not Done";
}


?>




</body>
</html>