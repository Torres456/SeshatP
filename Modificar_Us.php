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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registros.css">
    <title>Modificacion de Usuario</title>
</head>
<body>
<?php
   include "Bd/conexion.php";
   require('global/cabesera.php');
 }

 try {
    $idUser= $_GET['Id'];
    $sql="SELECT * FROM Personal WHERE Id_personal='$idUser'";
    $respuesta=mysqli_query($conexion,$sql);
    $data=mysqli_fetch_array($respuesta);   
       } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }

   ?>
<div class="contenedor_formulario" title="Registro de personal">
<h1>Modificacion de Usuario</h1>

<form action="" class="formulario" id="formulario">

<div class="formulario__grupo" id="grupo__Id">
    <label for="Id" class="formulario__label">Id:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Id" id="Id" placeholder="Id" value="<?php echo $data["Id_personal"]?>" disabled>
            </div>
    </div>

    <div class="formulario__grupo" id="grupo__Nombre">
    <label for="Nombre" class="formulario__label">Nombre:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nombre" id="Nombre" placeholder="Nombre" value="<?php echo $data["nombre"]?>">
            </div>
            <p class="formulario__input-error">El Nombre solo puede contener letras.</p>
    </div>

    <div class="formulario__grupo" id="grupo__ApellidoP">
    <label for="Nombre" class="formulario__label">Apellido Paterno:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="ApellidoP" id="ApellidoP" placeholder="Apellido Paterno" value="<?php echo $data["apellidoP"]?>">
            </div>
            <p class="formulario__input-error">El Apellido solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__ApellidoM">
    <label for="Nombre" class="formulario__label">Apellido materno:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="ApellidoM" id="ApellidoM" placeholder="Apellido materno" value="<?php echo $data["apellidoM"]?>">
            </div>
            <p class="formulario__input-error">El Apellido solo puede contener letras. </p>
    </div>

    <div class="Select_sexo  select">
            <label for="sex"  class="formulario__label">Sexo:</label>
        <select name="sexo" id="sexo">
            <option  <?php echo $data["sexo"]==='Hombre'?"selected='selected'":""?> value="Hombre">Hombre</option>
            <option <?php echo $data["sexo"]==='Mujer'?"selected='selected'":""?> value="Mujer">Mujer</option>
        </select>
        </div>

        <div class="formulario__grupo" id="grupo__Fecha_nacimiento">
            <label for="Fecha_nacimiento" class="formulario__label">Fecha de Nacimiento:</label>
            <div class="formulario__grupo-input">
                <input type="date" id="Date" min="1950-01-01" max="2004-01-01">
            </div>
        </div>
         
        <div class="formulario__grupo" id="grupo__Numero_celular">
    <label for="Nombre" class="formulario__label">Numero de celular:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Numero_celular" id="Numero_celular" placeholder="Numero de celular" value="<?php echo $data["numero_cel"]?>">
            </div>
            <p class="formulario__input-error">El Numero de celular solo puede contener numeros. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Numero_casa">
    <label for="Nombre" class="formulario__label">Numero de casa:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Numero_casa" id="Numero_casa" placeholder="Numero de casa" value="<?php echo $data["numero_cas"]?>">
            </div>
            <p class="formulario__input-error">El Numero de casa solo puede contener numeros. </p>
    </div>

       
    <div class="formulario__grupo" id="grupo__Correo">
    <label for="Nombre" class="formulario__label">Correo:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Correo" id="Correo" placeholder="Correo" value="<?php echo $data["correo"]?>">
            </div>
            <p class="formulario__input-error">No pertenece a un correo</p>
    </div>

    <div class="formulario__grupo" id="grupo__Nombre_usuario">
    <label for="Nombre_usuario" class="formulario__label">Nombre de usuario:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nombre_usuario" id="Nombre_usuario" placeholder="Nombre de usuario" value="<?php echo $data["usuario"]?>">
            </div>
            <p class="formulario__input-error">El Nombre de usuario solo puede contener letras.</p>
    </div>

    <div class="formulario__grupo" id="grupo__Contraseña">
    <label for="Nombre" class="formulario__label">Contraseña:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Contraseña" id="Contraseña" placeholder="Contraseña" value="<?php echo $data["contraseña"]?>">
            </div>
            <p class="formulario__input-error">La Contraseña solo puede contener letras. </p>
    </div>

    <div class="Select_usuario  select">
            <label for="sex"  class="formulario__label">Usuario:</label>
        <select name="usuario" id="usuario">
            <option <?php echo $data["tipo_Us"]==='Administrador'?"selected='selected'":""?> value="Administrador">Administrador</option>
            <option <?php echo $data["tipo_Us"]==='Trabajador'?"selected='selected'":""?> value="Trabajador">Trabajador</option>
        </select>
        </div>

        <div class="formulario__grupo" id="grupo__Nacionalidad">
    <label for="Nombre" class="formulario__label">Nacionalidad:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nacionalidad" id="Nacionalidad" placeholder="Nacionalidad" value="<?php echo $data["nacionalidad"]?>">
            </div>
            <p class="formulario__input-error">La Nacionalidad solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Curp">
    <label for="Nombre" class="formulario__label">Curp:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Curp" id="Curp" placeholder="Curp" value="<?php echo $data["curp"]?>">
            </div>
            <p class="formulario__input-error">El curp solo puede contener letras y numeros. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Estado">
    <label for="Nombre" class="formulario__label">Estado:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Estado" id="Estado" placeholder="Estado" value="<?php echo $data["estado"]?>">
            </div>
            <p class="formulario__input-error">El Estado solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Municipio">
    <label for="Nombre" class="formulario__label">Municipio:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Municipio" id="Municipio" placeholder="Municipio" value="<?php echo $data["municipio"]?>">
            </div>
            <p class="formulario__input-error">El Municipio solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Colonia">
    <label for="Nombre" class="formulario__label">Colonia:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Colonia" id="Colonia" placeholder="Colonia" value="<?php echo $data["colonia"]?>">
            </div>
            <p class="formulario__input-error">La colonia solo puede contener letras. </p>
    </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn" >Modificar</button>
        </div>

</form>

</div>
    
</body>
<script src="js/ModPersonal.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
</html>