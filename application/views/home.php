<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ID</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
            <div style="color: white; padding: 15px 50px 5px 30px; float: right; font-size: 16px;">
              <a href="<?php echo site_url('logout'); ?>" class="btn main-temp1-back round-btn-adjust">Logout</a>
            </div>
            <div style="color: white; padding: 15px 20px 5px 0px; float: right; font-size: 20px;">
              <a href="<?php echo site_url('home/profile'); ?>" class="btn profile round-btn-adjust"> 
                <?=$this->session->userdata('username'); ?>
              </a>
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                  <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../assets/img/kenya_flag.png" class="user-image img-responsive"/>
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
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                  <?php } if($sections[2]){    ?>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <a style="text-decoration:none;" href="<?php echo site_url('home/clerktable'); ?>">
                    <div class="panel ">
                          <div class="main-temp-back">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-xs-6"> <i class="fa fa-user fa-4x"></i>CLERKS</div>
                                <div class="col-xs-6">
                                  <div class="text-temp"> VIEW </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </a>           
			
		    </div>
        <?php } if($sections[3]){    ?>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <a style="text-decoration:none;" href="<?php echo site_url('home/applicanttable'); ?>">          
    			<div class="panel ">
                          <div class="main-temp1-back">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-xs-6"> <i class="fa fa-fa fa-bars fa-4x"></i> APPLICANT</div>
                                <div class="col-xs-6">
                                  <div class="text-temp"> EDIT </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
           </a>
		     </div>
         <?php } if($sections[4]){    ?>
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <a style="text-decoration:none;" href="<?php echo site_url('home/tes'); ?>">          
          <div class="panel ">
                          <div class="main-temp-back">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-xs-6"> <i class="fa fa-fa fa-table fa-4x"></i>USERS LOGS </div>
                                <div class="col-xs-6">
                                  <div class="text-temp"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
           </a>
         </div>
       <?php } ?>
          <!--<div class="col-md-3 col-sm-6 col-xs-6"> 
          <div class="panel ">
                          <div class="main-temp-back">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Newyork City </div>
                                <div class="col-xs-6">
                                  <div class="text-temp"> 10° </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-6"> 
          <div class="panel ">
                          <div class="main-temp-back">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Newyork City </div>
                                <div class="col-xs-6">
                                  <div class="text-temp"> 10° </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
         </div> 
         

                      <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                   <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div> -->
		     </div>
			</div>          
    </div>
          <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
