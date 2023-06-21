<?php

include "conexion.php";
session_start();

$accion=$_POST['Accion'];

if($accion==1){

    $id=$_POST['Id'];
    $nombre=$_POST['Nombre'];
    $apellidoP=$_POST['ApellidoP'];
    $apellidoM=$_POST['ApellidoM'];
    $sexo=$_POST['Sexo'];
    $fecha=$_POST['Fecha'];
    $celular=$_POST['Celular'];
    $celularC=$_POST['CelularC'];
    $coreo=$_POST['Correo'];
    $usuario=$_POST['Usuario'];
    $contraseña=$_POST['Contraseña'];
    $tipo=$_POST['Tipo'];
    $nacionalidad=$_POST['Nacionalidad'];
    $curp=$_POST['Curp'];
    $estado=$_POST['Estado'];
    $municipio=$_POST['Municipio'];
    $colonia=$_POST['Colonia'];

    try {
        $sql="CALL InsertUser('$id','$nombre','$apellidoP','$apellidoM','$sexo','$fecha','$celular','$celularC','$coreo','$usuario','$contraseña','$tipo','$nacionalidad','$curp','$estado','$municipio','$colonia')";
        $result=mysqli_query($conexion,$sql);
        echo $result; 

    }catch (Exception $e) {

        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        
    }
}
else if($accion==2){

    $id=$_POST['Id'];
    $nombre=$_POST['Nombre'];
    $apellidoP=$_POST['ApellidoP'];
    $apellidoM=$_POST['ApellidoM'];
    $sexo=$_POST['Sexo'];
    $fecha=$_POST['Fecha'];
    $celular=$_POST['Celular'];
    $celularC=$_POST['CelularC'];
    $coreo=$_POST['Correo'];
    $usuario=$_POST['Usuario'];
    $contraseña=$_POST['Contraseña'];
    $tipo=$_POST['Tipo'];
    $nacionalidad=$_POST['Nacionalidad'];
    $curp=$_POST['Curp'];
    $estado=$_POST['Estado'];
    $municipio=$_POST['Municipio'];
    $colonia=$_POST['Colonia'];

    try {
        $sql="UPDATE personal
        set 
        nombre='$nombre',
        apellidoP='$apellidoP',
        apellidoM='$apellidoM',
        sexo='$sexo',
        fecha_nacimiento='$fecha',
        numero_cel='$celular',
        numero_cas='$celularC',
        correo='$coreo',
        usuario='$usuario',
        contraseña='$contraseña',
        tipo_Us='$tipo',
        nacionalidad='$nacionalidad',
        curp='$curp',
        estado='$estado',
        municipio='$municipio',
        colonia='$colonia'
        WHERE Id_personal ='$id';
        ";
        $result=mysqli_query($conexion,$sql);
        echo $result; 

    }catch (Exception $e) {

        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        
    }


}
?>