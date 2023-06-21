const formulario = document.getElementById('formulario');
// const formulario2 = document.getElementById('formulario2');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,18}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	num: /^\d{1,5}$/ // 7 a 14 numeros.
}

function generateUUID() {
    var d = new Date().getTime();
    var uuid = 'xx4yx'.replace(/[xy]/g, function (c) {
        var r = (d + Math.random() * 16) % 16 | 0;
        d = Math.floor(d / 16);
        return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
    });
    return uuid;
}
const idRandom= generateUUID();

const campos = {
    Nombre: false,
    ApellidoP: false,
    ApellidoM: false,
    Numero_celular:false,
    Numero_casa:false,
    Correo:false,
    Nombre_usuario:false,
    Contraseña: false,
    Nacionalidad:false,
    Curp:false,
    Estado:false,
    Municipio:false,
    Colonia:false,
 }

 const validacionForm = (e)=>{
    // console.log(e.target.name);
    switch (e.target.name){
        case "Nombre":
        // console.log('funciona');
        ValidarCampo(expresiones.nombre, e.target,'Nombre');
        break;
    
        case "ApellidoP":
       ValidarCampo(expresiones.nombre, e.target,'ApellidoP');
        break;
    
        case "ApellidoM":
        ValidarCampo(expresiones.nombre, e.target,'ApellidoM');
        break;
    
        case "Numero_celular":
            ValidarCampo(expresiones.telefono, e.target,'Numero_celular');
        break;
    
        case "Numero_casa":
            ValidarCampo(expresiones.telefono, e.target,'Numero_casa');
        break;
    
        case "Correo":
            ValidarCampo(expresiones.correo, e.target,'Correo');
        break;
    
        case "Nombre_usuario":
            ValidarCampo(expresiones.usuario, e.target,'Nombre_usuario');
        break;
    
        case "Contraseña":
            ValidarCampo(expresiones.password, e.target,'Contraseña');
        break;
    
        case "Nacionalidad":
            ValidarCampo(expresiones.nombre, e.target,'Nacionalidad');
        break;
    
        case "Curp":
            ValidarCampo(expresiones.usuario, e.target,'Curp');
        break;
    
        case "Estado":
            ValidarCampo(expresiones.nombre, e.target,'Estado');
        break;
    
        case "Municipio":
            ValidarCampo(expresiones.nombre, e.target,'Municipio');
        break;
    
        case "Colonia":
            ValidarCampo(expresiones.nombre, e.target,'Colonia');
        break;
    }
    
    }

    const ValidarCampo = (expresion, input,campo)=>{ 

        if(expresion.test(input.value)){
            document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
             
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
            campos[campo]=true;
    
        }else{
            document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
            campos[campo]=false;
        }
    }

 inputs.forEach((input)=>{
    input.addEventListener('keyup',validacionForm);
    input.addEventListener('blur',validacionForm);
    
});

formulario.addEventListener('submit',(e)=>{
	let opcion1 = document.getElementById('sexo');
	let fecha = document.getElementById('Date');
    let usuario = document.getElementById('usuario');
    
	e.preventDefault();

	if(fecha.value.length == 0){
	alert("Coloca una fecha");
	}else if(opcion1.value == "0"){
    alert("Coloca un sexo");
	}else if(usuario.value == "0"){
		alert("Selecciona un tipo de Usuario");
	}else if(campos.Nombre && campos.ApellidoP  && campos.ApellidoM 
		&& campos.Numero_celular && campos.Numero_casa && campos.Correo
		&& campos.Nombre_usuario && campos.Contraseña && campos.Nacionalidad
		&& campos.Curp && campos.Estado && campos.Municipio && campos.Colonia
		){
		   registrar();

	}else{

		alert("Rellena el formulario Correctamente");
 }
})

const registrar  =()=>{

	const Nombre = document.getElementById('Nombre');
    const ApP = document.getElementById('ApellidoP');
    const ApM = document.getElementById('ApellidoM');
	const selectSex = document.querySelector('#sexo');
    const date = document.getElementById('Date');
    const celular = document.getElementById('Numero_celular');
    const casa = document.getElementById('Numero_casa');
    const correo = document.getElementById('Correo');
    const Nombre_usuario = document.getElementById('Nombre_usuario');
    const contraseña = document.getElementById('Contraseña');
    const Tipo = document.querySelector('#usuario');
    const nacionalidad = document.getElementById('Nacionalidad');
    const curp = document.getElementById('Curp');
    const Estado = document.getElementById('Estado');
    const municipio = document.getElementById('Municipio');
    const colonia = document.getElementById('Colonia');

	$.ajax({
            
		url:'Bd/Registro.php',
		type: 'POST',
		dataType: 'Json',
		data: {
			Id:idRandom,
			Nombre:Nombre.value,
            ApellidoP:ApP.value,
            ApellidoM:ApM.value,
            Sexo:selectSex.value,
            Fecha:date.value,
            Celular:celular.value,
            CelularC:casa.value,
            Correo:correo.value,
            Usuario:Nombre_usuario.value,
            Contraseña:contraseña.value,
            Tipo:Tipo.value,
            Nacionalidad:nacionalidad.value,
            Curp:curp.value,
            Estado:Estado.value,
            Municipio:municipio.value,
            Colonia:colonia.value,
			Accion:1
		},
		// beforeSend:function(){

        // },
		success:function(res){
		 console.log(res);
			 if (res == 1) {
                alert("Usuario Registrado");
                $('#formulario')[0].reset();
                
				return false;
		   } else{
			 alert("¡Intealo de nuevo!- Reporta al admin.");
				return false;
			 }
		}   
	});

}