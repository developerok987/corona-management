
<html>

<head>
   <title>Vaccine Project</title>
   <link href="images/1.jpg" rel="icon">
   <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
   <link href="fa/css/font-awesome.css" rel="stylesheet">
   <link href="bootstrap1234/css/bootstrap.css" rel="stylesheet">
   <link href="css/admin.css" rel="stylesheet">

</head>


<body>
   <?php include('navbar.php'); ?>
   <div class="row m-2">
        <div class="col-md-12">
            
        </div>
      </div>
    <div class="container-fluid mt-4 p-4" id="content-wrapper" style="background-color: rgb(177, 174, 174) !important;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header rounded p-3 bg-primary text-white">
                    
                       <div class="d-sm-flex justify-content-between">
                       <span>Patient Data</span>
                    <span><a href="add_patient.php" class="btn btn-info"> Add Patient</a></span>
                       </div>
                    </div>
                    <div class="card-body"> 
                    <table class="table table-striped text-xs">
                        <thead class="thead-dark">
                            <tr> 
                            <th> ID </th>
                               
                                <th> Name </th>
                                <th> cnic</th>
                                <th> Vaccine </th>
                                <th> dateregister </th>
                                <th> firstdosedate </th>
                                <th> secdosedate </th>
                                <th> boosterdate </th>
                                <th> staf_name </th>
                                <th> Action</th>

                                
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                            include('database.php');
                            $result = mysqli_query($con,  "select * from patient join staf on staf.staf_id=patient.staf_id");
                            while($row = mysqli_fetch_array($result))
                            { ?>
                                <tr> 
                                      <td> <?php echo $row['patient_id'];  ?> </td>
                                    <td> <?php echo $row['patient_name'];  ?> </td>
                                    <td> <?php echo $row['patient_cnic'];  ?> </td>
                                    <td> <?php echo $row['vaccine'];  ?> </td>
                                    <td> <?php echo $row['dateregister'];  ?> </td>
                                    <td> <?php echo $row['Firstdosedate'];  ?> </td>
                                    <td> <?php echo $row['secdosedate'];  ?> </td>
                                    <td> <?php echo $row['boosterdate'];  ?> </td>
                                    <td> <?php echo $row['staf_name'];  ?> </td>
                                    <td> <a href="delete_patient.php?id=<?php echo $row['patient_id']; ?>" class="btn btn-info"> Delete</a></td>

                                       
                               
                                </tr>
                          <?php  }
                        ?>
                      
                        </tbody>   
                    </table>
                    </div>
                    
              
                </div>
            </div>
        
        </div>
    </div>
</div>
  </body>