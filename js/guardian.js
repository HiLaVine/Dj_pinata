const form = document.getElementById("formdj")
const inputs = document.querySelectorAll('#formdj input')

const expresiones = {
	nombre: /^[a-zA-ZÁ-Ÿ\s]{1,40}$/,
	telefono: /^\d{10,10}$/,
	rfc: /^[a-zA-ZÁ-Ÿ\s]{13,13}$/,
	email: /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/,
	nump: /^\d{30,100}$/
}

const validaFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellidoP":
			validarCampo(expresiones.nombre, e.target, 'apellidoP');
		break;
		case "apellidoM":
			validarCampo(expresiones.nombre, e.target, 'apellidoM');
		break;
		case "fechaN":
			
		break;
		case "rfc":
			validarCampo(expresiones.rfc, e.target, 'rfc');
		break;
		case "mail":
			validarCampo(expresiones.email, e.target, 'mail');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "personas":
			if (e.target.value<30 || e.target.value>100) {
				document.getElementById('gpersonas').classList.add('formincorrecto');
				document.getElementById('gpersonas').classList.remove('formcorrecto');
				document.querySelector('#gpersonas .inputError').classList.add('inputErrorActivo');
			} else {
				document.getElementById('gpersonas').classList.remove('formincorrecto');
				document.getElementById('gpersonas').classList.add('formCorrecto');
				document.querySelector('#gpersonas .inputError').classList.remove('inputErrorActivo');
			}
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
			document.getElementById(`g${campo}`).classList.remove('formincorrecto');
			document.getElementById(`g${campo}`).classList.add('formCorrecto');
			document.querySelector(`#g${campo} .inputError`).classList.remove('inputErrorActivo');
		} else {
			document.getElementById(`g${campo}`).classList.add('formincorrecto');
			document.getElementById(`g${campo}`).classList.remove('formcorrecto');
			document.querySelector(`#g${campo} .inputError`).classList.add('inputErrorActivo');
		}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validaFormulario);
	input.addEventListener('blur', validaFormulario);
});

form.addEventListener("submit", e=>{
	e.preventDefault();

});
const email = document.getElementById("mail")

/*
form.addEventListener("submit", e=>{
	e.preventDefault()
	let warnings = ""
	let entrar = false
	let regexEmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
	parrafo.innerHTML = ""
	if (nombre.value.length <= 0) {
		warnings += `El campo 'Nombre' esta vacio <br>`
		entrar = true	
	}
	
	if (!regexEmail.test(email.value)) {
		warnings += `El email no es valido <br>`
		entrar = true
	}

	if (entrar) {
		parrafo.innerHTML = warnings
	}else{
		parrafo	= "Enviado"
	}
})
*/