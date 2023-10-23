<?php
    include('database.php');
  
    
    $name = $_POST['stored'];
    $cnic = $_POST['removal'];
    $vaccine = $_POST['units'];
    $temp = $_POST['temp'];
    $dor = $_POST['hos_id'];
    $fdd = $_POST['vac_id'];
   


   

   
            $check = mysqli_query($con, " INSERT INTO vacc_storage_hospital ( date_stored, date_removal, n_of_units, temprature, hospital_id, vaccine_id) VALUES ( '$name', '$cnic', '$vaccine','$temp', '$dor', '$fdd')") or die(mysqli_error($con));
            
            header('location:vac_storage_hospital.php?u=success');

        
    
?>