<?php
session_start();
$varSesion=$_SESSION["usuario"];
if ($varSesion==''|| $varSesion==null) {
   header("location:index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css?see=1.4">
    <title>Seshat</title>
</head>
<body>

   <?php
   require('global/cabesera.php');
   }
   ?>
    <h1>Hola</h1>
    <h2>torres</h2>
    
</body>
</html>