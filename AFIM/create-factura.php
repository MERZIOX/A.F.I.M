<?php

require_once("controllers/db.php");
require_once("controllers/crear-objeto-producto.php");

$query = "SELECT * FROM facturas";

$registro = mysqli_query($conexion, $query);

require_once("modal/buscar-producto.php");
?>





<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Facturas

	</title>

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
		<?php include_once("views/navbar-header.php"); ?>

		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Encabezado de la pagina-->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Facturas
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
							</li>
							<li class="active">
								<i class="fa fa-table"></i> Facturas
							</li>
						</ol>
					</div>
					<div class="row"><a href="create-factura.php"></a></div>
				</div>
				<!-- /.row -->
				<hr>
				<!-- Tabla de facturas -->
				<div class="row">
					<div class="col-lg-12">
						<h2>Historial de facturas</h2>

						<form class="form-horizontal" role="form" id="datos_factura">
							<div class="form-group row">
								<label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
								<div class="col-md-3">
									<input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
									<input id="id_cliente" type='hidden'>
								</div>
								<label for="tel1" class="col-md-1 control-label">Teléfono</label>
								<div class="col-md-2">
									<input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
								</div>
								<label for="mail" class="col-md-1 control-label">Email</label>
								<div class="col-md-3">
									<input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="empresa" class="col-md-1 control-label">Vendedor</label>
								<div class="col-md-3">
									<select class="form-control input-sm" id="id_vendedor">

									</select>
								</div>
								<label for="tel2" class="col-md-1 control-label">Fecha</label>
								<div class="col-md-2">
									<input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y"); ?>" readonly>
								</div>
								<label for="email" class="col-md-1 control-label">Pago</label>
								<div class="col-md-3">
									<select class='form-control input-sm' id="condiciones">
										<option value="1">Efectivo</option>
										<option value="2">Cheque</option>
										<option value="3">Transferencia bancaria</option>
										<option value="4">Crédito</option>
									</select>
								</div>
							</div>


							<div class="col-md-12">
								<div class="pull-right">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
										<span class="glyphicon glyphicon-plus"></span> Nuevo producto
									</button>
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
										<span class="glyphicon glyphicon-user"></span> Nuevo cliente
									</button>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buscar-producto">
										<span class="glyphicon glyphicon-search"></span> Agregar productos
									</button>
									<button type="submit" class="btn btn-default">
										<span class="glyphicon glyphicon-print"></span> Imprimir
									</button>
								</div>
							</div>

						</form>
					</div>
					<br>
					<?php
					if (isset($_GET['id'])) {

						$ID = $_GET['id'];
						$query5 = "SELECT * FROM productos WHERE ID_productos = $ID";
						$resultado5 = mysqli_query($conexion, $query5);

						$res = mysqli_fetch_array($resultado5);


						$_SESSION['id'] = $res['ID_productos'];
						$_SESSION['nombre'] = $res['nombre'];
						$_SESSION['existencias'] = $res['existencias'];
						$_SESSION['precioCompra'] = $res['precio_compra'];

						echo $_SESSION['id'];
						echo $_SESSION['nombre'];
						echo $_SESSION['existencias'];
						echo $_SESSION['precioCompra'];
					} ?>


					<table class="table table-borderless ">
						<thead>
							<tr>
								<th scope="col">Codigo</th>
								<th scope="col">Descripcion</th>
								<th scope="col">Cantidad </th>
								<th scope="col">Precio Unit</th>
								<th scope="col">Valor total</th>
							</tr>
						</thead>
						<tbody id="cuerpo-tabla">
							<tr>
								<td>
									<? echo $_SESSION['id'];?>
								</td>
								<td>
									<? echo $_SESSION['nombre'];?>
								</td>
								<td>
									<? echo $_SESSION['existencias'];?>
								</td>
								<td>SUBTOTAL$</td>
								<td>
									<? echo $_SESSION['precioCompra']; ?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>

								<td>IVA(19%)</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>

								<td>TOTAL</td>
								<td></td>
							</tr>

						</tbody>
					</table>

				</div>

			</div>


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
	<script src="js/editar-factura.js"></script>
	<script>
		$(Document).ready(function() {

			function valores() {
				var id, nombre, existencias, precio, celda, cuerpo;

				id = $("#id").val();
				nombre = $("#nombre").val();
				existencias = $("#existencias").val();
				precio = $("#precio").val();

				celda = "<tr><td></td><td></td><td></td><td>SUBTOTAL$</td><td></td></tr>";
				$("#cuerpo-tabla").append(celda);

			}
			valores();

		});
	</script>

</body>

</html>