
<html>

<head>
   <title>HEALTHY APPLES</title>
   <link href="images/1.jpg" rel="icon">
   <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
   <link href="fa/css/font-awesome.css" rel="stylesheet">
   <link href="bootstrap1234/css/bootstrap.css" rel="stylesheet">
   <link href="css/admin.css" rel="stylesheet">

</head>
<style>
   body {
      background-color: rgb(12, 43, 20, 0.3);
   }
   #bars{
      display: none;
   }
   
   @media(max-width:1000px)
   {
      #bars{
         display: block;
         cursor: pointer;
      }
    nav ul{
        position: fixed;
        width: 100%;
        height:100vh;
        background: white;
        top:80px;
        left:-100%;
        text-align: center;
        transition: all.5s;
     }
     nav ul li{
        display:block;
        margin: 50px 0;
        line-height: 30px;
     }
     nav ul li a{
        font-size:20px;
     }
     a:hover,a.active{
        background: none;
        color: #0082e6;
     }
     #bars:checked ~ ul {
        left:0;
     }
     #box1{
        font-size: 10px;
     }
   }
</style>

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
                       <span>Vaccine Storage Data</span>
                    <span></span>
                    <span><a href="add_vac_storage.php" class="btn btn-info"> Insert new</a></span>
                       </div>
                    </div>
                    <div class="card-body"> 
                    <table class="table table-striped text-xs">
                        <thead class="thead-dark">
                            <tr> 
                            <th> ID </th>
                               
                                <th> Date_stored </th>
                                <th> Date_removal</th>
                                <th> No.of.units</th>
                                <th> Temprature</th>
                                <th> Hospital_name</th>
                                <th> Vaccine_name</th>
                                <th>Action</th>


                             
                                
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                            include('database.php');
                            $result = mysqli_query($con,  "SELECT * 
                          FROM vacc_storage_hospital
                          JOIN hospital h1
                            ON h1.hospital_id = vacc_storage_hospital.hospital_id
                          JOIN vaccine
                            ON vacc_storage_hospital.vaccine_id = vaccine.vaccine_id;");
                         ;

                            while($row = mysqli_fetch_array($result))
                            { ?>
                                <tr> 
                                      <td> <?php echo $row['storage_id'];  ?> </td>
                                    <td> <?php echo $row['date_stored'];  ?> </td>
                                    <td> <?php echo $row['date_removal'];  ?> </td>
                                    <td> <?php echo $row['n_of_units'];  ?> </td>
                                    <td> <?php echo $row['temprature'];  ?> </td>
                                    <td> <?php echo $row['hospital_name'];  ?> </td>
                                    <td> <?php echo $row['vac_name'];  ?> </td>
                                    <td><a  class="btn btn-info" href="update_vachos.php?id=<?php echo $row['storage_id']?>">Update</a></td>



                                   
                                       
                               
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