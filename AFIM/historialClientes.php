<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Header y Sidebar -->
        <?php include_once("views/navbar-header.php");?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Historial de clientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Historial de clientes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- Tabla de facturas -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Historial de clientes</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Fecha de compra</th>
                                            <th>Nombre del cliente</th>
                                            <th>Número de factura</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>