<?php
    include('database.php');
  
    
    $name = $_POST['name'];
    $cnic = $_POST['cnic'];
    $vaccine = $_POST['vaccine'];
    $dor = $_POST['dor'];
    $fdd = $_POST['fdd'];
    $sdd = $_POST['sdd'];
    $bbd = $_POST['bbd'];
    $stafid = $_POST['stafid'];


   

   
            $check = mysqli_query($con, " INSERT INTO patient ( patient_name, patient_cnic, vaccine, dateregister, Firstdosedate, secdosedate, boosterdate, staf_id) VALUES ( '$name', '$cnic', '$vaccine', '$dor', '$fdd', '$sdd', '$bbd', '$stafid')") or die(mysqli_error($con));
            
            header('location:patient.php?u=success');

        
    
?>