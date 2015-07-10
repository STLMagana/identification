<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ID</title>

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

</head>

<body style="background:white;">

    <div id="wrapper">
        <div id="">

            <div class="">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <h2>SESSIONS</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                        <tr>
                                            <th>USERNAME</th>
                                            <th>SESSION START</th>
                                            <th>SESSION END</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                        <?php foreach ($record as $value) {
                                            echo"<tr>
                                                <td> $value->username </td>
                                                <td> $value->session_start </td>
                                                <td> $value->session_end </td>
                                                </tr>";
                                        }?>
                                        
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                
                </div>
                <div style="margin-left:130px;">
                    <a class="btn btn-primary" onclick="javascript:window.print();">Print</a>
                </div>
                <!-- /.row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
               
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>

</body>

</html>
