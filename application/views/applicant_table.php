<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ID</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/tables/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/tables/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../assets/tables/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../assets/tables/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/tables/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/tables/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
        <div style="width:100px; border-radius:3px; margin-bottom:10px; margin-top:20px; background:#9f9f9f;">
        <a href="<?php echo site_url('home'); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></div>
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>F. NAME</th>
                                            <th>M. NAME</th>
                                            <th>L. NAME</th>
                                            <th>PICTURE</th>                                            
                                            <th>DISTRICT O.B</th>
                                            <th>P.O.I</th>
                                            <th>D.O.B</th>
                                            <th>GENDER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($record as $value) {
                                            echo"<tr>
                                                <td> $value->id </td>
                                                <td> $value->fname </td>
                                                <td> $value->mname </td>
                                                <td> $value->lname </td>
                                                <td> $value->picture </td>
                                                <td> $value->district_of_birth </td>
                                                <td> $value->place_of_issue </td>
                                                <td> $value->date_of_birth </td>
                                                <td> $value->sex </td>
                                                <td><a href='".base_url('index.php/home/deleteapplicant/'.$value->id)
                                                ."'class='btn-sm btn-danger fa fa-trash-o'></a>
                                                <a href='".base_url('index.php/home/updateapplicant/'.$value->id)
                                                ."'class='btn-sm btn-success fa fa-edit'></a>
                                                <a href='".base_url('index.php/home/viewapplicant/'.$value->id)
                                                ."'class='btn-sm btn-primary fa fa-user'></a>
                                                <a href='".base_url('index.php/home/viewbehind/'.$value->id)
                                                ."'class='btn-sm btn-primary fa fa-rotate-left'></a>
                                                <a href='".base_url('index.php/home/page/'.$value->id)
                                                ."'class='btn-sm btn-primary fa fa-thumbs-o-up'></a></td>
                                                </tr>";
                                        }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>  
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div>
                <a class="btn btn-primary"  href="<?php echo site_url('home/applicants'); ?>" target="_blank">View Report</a>
            </div>
            <!-- /.row -->
        </div>
        <div class="col-lg-1"></div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../assets/tables/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/tables/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/tables/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../assets/tables/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/tables/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/tables/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>

