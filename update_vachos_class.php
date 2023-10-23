<?php
    include('database.php');

    $id = $_POST['id'];
    $username = $_POST['ds'];
    $fullname = $_POST['dr'];
    $password = $_POST['nou'];
    $email = $_POST['temp'];
    $phone = $_POST['hi'];
    $idd = $_POST['vi'];
$check = mysqli_query($con, "UPDATE `vacc_storage_hospital` SET `date_stored`='$username',`date_removal`='$fullname',`n_of_units`='$password',`temprature`='$email',`hospital_id`='$phone',`vaccine_id`='$idd' WHERE storage_id='$id'");

    header('location: update_vachos.php?u=success&id='.$id.'');

    
?>



