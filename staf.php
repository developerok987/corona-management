
<html>

<head>
   <title>HEALTHY APPLES</title>
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
                       <span>Staff Data</span>
                    <span><a href="add_staf.php" class="btn btn-info"> Add Staff</a></span>
                       </div>
                    </div>
                    <div class="card-body"> 
                    <table class="table table-striped text-xs">
                        <thead class="thead-dark">
                            <tr> 
                            <th> ID </th>
                               
                                <th> Name </th>
                                <th> address</th>
                                <th> phone </th>
                                <th> hospital  </th>
                                
                                
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                            include('database.php');
                            $result = mysqli_query($con,  "select * from staf join hospital on staf.hospital_id=hospital.hospital_id ");
                            while($row = mysqli_fetch_array($result))
                            { ?>
                                <tr> 
                                      <td> <?php echo $row['staf_id'];  ?> </td>
                                    <td> <?php echo $row['staf_name'];  ?> </td>
                                    <td> <?php echo $row['staf_adress'];  ?> </td>
                                    <td> <?php echo $row['staf_phone'];  ?> </td>
                                    <td> <?php echo $row['hospital_name'];  ?> </td>
                                    
                                       
                               
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