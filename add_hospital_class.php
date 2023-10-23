<?php
    include('database.php');
  
    
    $name = $_POST['name'];
    $address = $_POST['address'];
   
   

   
            $check = mysqli_query($con, " insert into hospital(hospital_name, hospital_address) VALUES ('$name','$address' )") or die(mysqli_error($con));
            
            header('location:hospital.php?u=success');

        
    
?>