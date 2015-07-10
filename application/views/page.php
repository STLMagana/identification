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
   

   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="../../../assets/js/jquery.js"></script>
   
    <script src="../../../assets/js/jquery-ui.js"></script>

    <link href="../../../assets/js/jquery-ui.css" rel="stylesheet"> 
        <script type="text/javascript">
            $(function(){
                console.log('changing');

               $("#date_of_birth").datepicker({format: 'yyyy-mm-dd'});
             });
        </script>
    <style type="text/css">
        label 
        {
            display: block;
            margin-bottom: -1em;
            font-size: 15px;
            font-family:"Times New Roman", Times, serif;
        }

        input 
        {
            background-color: transparent; 
            border-style: solid; 
            border-width: 0px 0px 1px 0px; 
            border-color: #9e9e9e;
            display: block;
            position: relative;
            left: 9em;
            top: -0.5em;
            text-transform: uppercase;
            font-family:"Times New Roman", Times, serif;
        }
    </style>
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
                
                <div class="">
                    <div><h3><b>DETAILS</b></h3></div>
                    <div class="row">
                    
                    <fieldset>
                        
                        <div class="panel-body">
                            <table style="margin-left:5px;">
                                <tr>
                                <?php foreach ($record as $value) {
                                            echo"
                                <img style=\"width:100px !important; margin-left:240px; height:100px !important;\" src=\"../../../images/$value->picture\"/>
                                <form role=\"form\">
                                <div style=\"margin-top:30px;\">
                              
                                <td>
                                    <label>ID NUMBER:</label><input value=\"$value->idnumber\" disabled/>
                                </br>
                                    <label>First Name:</label><input value=\"$value->fname\" disabled/>
                                </br>
                                    <label>Middle Name:</label><input value=\"$value->mname\" disabled/>
                                </br>
                                    <label>Last Name:</label><input value=\"$value->lname\" disabled/>
                                </br>
                                    
                                    <label>District of Birth:</label><input value=\"$value->district_of_birth\" disabled/>
                                </br>
                                    <label>Place of issue:</label><input value=\"$value->place_of_issue\" disabled/>
                                </br>
                                    <label>Date of Birth:</label><input value=\"$value->date_of_birth\" disabled/>
                                </br>
                                    <label>Gender:</label><input value=\"$value->sex\" disabled/>
                                </br>
                                    <b>Sign:</b>
                                    </br>
                                    <img style=\"float:left; width:100px !important; margin-left:40px; height:50px !important;\" src=\"../../../files/sign/$value->sign\"/>
                                <br/>    
                                
                        
                                </div></td>
                                    <td>
                                    <div style=\"margin-left:160px;\">
                                            <label>SERIAL NO:</label><input value=\"$value->serialnumber\" disabled/>                                    
                                        </br>
                                            <label>First Name:</label><input value=\"$value->pfname\" disabled/>
                                        </br>
                                            <label>Middle Name:</label><input value=\"$value->pmname\" disabled/>
                                        </br>
                                            <label>Last Name:</label><input value=\"$value->plname\" disabled/>
                                        </br>
                                            <label>District:</label><input value=\"$value->district\" disabled/>
                                        </br>
                                            <label>Division:</label><input value=\"$value->division\" disabled/>
                                        </br>
                                            <label>Location:</label><input value=\"$value->location\" disabled/>
                                        </br>
                                            <label>Sublocation:</label><input value=\"$value->sublocation\" disabled/>
                                        </br>
                                            <label>Date of Issue:</label><input value=\"13-4-2015\" disabled/>
                                        </br>
                                        
                                    </div>

                                    
                                    </td>
                                </tr>

                            </table>

                        </div>
                            </form>

                            <div>
                                <img style=\"margin-left:20px;\" src=\"../../../files/fingerprints/$value->fingerprints\"//>
                            </div>
                            <h3>Finger Prints For Both Hands</h3>
                        </div>

                        ";
                                    }?>
                    <?php echo form_close(); ?>
                    </fieldset>
                </div>
                <div>
                    <a style="margin-left:20px; margin-top:20px;" class="btn btn-primary" onclick="javascript:window.print();this.hide();" target="_blank">Print</a>
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
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../../assets/js/custom.js"></script>

</body>
</html>
