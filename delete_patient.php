<?php
    include('database.php');

    $id = $_GET['id'];
    

    $check = mysqli_query($con, "delete from patient where patient_id='$id' ");

    header('location: patient.php');

    ?>
    