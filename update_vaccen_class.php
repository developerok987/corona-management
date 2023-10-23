<?php
    include('database.php');

    $id = $_POST['id'];
    $username = $_POST['ds'];
    $fullname = $_POST['dr'];
    $password = $_POST['nou'];
    $email = $_POST['temp'];
    $phone = $_POST['hi'];
    $idd = $_POST['vi'];
$check = mysqli_query($con, "UPDATE `vac_storage_center` SET `date_stored`='$username',`date_removal`='$fullname',`n_of_units`='$password',`temprature`='$email',`center_id`='$phone',`vaccine_id`='$idd' WHERE storage_id='$id'");

    header('location: update_vaccen.php?u=success&id='.$id.'');

    
?>



