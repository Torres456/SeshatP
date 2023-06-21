const formulario = document.getElementById('form'); 
const inputs = document.querySelectorAll('#form input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,8}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,17}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}
const campos = {
	Usuario: false,
	Password: false,
}
const validarFormulario = (e) => {
    switch(e.target.name){
     case "usuario":
         ValidarCampo(expresiones.usuario, e.target,'Usuario');
     break;
     case "password":
         ValidarCampo(expresiones.password, e.target,'Password'); 
     break;
    } 
 }
 const ValidarCampo = (expresion, input,campo)=>{ 
    if(expresion.test(input.value)){
        document.getElementById(`Grupo_${campo}`).classList.remove('formulario_grupo-incorrecto');
        document.querySelector(`#Grupo_${campo} .Formulario_error`).classList.remove('Formulario_error-activo');
        campos[campo]=true;
        document.getElementById('mensajeError').classList.remove('formulario_mensaje-activo');
        document.getElementById('contenido').classList.remove('Contenedor_todo-error');
    }else{
        document.getElementById(`Grupo_${campo}`).classList.add('formulario_grupo-incorrecto')
        document.querySelector(`#Grupo_${campo} .Formulario_error`).classList.add('Formulario_error-activo');
        campos[campo]=false;
    }  
   }
inputs.forEach((input)=>{
    input.addEventListener('keyup',validarFormulario);
    input.addEventListener('blur',validarFormulario);
    });
    formulario.addEventListener('submit', (e)=>{
        e.preventDefault();
        /*Si cumplen con los valores que les asignamos colocamos el codigo aqui*/
         if(campos.Usuario && campos.Password ){
        
            let $User = document.getElementById("Usuario").value;
            let $Pass = document.getElementById("Password").value;
             login(); 
         }else{
            document.getElementById('mensajeError').classList.add('formulario_mensaje-activo');
            document.getElementById('contenido').classList.add('Contenedor_todo-error');
         }
        });
        const login =()=>{
            jQuery(document).on('submit','#form',function(event){    
             jQuery.ajax({
                url:'Bd/login.php',
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function(){
                }
             })
             .done(function(respuesta){
                // console.log(respuesta);
                if (respuesta == 1) {
                    // console.log($User);
                    $(location).attr('href', 'Inicio.php');
                } else if (respuesta == 2) {
                    alert("Usuario o Contraseña Incorrectos!");
                } else {
                    alert("Fallo al entrar :( " + data);
                }
             })
            });
        }
     