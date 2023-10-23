
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
                       <span>Patients</span>
                   
                       </div>
                    </div>
                    <div class="card-body"> 
                    <table class="table table-striped text-xs">
                        <thead class="thead-dark">
                            <tr> 
                            <th> ID </th>
                               
                                <th> Name </th>
                                <th> Vaccine </th>
                                <th> Time </th>

                                
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                            include('database.php');
                            $result = mysqli_query($con,  "select * from dash");
                            while($row = mysqli_fetch_array($result))
                            { ?>
                                <tr> 
                                      <td> <?php echo $row['dash_id'];  ?> </td>
                                    <td> <?php echo $row['patient_name'];  ?> </td>
                                    <td> <?php echo $row['vaccine'];  ?> </td>
                                    <td> <?php echo $row['time'];  ?> </td>

                                       
                               
                                </tr>
                          <?php  }
                        ?>
                      
                        </tbody>   
                    </table>
                    <div class="row m-2">
        <div class="col-md-12">
            
        </div>
      </div>
   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header rounded p-3 bg-primary text-white">
                    
                       <div class="d-sm-flex justify-content-between">
                       <span>Hopitals Vaccine Data</span>
                   
                       </div>
                    </div>
                    <table class="table table-striped text-xs">
                        <thead class="thead-dark">
                            <tr> 
                            <th>Hospital name </th>
                               
                                <th> Hospital address </th>
                                <th> Vaccine</th>
                                <th> Units</th>

                                
                                
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                            include('database.php');
                            $result = mysqli_query($con,  "select * from farhan ");
                            while($row = mysqli_fetch_array($result))
                            { ?>
                                <tr> 
                                      <td> <?php echo $row['hospital_name'];  ?> </td>
                                    <td> <?php echo $row['hospital_address'];  ?> </td>
                                    <td> <?php echo $row['vac_name'];  ?> </td>
                                    <td> <?php echo $row['n_of_units'];  ?> </td>
                                    
                                    
                                       
                               
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