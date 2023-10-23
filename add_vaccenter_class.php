<?php
    include('database.php');
  
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

   

   
            $check = mysqli_query($con, " insert into vacc_center(center_name, address,phone) VALUES ('$name','$address','$phone' )") or die(mysqli_error($con));
            
            header('location:hospital.php?u=success');

        
    
?>