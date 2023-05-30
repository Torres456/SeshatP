<?php
include "conexion.php";
session_start();

$user=$_POST['usuario'];
$password=$_POST['password'];

try {
    $sql="SELECT * FROM usuarios WHERE Nombre='$user' AND Contraseña='$password'";
    $respuesta=mysqli_query($conexion,$sql);
    $num_rows=mysqli_num_rows($respuesta);
    if($num_rows=="1"){
        $data=mysqli_fetch_array($respuesta);
        $_SESSION["id"]=$data["id"];
        $_SESSION["usuario"]=$data["Nombre"];
        echo 1;
    }else{
        echo 2;
    }
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
?>