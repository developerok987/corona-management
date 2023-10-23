<?php
include('database.php');
session_start();

if(!isset($_SESSION['id']))
{
   
}
else if(isset($_SESSION['id']))
{
    $result = mysqli_query($con, "select * from users where id='$_SESSION[id]'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $loggedin_userid = $row['id'];
    $loggedin_username = $row['username'];
  

}

?>