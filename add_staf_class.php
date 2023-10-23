<?php
    include('database.php');
  
    
    $name = $_POST['name'];
    $adres = $_POST['adres'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];
  
   

   
            $check = mysqli_query($con, " insert into staf(staf_name, staf_adress, staf_phone, hospital_id) VALUES ('$name','$adres','$phone','$id' )") or die(mysqli_error($con));
            
            header('location:staf.php?u=success');

        
    
?>