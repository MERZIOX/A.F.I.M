<?php
require_once("db.php");

$user = $_POST['username'];
$pass = $_POST['password'];


$consulta = "SELECT * FROM empleados WHERE username  = '$user' AND clave = '$pass'";
$resultado = mysqli_query($conexion, $consulta);
$reg = mysqli_fetch_array($resultado);
$filas = mysqli_num_rows($resultado);

$rol = $reg['id_rol_FK'];
$username = $reg['username'];
$cedula = $reg['cedula'];
$nombre = $reg['nombre'];
$correo = $reg['correo'];
$clave = $reg['clave'];




if ($user=="" || $pass == "") {
    $_SESSION['alerta'] = "empty";
    header("location: ../login.php");
} else {
    if ($user!=$cedula || $pass != $contraseña) {
        $_SESSION['alerta'] = "incorrect";
        header("location: ../login.php"); 
               
        
    }
}


if ($filas > 0 && $rol == 1) {
    $_SESSION['username'] = $user;
    $_SESSION['login'] = "administrador";
    $_SESSION['rol'] = $rol;
    header("location: ../index.php");
} else {
    if ($filas > 0 && $rol == 2) {
        $_SESSION['username'] = $user;
        $_SESSION['login'] = "usuario";
        $_SESSION['rol'] = $rol;
        header("location: ../index_user.php");
    } else {
        // Redireccion al login.php
        header("Location: ../login.php");
    }
}

mysqli_free_result($resultado);
mysqli_close($conexion);
