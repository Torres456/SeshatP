<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?see=1.4">
    <title>Document</title>
</head>
<body>

<div class="Contenedor_todo"  id="contenido">
<div class="Img">
<img src="assets/images/Flor.png" >
</div>

<div class="Img2">
<img src="assets/images/Logo1.png" >
</div>

<div class="letras">
    <h1>Toda la administración de tu negocio, en un solo lugar</h1>
</div>

<div class="letras">
    <h1>Bienvenido de vuelta</h1>
</div>

<div class="contenedor_formulario" >
        
         <form action=""   class="Formulario" id="form" method="post">

          <!---------------------Grupo Usuario------------------------- --> 
         <div class="formulario_grupo" id="Grupo_Usuario"> 
            <label for="usuario" class="formulario_label">Usuario:</label>
                <div class="formulario_Grupo_input">
                 <input type="text"  class="formulario_input"  name="usuario" id="Usuario" placeholder="Usuario">
             </div>
             <p class="Formulario_error">El usuario tiene que ser de 6 digitos y solo puede contener numeros, letras y guion bajo. </p>

             </div> <!-- Fin Grupo_Usuario-->

            <!---------------------Grupo Contraseña------------------------- --> 

             <div class="formulario_grupo" id="Grupo_Password"> 
            <label for="password" class="formulario_label">Contraseña:</label>
                <div class="formulario_Grupo_input">
                 <input type="password"  class="formulario_input"  name="password" id="Password" placeholder="Contraseña" autocomplete="on">
             </div>
             <p class="Formulario_error">La Contraseña tiene que ser mayor a 4 digitos y menor a 12. </p>
             </div> <!-- Fin Grupo_Password-->
            
             <div  id="mensajeError"  class="formulario_mensaje">
                <p>Rellena el formulario correctamente</p>
             </div>
             <div class="formulario_grupo  btn_entrar">
                <input type="submit" class="Formulario_btn" value="Entrar">
                 </div>

         </form>
           
   </div> <!-- Fin contenedor_formulario-->
</div>


</body>
</html>