
<html>
<head> 
<title> Home </title>
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
                        <span>Add New Staf</span>
                    </div>
                    <div class="card-body"> 

                          
                                <form method="POST" action="add_staf_class.php" enctype="multipart/form-data" required>
                                <div class="form-group">
                                    
                                <div class="form-group">
                                    <label > Name </label>
                                    <input type="text" class="form-control" name="name" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > Address </label>
                                    <input type="text" class="form-control" name="adres" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="" required></input>
                                </div>
                                <div class="form-group">
                                    <label > Hospital_id</label>
                                    <input type="text" class="form-control" name="id" placeholder="" required></input>
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


