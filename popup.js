var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
	btnVideo = document.getElementById('ingresoVideo'),
	btnCurriculum = document.getElementById('Curriculum'),
	btnAlumnos = document.getElementById('Alumnos'),
	btnRegresar = document.getElementById('Regresar');

btnAbrirPopup.addEventListener('click', function () {
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function (e) {
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

btnVideo.addEventListener('click', function (e) {

	let usuario = document.getElementById('user').value;
	let contra = document.getElementById('pass').value;

	if (usuario == 'admin' && contra == 'admin') {
		window.location.href = "./video.php";
		alert("Puede pasar!");
	}
	if (usuario != 'admin' && contra != 'admin') {
		alert("Credenciales Erroneas!");
	}
});

function Curriculum() {
	alert("Puede pasar!");
	window.location.href = "curriculum.php";
}

function Alumnos() {
	alert("Puede pasar!");
	window.location.href = "listado.php";
}

function Regresar() {
	alert("Puede pasar!");
	window.location.href = "index.php";
}

function RegresarVideo() {
	alert("Puede pasar!");
	window.location.href = "video.php";
}

function Calculadora() {
	alert("Puede pasar!");
	window.location.href = "calculadora.php";
}

function Horario() {
	alert("Puede pasar!");
	window.location.href = "horario.php";
}
