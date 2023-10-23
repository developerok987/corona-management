<html>
<head><title>HEALTHY APPLES</title>
<link href="images/1.jpg" rel="icon">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="fa/css/font-awesome.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">


</head>


<body class="bg">
<?php include ('navbar.php') ?>
<div id="wrapper">

            
            </div>
            <div class="container-fluid mt-4" id="content-wrapper">
              <div class="row">
               <div class="col-md-12">
              <div class="card">
             <div class="card-header p-3 bg-primary text-white">
                 <span>Storage data </span>
                </div>
            <div class="card-body">
            <?php
            include('database.php');
            $result = mysqli_query($con, "select * from vacc_storage_hospital where storage_id='$_GET[id]'");
            while ($row = mysqli_fetch_array($result))
            { ?>
         <form method="POST" action="update_vachos_class.php">
                 <div class="form-group">
                   <label> ID </label>
                      <input type="text" class="form-control" name="id" value="<?php echo $row ['storage_id'] ?>" readonly></input>
                   </div>
                   <div class="form-group">
                      <label> Date stored </label>
                         <input type="date" class="form-control" name="ds" value="<?php echo $row ['date_stored'] ?>"></input>
                   </div>
                   <div class="form-group">
                   <label> Date Removal </label>
                         <input type="date" class="form-control" name="dr" value="<?php echo $row ['date_removal'] ?>"></input>
                   </div>
                   <div class="form-group">
                      <label> No.of units </label>
                         <input type="text" class="form-control" name="nou" value="<?php echo $row ['n_of_units'] ?>"></input>
                   </div>
                   <div class="form-group">
                      <label> Temprature </label>
                          <input type="text" class="form-control" name="temp" value="<?php echo $row ['temprature'] ?>"></input>
                   </div>
                   <div class="form-group">
                       <label> Hospital_id </label>
                           <input type="text" class="form-control" name="hi" value="<?php echo $row ['hospital_id'] ?>"></input>
                   </div>
                   <div class="form-group">
                       <label> Vaccine_id </label>
                           <input type="text" class="form-control" name="vi" value="<?php echo $row ['vaccine_id'] ?>"></input>
                   </div>
                   <div class="form-group text-center">
                           <input type="submit" class="btn btn-primary" name="submit" value="update"></input>
                   </div>
           <?php }
           ?>
         </form>
        
        </div>
        </div>
        </div>
        
   </div>   
    

</div>           <script src="jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>




</html>
