<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ID</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='../../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('home'); ?>">ID</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
    <a href="<?php echo site_url('login'); ?>" class="btn btn-danger square-btn-adjust">Logout</a>
 </div>
 <div style="color: white; padding: 10px 0px 5px 50px; float: right; font-size: 16px;">
  <a href="<?php echo site_url('home/profile'); ?>" class="btn btn-primary round-btn-adjust"> 
    <?=$this->session->userdata('username'); ?>
  </a>
</div>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                  <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../../../assets/img/kenya_flag.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a  href="<?php echo site_url('home'); ?>"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                    <?php $sections = $this->session->userdata('sections');
                         if($sections[0]){    ?>
                      <li>
                        <a  href="<?php echo site_url('home/addclerk'); ?>"><i class="fa fa-user fa-2x"></i>Add Clerk</a>
                    </li>
                    <?php } if($sections[1]){    ?>
                    <li>
                        <a  href="<?php echo site_url('home/apply'); ?>"><i class="fa fa-book fa-2x"></i>Application</a>
                    </li> 
                    <?php } ?>
                </ul>               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                     <h2>Add New Clerk</h2>   
                        <fieldset>
                        <div class="panel-body">
                          <?php echo validation_errors(); ?>
                                <?php echo form_open('home/update'); foreach ($record as $value) { ?>
                                    <div class="form-group input-group">
                                            <input type="hidden" name="id" class="form-control" value="<?php echo $value->id; ?>"/>
                                    </div>
                                    <label>First Name</label>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                            <input type="text" name="fname" class="form-control" value="<?php echo $value->fname; ?>"/>
                                        </div>
                                    <label>Last Name</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                            <input type="text" name="lname" class="form-control" value="<?php echo $value->lname; ?>" />
                                        </div>
                                    <label>Phone Number</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                            <input type="text" name="phone" class="form-control"  value="<?php echo $value->phone; ?>"/>
                                        </div>
                                    <label>User Name</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                            <input type="text" name="username" class="form-control"  value="<?php echo $value->username; ?>"/>
                                        </div>
                                    <label>User Type</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                            <input type="text" name="usertype" class="form-control"  value="<?php echo $value->usertype; ?>"/>
                                        </div>
                                    <label>Password</label>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control" value="<?php echo $value->password; ?>" />
                                        </div>
                                    <button type="submit" class="btn btn-success" style="float:right;">Update Clerk</button>
                                <?php } echo form_close(); ?>
                            </div>
                    </fieldset>
                       
                    </div>                    
                    <div class="col-md-3"></div>

                </div>
                 <!-- /. ROW  -->        
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../../assets/js/custom.js"></script>
</body>
</html>
