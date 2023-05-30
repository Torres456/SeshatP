<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registros.css?see=1.2">
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
   
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nombre" id="Nombre" placeholder="Nombre">
            </div>
            <label for="Nombre" class="formulario__label">Nombre:</label>
    </div>

    <div class="formulario__grupo" id="grupo__ApellidoP">
    <label for="Nombre" class="formulario__label">Apellido Paterno:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="ApellidoP" id="ApellidoP" placeholder="Apellido Paterno">
            </div>
    </div>

    <div class="formulario__grupo" id="grupo__ApellidoM">
    <label for="Nombre" class="formulario__label">Apellido materno:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="ApellidoM" id="ApellidoM" placeholder="Apellido materno">
            </div>
    </div>

    <div class="Select_sexo">
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

        <div class="formulario__grupo" id="grupo__Nacionalidad">
    <label for="Nombre" class="formulario__label">Nacionalidad:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Nacionalidad" id="Nacionalidad" placeholder="Nacionalidad">
            </div>
    </div>

    <div class="formulario__grupo" id="grupo__Curp">
    <label for="Nombre" class="formulario__label">Curp:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Curp" id="Curp" placeholder="Curp">
            </div>
    </div>

    <div class="formulario__grupo" id="grupo__Domicilio">
    <label for="Nombre" class="formulario__label">Domicilio:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Domicilio" id="Domicilio" placeholder="Domicilio">
            </div>
    </div>

    <div class="formulario__grupo" id="grupo__Estado">
    <label for="Nombre" class="formulario__label">Estado:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Estado" id="Estado" placeholder="Estado">
            </div>
    </div>

    <div class="formulario__grupo" id="grupo__Municipio">
    <label for="Nombre" class="formulario__label">Municipio:</label>
    <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Municipio" id="Municipio" placeholder="Municipio">
            </div>
    </div>

</form>

</div>
</body>
</html>