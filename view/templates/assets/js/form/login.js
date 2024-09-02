let EsValido = false;
let show_password = false;

let mostrar_password = () => {
	let icono_eye = $(".input-group-addon i");
	let password = $("#txtPwd");
	show_password = !show_password;
	if (show_password) {
		icono_eye.removeClass("fa fa-eye-slash");
		icono_eye.addClass("fa fa-eye");
		password.attr('type', 'text');
	} else {
		icono_eye.removeClass("fa fa-eye");
		icono_eye.addClass("fa fa-eye-slash");
		password.attr('type', 'password');
	}
};
let IniciaSesion = async (usuario, pwd, fn) => {
	let data = {
		'email': usuario,
		'pwd': pwd
	};
	let url = new URL(urlpath + "/Auth/iniciaSesion");

	await fetch(url, {
		method: 'POST',
		headers: {
			"Content-Type": "application/json",
		},
		body: JSON.stringify(data)
	}).then(response => response.json())
		.then(data => fn(data))
		.catch(function (err) {
			msg.Notifica(err, "error", "top-right");
		});

};

let RegistraUsuario = async (usuario, fn) => {

	let url = new URL(urlpath + "/Auth/registra_cliente");

	await fetch(url, {
		method: 'POST',
		headers: {
			"Content-Type": "application/json",
		},
		body: JSON.stringify(usuario)
	}).then(response => response.json())
		.then(data => fn(data))
		.catch(function (err) {
			msg.Notifica(err, "error", "top-right");
		});

};

let ReseteaContrasenia = async (email, fn) => {



	let url = new URL(urlpath + "/Auth/recuperar_contrasenia/");
	url.searchParams.append('email', email);
	await fetch(url, {
		method: 'GET',
		headers: {
			"Content-Type": "application/json",
		}
	}).then(response => response.json())
		.then(data => fn(data))
		.catch(function (err) {
			msg.Notifica(err, "error", "top-right");
		});

};



let inicia = () => {

	$('#txtUsuario').val('');
	$('#txtPwd').val('');

	$('#txtNombre').val('');
	$('#txtApPaterno').val('');
	$('#cboTipdoc').val('2');
	$('#txtNroDoc').val('');
	$('#txtCelularUsuario').val('');
	$('#txtDireccionUsuario').val('');
	$('#txtEmail').val('');
	$('#txtPwd1').val('');
	$('#txtPwd2').val('');

	$('#txtUsuario').removeClass("invalido");
	$('#txtPwd').removeClass("invalido");

	$('#txtNombre').removeClass("invalido");
	$('#txtApPaterno').removeClass("invalido");
	$('#cboTipdoc').removeClass("invalido");
	$('#txtNroDoc').removeClass("invalido");
	$('#txtCelularUsuario').removeClass("invalido");
	$('#txtDireccionUsuario').removeClass("invalido");
	$('#txtEmail').removeClass("invalido");
	$('#txtPwd1').removeClass("invalido");
	$('#txtPwd2').removeClass("invalido");
}
let ClearValidLogin = () => {
	$('#txtUsuario').removeClass("invalido");
	$('#txtPwd').removeClass("invalido");

}
let ClearValidRegistro = () => {
	$('#txtNombre').removeClass("invalido");
	$('#txtApPaterno').removeClass("invalido");
	$('#cboTipdoc').removeClass("invalido");
	$('#txtNroDoc').removeClass("invalido");
	$('#txtCelularUsuario').removeClass("invalido");
	$('#txtDireccionUsuario').removeClass("invalido");
	$('#txtEmail').removeClass("invalido");
	$('#txtPwd1').removeClass("invalido");
	$('#txtPwd2').removeClass("invalido");

}

