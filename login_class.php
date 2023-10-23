<?php
include('database.php');
include('session.php');

 if(isset($_POST['userlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

$data= mysqli_query($con, "select *  from users where username = '$username' and password='$password' "); 

$count= mysqli_num_rows($data);
$result=mysqli_fetch_array($data);

if($count > 0)
{
    
        session_start();
        $_SESSION['username'] = $result['username'];
        $_SESSION['id'] = $result['id'];
        echo "<script>window.location='index1.php';</script>";
}
    else{
        header('location:index.php?u=2');
    }
    
}
