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
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div style="border:2px solid #eee; border-radius:5px; margin-left:10px; width:430px; height:250px;">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="col-md-3" style="width: 3%;">
                                                <table style="width: 136px; text-transform:uppercase; font-family:"Times New Roman", Times, serif;">
                                                    <?php foreach ($record as $value) {
                                                                

                                                        echo"<tr> <td style=\"font-size:12px;\"><b>JAMHURI YA KENYA</b></br></td> </tr>
                                                        <tr> <td style=\"font-size:12px;\">SERIAL No: <b>$value->serialnumber</b></td> </tr>
                                                        <tr> <td style=\"font-size:9px;\">FULL NAMES</td> </tr>
                                                        <tr> <td style=\"font-size:11px;\"><b>$value->fname $value->mname $value->lname</b></TD> </tr>
                                                    </table> 
                                                </br></br>
                                                    <table>
                                                        <tr> <td><img style=\"width:100px !important; height:100px !important;\" src=\"../../../images/$value->picture\"/></td> </tr>
                                                    </table>
                                                </div>
                                            </td>
                                            <td class=\"col-md-2\" style=\"width: 1.666667%;\">
                                                <div>
                                                    <table style=\"width: 80px; text-transform:uppercase; font-family:\"Times New Roman\", Times, serif;\">
                                                        <tr><td><img style=\"width:60px; height:60px;\" src=\"../../../assets/img/coatofarms.jpg\"/></td></tr>
                                                        <tr><td style=\"font-size:9px;\">DATE OF BIRTH</td></tr>
                                                        <tr><td style=\"font-size:12px;\"><b>$value->date_of_birth</b></td></tr>
                                                        <tr><td style=\"font-size:9px;\">SEX</td></tr>
                                                        <tr><td style=\"font-size:12px; text-transform:capitalize;\"><b style=\"text-transform:capitalize;\">$value->sex</b></td></tr>
                                                        <tr><td style=\"font-size:9px;\">DISTRICT OF BIRTH</td></tr>
                                                        <tr><td style=\"font-size:12px;\"><b>$value->district_of_birth</b></td></tr>
                                                        <tr><td style=\"font-size:9px;\">PLACE OF ISSUE</td></tr>
                                                        <tr><td style=\"font-size:12px;\"><b>$value->place_of_issue</b></td></tr>
                                                        <tr><td style=\"font-size:9px;\">DATE  OF ISSUE</td></tr>
                                                        <tr><td style=\"font-size:12px;\"><b>3.30.2015</b></td></tr>
                                                        <tr><td style=\"font-size:9px;\">HOLDERS SIGN</td></tr>
                                                        <tr><td><img style=\"width:100px !important; height:20px !important;\" src=\"../../../files/sign/$value->sign\"/></td></tr>
                                                    </table>
                                                </div>
                                            </td>
                                            <td style=\"width: 30.666667%;\">
                                                <div class=\"col-md-2\">
                                                   <table>
                                                        <tr><td style=\"font-size:11px;\"><b>REPUBLIC OF KENYA</b></td></tr>
                                                        <tr><td style=\"font-size:11px;\">ID No:<b>$value->idnumber</b></td></tr>
                                                        <tr><td><img style=\"width:80px; height:80px;\" src=\"../../../assets/img/coat.gif\"/></td></tr>
                                                        <tr><td><img style=\"width:100px !important; height:100px !important;\" src=\"../../../files/thumbs/$value->thumb\"/></td></tr>";
                                                    }?>
                                                    </table> 
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        <br/>
                        <div>
                            <a style="margin-left:20px;" class="btn btn-primary" onclick="javascript:window.print();this.hide();" target="_blank">Print</a>
                        </div> 
                    </div>                   
                </div>             
            </div>
                 <!-- /. ROW  -->        
        </div>
             <!-- /. PAGE INNER  -->
</div> 
        <!-- /. PAGE WRAPPER  -->

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../../assets/js/jquery.js"></script>

    <script type="text/javascript">
        
    </script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../../assets/js/custom.js"></script>
    
   
</body>
</html>
