<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registros.css?see=1.3">
    <title>Registro Personal</title>
</head>
<body id="body">
<?php
   require('global/cabesera.php');

   ?>

<div class="contenedor_formulario" title="Registro de personal">
<h1>Registro de personal</h1>

<form action="" class="formulario" id="formulario">

    <div class="formulario__grupo" id="grupo__Nombre">
    <label for="Nombre" class="formulario__label">Nombre:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nombre" id="Nombre" placeholder="Nombre">
            </div>
            <p class="formulario__input-error">El Nombre solo puede contener letras.</p>
    </div>

    <div class="formulario__grupo" id="grupo__ApellidoP">
    <label for="Nombre" class="formulario__label">Apellido Paterno:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="ApellidoP" id="ApellidoP" placeholder="Apellido Paterno">
            </div>
            <p class="formulario__input-error">El Apellido solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__ApellidoM">
    <label for="Nombre" class="formulario__label">Apellido materno:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="ApellidoM" id="ApellidoM" placeholder="Apellido materno">
            </div>
            <p class="formulario__input-error">El Apellido solo puede contener letras. </p>
    </div>

    <div class="Select_sexo  select">
            <label for="sex"  class="formulario__label">Sexo:</label>
        <select name="sexo" id="sexo">
            <option value="0">Seleccione</option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
        </div>

        <div class="formulario__grupo" id="grupo__Fecha_nacimiento">
            <label for="Fecha_nacimiento" class="formulario__label">Fecha de Nacimiento:</label>
            <div class="formulario__grupo-input">
                <input type="date" id="Date">
            </div>
        </div>
         
        <div class="formulario__grupo" id="grupo__Numero_celular">
    <label for="Nombre" class="formulario__label">Numero de celular:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Numero_celular" id="Numero_celular" placeholder="Numero de celular">
            </div>
            <p class="formulario__input-error">El Numero de celular solo puede contener numeros. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Numero_casa">
    <label for="Nombre" class="formulario__label">Numero de casa:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Numero_casa" id="Numero_casa" placeholder="Numero de casa">
            </div>
            <p class="formulario__input-error">El Numero de casa solo puede contener numeros. </p>
    </div>

       
    <div class="formulario__grupo" id="grupo__Correo">
    <label for="Nombre" class="formulario__label">Correo:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Correo" id="Correo" placeholder="Correo">
            </div>
            <p class="formulario__input-error">No pertenece a un correo</p>
    </div>

    <div class="formulario__grupo" id="grupo__Nombre_usuario">
    <label for="Nombre_usuario" class="formulario__label">Nombre de usuario:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nombre_usuario" id="Nombre_usuario" placeholder="Nombre de usuario">
            </div>
            <p class="formulario__input-error">El Nombre de usuario solo puede contener letras.</p>
    </div>

    <div class="formulario__grupo" id="grupo__Contraseña">
    <label for="Nombre" class="formulario__label">Contraseña:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Contraseña" id="Contraseña" placeholder="Contraseña">
            </div>
            <p class="formulario__input-error">La Contraseña solo puede contener letras. </p>
    </div>

    <div class="Select_usuario  select">
            <label for="sex"  class="formulario__label">Usuario:</label>
        <select name="usuario" id="usuario">
            <option value="0">Seleccione</option>
            <option value="Administrador">Administrador</option>
            <option value="Trabajador">Trabajador</option>
        </select>
        </div>

        <div class="formulario__grupo" id="grupo__Nacionalidad">
    <label for="Nombre" class="formulario__label">Nacionalidad:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nacionalidad" id="Nacionalidad" placeholder="Nacionalidad">
            </div>
            <p class="formulario__input-error">La Nacionalidad solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Curp">
    <label for="Nombre" class="formulario__label">Curp:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Curp" id="Curp" placeholder="Curp">
            </div>
            <p class="formulario__input-error">El curp solo puede contener letras y numeros. </p>
    </div>

    <!-- <div class="formulario__grupo" id="grupo__Domicilio">
    <label for="Nombre" class="formulario__label">Domicilio:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Domicilio" id="Domicilio" placeholder="Domicilio">
            </div>
    </div> -->

    <div class="formulario__grupo" id="grupo__Estado">
    <label for="Nombre" class="formulario__label">Estado:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Estado" id="Estado" placeholder="Estado">
            </div>
            <p class="formulario__input-error">El Estado solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Municipio">
    <label for="Nombre" class="formulario__label">Municipio:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Municipio" id="Municipio" placeholder="Municipio">
            </div>
            <p class="formulario__input-error">El Municipio solo puede contener letras. </p>
    </div>

    <div class="formulario__grupo" id="grupo__Colonia">
    <label for="Nombre" class="formulario__label">Colonia:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Colonia" id="Colonia" placeholder="Colonia">
            </div>
            <p class="formulario__input-error">La colonia solo puede contener letras. </p>
    </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="formulario__btn" >Enviar</button>
        </div>

</form>

</div>

<section class="Empleados">
    <div class="Empleados__Title">
        <h2>Empleados Registrados</h2>
    </div>

    <div class="Empleados__contenedor__table">
    <table class="usuarios">
    <thead>
        <tr>
            <th scope="Id">ID</th>
            <th scope="Id">Nombre</th>
            <th scope="Apellido Paterno">Apellido Paterno</th>
            <th scope="Apellido Paterno">Apellido Materno</th>
            <th scope="Apellido Paterno">Telefono</th>
            <th scope="Apellido Paterno">Correo</th>
            <th scope="Apellido Paterno">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "Bd/conexion.php";
        $sql = $conexion-> query("SELECT Id_personal,nombre,apellidoP,apellidoM,numero_Cel,Correo FROM Personal");
        while($resutado = $sql->fetch_assoc()){
            ?>
            <tr>
                   <td scope="rows"><?php echo $resutado['Id_personal'] ?></td>
                   <td scope="rows"><?php echo $resutado['nombre']?></td>
                   <td scope="rows"><?php echo $resutado['apellidoP']?></td>
                   <td scope="rows"><?php echo $resutado['apellidoM']?></td>
                   <td scope="rows"><?php echo $resutado['numero_Cel'] ?></td>
                   <td scope="rows"><?php echo $resutado['Correo'] ?></td>
                   <td>
                   <a href="Modificar_Us.php?Id=<?php echo $resutado['Id_personal']?>">Modificar</a>
                   <a href="Eliminar.php?Id=<?php echo $resutado['Id_personal']?>">Eliminar</a>
                   </td>
            </tr>
            <?php
        }
        ?>
        
    </tbody>
</table>


    </div>


</section>
</body>
<script src="js/RegPersonal.js?see=1.2"></script>
<script src="js/jquery-3.2.1.min.js"></script>
</html>