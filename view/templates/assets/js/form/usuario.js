
let usuario = {
    mostrar_password_register :  () => {
        let icono_eye = $(".input-group-addon i.register");
        let password = $("#txtPWD1");
        show_password1 = !show_password1;
        if (show_password1) {
            icono_eye.removeClass("fa fa-eye-slash");
            icono_eye.addClass("fa fa-eye");
            password.attr('type', 'text');
        } else {
            icono_eye.removeClass("fa fa-eye");
            icono_eye.addClass("fa fa-eye-slash");
            password.attr('type', 'password');
        }
    },
    mostrar_password_confirm : () => {
        let icono_eye = $(".input-group-addon i.confirm");
        let password = $("#txtPWD2");
        show_password2 = !show_password2;
        if (show_password2) {
            icono_eye.removeClass("fa fa-eye-slash");
            icono_eye.addClass("fa fa-eye");
            password.attr('type', 'text');
        } else {
            icono_eye.removeClass("fa fa-eye");
            icono_eye.addClass("fa fa-eye-slash");
            password.attr('type', 'password');
        }
    },
    RegistraUsuario : async (usuario, fn) => {

        let url = new URL(urlpath + "/Auth/registra_cliente_cuenta");
    
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
    
    },
    ClearValidRegistro : () => {
        $('#txtNombre').removeClass("invalido");
        $('#txtApPaterno').removeClass("invalido");
        $('#cboTipdoc').removeClass("invalido");
        $('#txtNroDoc').removeClass("invalido");
        $('#txtCelularUsuario').removeClass("invalido");
        $('#txtDireccionUsuario').removeClass("invalido");
        $('#txtEmail').removeClass("invalido");
        $('#txtPWD1').removeClass("invalido");
        $('#txtPWD2').removeClass("invalido");
    
    }
    
}



$(document).ready(() => {

    
    $('#cboTipdoc').on('change', function () {
		let tipdoc = $(this).val();
		let nrodoc = $("#txtNroDoc");
        $("#txtNroDoc").val('');
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
	$('#btnActualiza').on('click', function () {
		let ousuario = {
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

	
        usuario.ClearValidRegistro();
		usuario.RegistraUsuario(ousuario, (e) => {
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

});