$(document).ready(() => {
	initCart();


	$('#btnIngresar').on('click', function () {
		let email = $("#txtUsuario").val();
		let pwd = $("#txtPwd").val();
		ClearValidLogin();
		IniciaSesion(email, pwd, (e) => {
			if (e.success == true) {
				window.location = e.msg;

			} else {
				$("[name='" + e.input + "']").addClass("invalido");
				msg.Notifica(e.msg, "error", "top-right");
				$("[name='" + e.input + "']").focus();
			}
		});
	});

	$('#btnGraba').on('click', function () {
		let usuario = {
			'nombres': $("#txtNombre").val(),
			'apellidos': $("#txtApPaterno").val(),
			'tipdoc': $("#cboTipdoc").val(),
			'nrodoc': $("#txtNroDoc").val(),
			'celular': $("#txtCelularUsuario").val(),
			'email': $("#txtEmail").val(),
			'direccion': $("#txtDireccionUsuario").val(),
			'pwd1': $("#txtPWD1").val(),
			'pwd2': $("#txtPWD2").val(),
		};
		ClearValidRegistro();
		RegistraUsuario(usuario, (e) => {
			if (e.success == true) {
				msg.Alert("::" + tittlemsg + "::", e.msg, () => {
					$('#registerModal').css('display', 'none');
					$('#loginModal').css('display', 'block');
				})
			} else {
				$("[name='" + e.input + "']").addClass("invalido");
				msg.Notifica(e.msg, "error", "top-right");
				$("[name='" + e.input + "']").focus();
			}
		});

	});

	$('#txtUsuario').on('keypress', function (event) {
		if (event.which == 13) {
			$('#txtPwd').focus();
			return false;
		}
	});
	$('#txtPwd').on('keypress', function (event) {
		if (event.which == 13) {
			$('#btnIngresar').click();
			return false;
		}
	});
	// Función para abrir el modal
	$('#btnLogIn').on('click', function () {
		let modal = $('#loginModal');
		if (Object.keys(modal).length === 0) {
			$('.lista_sesion').toggle();


		} else {
			$('#loginModal').css('display', 'block');
		}


	});
	// Función para cerrar el modal 
	$('#closeLoginModal').on('click', function () {

		$('#loginModal').css('display', 'none');
		inicia();
	});
	// Función para abrir el modal de registro
	$('#btnSignUp').on('click', function () {
		$('#registerModal').css('display', 'block');
		inicia();

	});
	// Función para cerrar el modal de registro
	$('#closeRegisterModal').on('click', function () {

		$('#registerModal').css('display', 'none');
		inicia();


	});
	// Función para ir del modal de login al modal de registro
	$('#linkToRegister').on('click', function () {

		inicia();


		$('#loginModal').css('display', 'none');
		$('#registerModal').css('display', 'block');
	});
	// Función para ir del modal de registro al modal de login
	$('#linkToLogin').on('click', function () {
		inicia();
		$('#loginModal').css('display', 'block');
		$('#registerModal').css('display', 'none');
	});

	$('#cboTipdoc').on('change', function () {
		let tipdoc = $(this).val();
		let nrodoc = $("#txtNroDoc");
		if (tipdoc == "2") {
			nrodoc.attr("maxlength", 8);
		} else if (tipdoc == "4") {
			nrodoc.attr("maxlength", 12);
		} else if (tipdoc == "7") {
			nrodoc.attr("maxlength", 12);
		} else if (tipdoc == "23") {
			nrodoc.attr("maxlength", 9);
		}
	});

	$("#linkRecuperar").on("click", () => {
		let email = $("#txtUsuario").val();
		ClearValidLogin();
		let link = document.getElementById("linkRecuperar");
		link.style.pointerEvents = 'none';

		ReseteaContrasenia(email, (e) => {
			if (e.success == true) {
				msg.Notifica(e.msg, "success", "top-right");
			} else {
				$("[name='" + e.input + "']").addClass("invalido");
				msg.Notifica(e.msg, "error", "top-right");
			}
			link.style.pointerEvents = null;
		});
	});

});