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
 <div style="color: white; padding: 15px 20px 5px 0px; float: right; font-size: 20px;">
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
                <div class="well">
                    <div class="row">
                    <div  class="col-md-1"></div>
                    <div class="col-md-5">
                    <fieldset>
                        <legend><h2>Applicant Details</h2></legend>
                        <div class="panel-body">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open_multipart('home/updateapp'); foreach ($record as $value) { ?>
                                
                                    <div class="form-group input-group">
                                        <!-- <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span> -->
                                        <input type="hidden" name="id"  class="form-control" value="<?php echo $value->id; ?>"/>
                                    </div>
                                    <label>First Name</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="fname" type="text" class="form-control" value="<?php echo $value->fname; ?>"/>
                                    </div>
                                    <label>Middle Name</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="mname" type="text" class="form-control" value="<?php echo $value->mname; ?>" />
                                    </div>
                                    <label>Last Name</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="lname" type="text" class="form-control" value="<?php echo $value->lname; ?>"/>
                                    </div>
                                    <br/>
                                    <label>Upload Picture</label>
                                    <div class="">
                                       <!-- <span class="input-group-addon"><i class="fa fa-user"  ></i></span>  -->
                                        <input type="file" name="picture" class="" value="" /> 
                                    </div><br/>
                                    <label>District of Birth</label>
                                      <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="district_of_birth" type="text" class="form-control" value="<?php echo $value->district_of_birth; ?>"/>
                                        </div>
                                    <label>Place of issue</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="place_of_issue" type="text" class="form-control" value="<?php echo $value->place_of_issue; ?>"/>
                                    </div>
                                    <label>Date of Birth</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="date_of_birth" type="text" class="form-control" value="<?php echo $value->date_of_birth; ?>"/>
                                    </div> 
                                    <label>Gender</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <select name="sex" id="sex" class="form-control" value="<?php echo $value->sex; ?>">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>                               
                            </div>
                    </fieldset>
                    </div>
                    <div class="col-md-5">
                    <fieldset>
                        <legend><h2>Applicant Parent Details</h2></legend>
                        <div class="panel-body">
                                <label>First Name</label>
                                <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="pfname" type="text" class="form-control" value="<?php echo $value->pfname; ?>"/>
                                    </div>
                                <label>Middle Name</label>
                                 <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="pmname" type="text" class="form-control" value="<?php echo $value->pmname; ?>"/>
                                    </div>
                                    <label>Last Name</label>
                                     <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="plname" type="text" class="form-control" value="<?php echo $value->plname; ?>"/>
                                    </div>
                                <label>District</label>
                                  <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="district" type="text" class="form-control" value="<?php echo $value->district; ?>"/>
                                    </div>
                                <label>Division</label>
                                <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="division" type="text" class="form-control"  value="<?php echo $value->division; ?>"/>
                                </div>
                                <label>Location</label>
                                <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="location" type="text" class="form-control" value="<?php echo $value->location; ?>"/>
                                </div>
                                <label>Sublocation</label>
                                <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                        <input name="sublocation" type="text" class="form-control" value="<?php echo $value->sublocation; ?>"/>
                                </div>
                                <button type="submit" class="btn btn-success" style="float:right;">UPDATE</button>                           </form>
                        </div>
                    <?php } echo form_close(); ?>
                    </fieldset>
                    </div>
                    
                </div>
                </div>
                    <div id="page-inner">
        <div class="row" style="margin-left:70px;">
        <div class="well col-md-3">
            <?php echo form_open_multipart('home/sign'); ?>
            <div class="form-group input-group">
                <input type="file" name="sign"/>
                <input type="submit" class="btn btn-primary" value="Upload Signature" id="pic" /> 
            </div>
            <?php echo form_close(); ?>
        </div>
        <div class=" col-md-1"></div>
        <div class="well col-md-3">
            <?php echo form_open_multipart('home/thumb'); ?>
            <div class="form-group input-group">
                <input type="file" name="fingerprint"/> 
                <input type="submit" class="btn btn-primary" value="Upload Thumbprint"  id="pic"/>
            </div>
            <?php echo form_close(); ?>
        </div>
        <div class=" col-md-1"></div>
        <div class="well col-md-3">
            <?php echo form_open_multipart('home/fingerprints'); ?>
            <div class="form-group input-group">
                <input type="file" name="fingerprints"/> 
                <input type="submit" class="btn btn-primary" value="Upload Fingerprints" id="pic" />
            </div>
            <?php echo form_close(); ?>
        </div> 

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
    <script src="../../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../../assets/js/custom.js"></script>
    
   
</body>
</html>
