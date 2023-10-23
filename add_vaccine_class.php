<?php
    include('database.php');
  
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $sideeffect = $_POST['side_effect'];
    $suitableforage = $_POST['suitable_for_age'];
    $mfg_date = $_POST['mfg_date'];
    $exp_date = $_POST['exp_date'];
   

   
            $check = mysqli_query($con, " insert into vaccine(vac_name, vac_company, side_effect, suitableforage, mfg_date, exp_date) VALUES ('$name','$company','$sideeffect','$suitableforage','$mfg_date','$exp_date' )") or die(mysqli_error($con));
            
            header('location:vaccine.php?u=success');

        
    
?>