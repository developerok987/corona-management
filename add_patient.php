
<html>
<head> 
<title> Vaccine project</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="fa/css/font-awesome.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">
<link href="images/1.jpg" rel="icon">
</head>
<body id="page-top">
<?php include ('navbar.php') ?>

<div id="wrapper"  >
  
    <div class="container-fluid mt-4 p-4" id="content-wrapper" style="background-color: rgb(177, 174, 174) !important;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header rounded p-3 bg-primary text-white">
                        <span>Add New  Patient</span>
                    </div>
                    <div class="card-body"> 

                          
                                <form method="POST" action="add_patient_class.php" enctype="multipart/form-data" required>
                                <div class="form-group">
                                    
                                <div class="form-group">
                                    <label > Name </label>
                                    <input type="text" class="form-control" name="name" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label >patient_cnic</label>
                                    <input type="text" class="form-control" name="cnic" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > vaccine</label>
                                    <input type="text" class="form-control" name="vaccine" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > Date of regd</label>
                                    <input type="date" class="form-control" name="dor" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > first dose date</label>
                                    <input type="date" class="form-control" name="fdd" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > second dose date</label>
                                    <input type="date" class="form-control" name="sdd" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > booster dose date</label>
                                    <input type="date" class="form-control" name="bbd" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > staff_id</label>
                                    <input type="text" class="form-control" name="stafid" placeholder="" required></input>
                                </div>
                               
                               
                                
                                <div class="form-group text-center">
                                    
                                    <input type="submit" class="btn btn-primary" value="Submit"></input>
                                </div>
                                </form>
                            
                    </div>
              
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
</div>

<script src="jquery/jquery.min.js" ></script>
<script src="bootstrap/js/bootstrap.js" ></script>
</body>
</html>


