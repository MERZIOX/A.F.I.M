<?php
require_once("db.php");

if (isset($_GET['id'])) {
    $ID = intval( $_GET['id']);

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
    /*  header("location: ../create-factura.php");  */

}
?>
