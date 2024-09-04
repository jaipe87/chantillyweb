
let EditCart = (olink) => {

    const a = document.createElement("a");
    const link = olink;
    a.href = link;
    a.click();
    localStorage.setItem("editcart", 'true');
}
let Editcliente = async (usuario, fn) => {
    let url = new URL(urlpath + "/Checkout/actualiza_datos");
    $(".jm-cargaTemp").fadeIn(500);
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

}
let InitTotalesDelivery = (subtotal, envio) => {
    $(".totales_compra").empty();
    $("#precioEnvio").text(formatNumber(parseFloat(envio)));
    let html = `
                <div class="subtotal">
                <div class="subtotalCheckout">
                            <p>Sub-Total : </p>
                            <p>S/ <span id="montoSubT">${formatNumber(parseFloat(subtotal))}</span></p>
                        </div>
                        <div class="envioCheckout">
                            <p>Envio : </p>
                            <p>S/<span id="envio">${formatNumber(parseFloat(envio))}</span></p>
                        </div>
                <hr>
                </div>
                <div class="totalCheckout">
                        <p>TOTAL : </p>
                        <p>S/ <span id="total">${formatNumber(parseFloat(subtotal) + parseFloat(envio))}</span></p>
                    </div>
                `;

    $(".totales_compra").html(html);

}
let InitTotalesRecojo = (Total) => {
    $(".totales_compra").empty();
    let html = `
                <div class="totalCheckout">
                        <p>TOTAL : </p>
                        <p>S/ <span id="total">${formatNumber(parseFloat(Total))}</span></p>
                    </div>
                `;
    $(".totales_compra").html(html);
}
let Ubigeo = {
    SeleccionaProvincia: async (coddep) => {

        let url = new URL(urlpath + "/api/select_all_provincia/");
        url.searchParams.append('coddep', coddep);

        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        };

        $("#sltcProvincia").empty();
        $("#sltcProvincia").append('<option value="0"  selected>Seleccionar</option>');
        $("#sltcProvincia").val("0");
        $("#sltcDistrito").empty();
        $("#sltcDistrito").append('<option value="0"  selected>Seleccionar</option>');
        $("#sltcDistrito").val("0");


        try {
            const response = await fetch(url, dataRequest);
            const resultado = await response.json();

            if (resultado.success) {
                Init_ComboProvincia(resultado.data);
            } else {
                $("#sltcProvincia").empty();
                $("#sltcProvincia").append('<option value="0"  selected>Seleccionar</option>');
                $("#sltcProvincia").val("0");
            }
        } catch (err) {
            console.error(err);
        }

    },
    SeleccionaDistrito: async (coddep, codpro) => {

        let url = new URL(urlpath + "/api/select_all_distrito/");
        url.searchParams.append('coddep', coddep);
        url.searchParams.append('codpro', codpro);
        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        };
        try {
            const response = await fetch(url, dataRequest);
            const resultado = await response.json();

            if (resultado.success) {
                Init_ComboDistrito(resultado.data);
            } else {
                $("#sltcDistrito").empty();
                $("#sltcDistrito").append('<option value="0"  selected>Seleccionar</option>');
                $("#sltcDistrito").val("0");
            }
        } catch (err) {
            console.error(err);
        }
    },
    SeleccionaDistritoPrecio: async (coddep, codpro, coddis) => {

        let url = new URL(urlpath + "/api/select_all_distrito_precio/");
        url.searchParams.append('coddep', coddep);
        url.searchParams.append('codpro', codpro);
        url.searchParams.append('coddis', coddis);
        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        };
        try {
            let response = await fetch(url, dataRequest);
            let resultado = await response.json();
            let TotalT = 0.00;
            if (resultado.success) {


                InitTotalesDelivery(parseFloat(resultado.total), parseFloat(resultado.envio));

            } else {
                let Total = SumaTotal();
                $("#precioEnvio").text('');
                InitTotalesDelivery(Total, 0.00);
                $("#sltcDistrito").empty();
                $("#sltcDistrito").append('<option value="0"  selected>Seleccionar</option>');
                $("#sltcDistrito").val("0");

            }
        } catch (err) {
            console.error(err);
        }
    }


}
let Init_ComboProvincia = (datos) => {
    // Limpiar el contenedor
    $("#sltcProvincia").empty();
    let html = `<option value="0" selected>Provincia</option> `;
    $("#sltcProvincia").append(html);
    // Recorrer cada producto en los datos limitados y generar el HTML
    $.each(datos, function (key, value) {

        if (key == 0) {
            html = `<option value="${value.codpro}" selected>${value.nompro}</option> `;

        } else {
            html = `<option value="${value.codpro}">${value.nompro}</option> `;
        }

        // Añadir el HTML generado al contenedor
        $("#sltcProvincia").append(html);
        $("#sltcProvincia").val("0");
    });
};
let Init_ComboDistrito = (datos) => {
    // Limpiar el contenedor
    $("#sltcDistrito").empty();
    let html = `<option value="0" selected>Seleccionar</option> `;
    $("#sltcDistrito").append(html);
    // Recorrer cada producto en los datos limitados y generar el HTML
    $.each(datos, function (key, value) {

        if (key == 0) {
            html = `<option value="${value.coddis}" selected>${value.nomdis}</option> `;

        } else {
            html = `<option value="${value.coddis}">${value.nomdis}</option> `;
        }

        // Añadir el HTML generado al contenedor
        $("#sltcDistrito").append(html);
        $("#sltcDistrito").val("0");

    });
};

let MostrarTienda = (direccionId) => {
    $("#idlocal").val('0');
    let idSelector = `.${direccionId}`;
    document.querySelector("#eligeTienda").style.display = "none";
    document.querySelector('.tiendas').style.display = "none";
    let lsttiendas = document.getElementsByClassName('direccion');

    Array.from(lsttiendas).forEach((tienda, index) => {
        tienda.style.display = "none";
    });
    let Local = document.querySelector(idSelector);
    Local.style.display = "block";
    let id_local = Local.getAttribute("data-id");
    $("#idlocal").val(id_local);

}
let EsconderTienda = () => {
    $("#idlocal").val('0');
    document.querySelector("#eligeTienda").style.display = "block";
    document.querySelector('.tiendas').style.display = "block";
    let lsttiendas = document.getElementsByClassName('direccion');

    Array.from(lsttiendas).forEach((tienda, index) => {
        tienda.style.display = "none";
    });

}
let Locales_Ubigeo = async () => {
    let url = new URL(urlpath + "/Contacto/refresh_datos_contacto/");

    const dataRequest = {
        method: "GET",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json; charset=UTF-8",
        },
    };
    try {
        const response = await fetch(url, dataRequest);
        const resultado = await response.json();
        let coordenadas = JSON.parse(localStorage.getItem('coordenadasGeolocalizacion'));
        if (resultado.success) {
            $.each(resultado.data, function (key, value) {
                let distancia = "9999";
                if (parseFloat(value.latitud) != 0 && parseFloat(value.longitud) != 0) {
                    distancia = (calcularDistancia(value.latitud, value.longitud, coordenadas.latitud, coordenadas.longitud)).toFixed(2);
                }


                value.distancia = parseFloat(distancia);


            });

            let Locales = (resultado.data).sort((a, b) => a.distancia - b.distancia);


            Init_cardLocales(Locales);

        } else {
            msg.Notifica(resultado.msg, "message", "top-right");
        }
    } catch (err) {
        console.error(err);
    }
}
let entregaDiv = (entrega) => {
    document.getElementById('recojo-tienda').style.display = 'none';
    let delivery = document.getElementById('delivery') || undefined;
    if (delivery != undefined) document.getElementById('delivery').style.display = 'none';

    let Total = SumaTotal();
    if (entrega === 'recojo-tienda') {
        document.getElementById('recojo-tienda').style.display = 'block';
        InitTotalesRecojo(Total);
    } else if (entrega === 'delivery') {
        EsconderTienda();
        $("#sltcDepartamento").val("0");
        $("#sltcProvincia").val("0");
        $("#sltcDistrito").val("0");
        $("#calle").val('');
        $("#referencia").val('');
        $("#precioEnvio").text('0.00');
        InitTotalesDelivery(Total, 0);
        document.getElementById('delivery').style.display = 'block';
    }
}
let limpiarDatosRuc = () => {
    $("#ruc").val("");
    $("#razsoc").val("");
    $("#domicilio_fiscal").val("");
    $('#ruc').removeClass("invalido");
    $('#razsoc').removeClass("invalido");
    $('#domicilio_fiscal').removeClass("invalido");
}
let documentosDiv = (factura) => {
    limpiarDatosRuc();
    if (factura == 'factura') {
        document.getElementById('ruc_detalle').style.display = 'block';
        $("#ruc").focus();
    } else {
        document.getElementById('ruc_detalle').style.display = 'none';
    }

}

let ClearValidRegistro = () => {
    $('#txtNombre').removeClass("invalido");
    $('#txtApPaterno').removeClass("invalido");
    $('#sltctipodocumento').removeClass("invalido");
    $('#txtdocumento').removeClass("invalido");
    $('#telefono').removeClass("invalido");
    $('#direccion').removeClass("invalido");

}
let SumaTotal = () => {
    let Total = 0.00;
    $(".itemtotal").each(function (index, celda) {
        Total = Total + parseFloat($(celda).text().replace(',', ''));
    });
    return Total;
}
let Init_cardLocales = (datos) => {
    // Limpiar el contenedor de productos
    $(".tiendas").empty();

    $.each(datos, function (key, value) {
        let html = "";

        html = `
                <div class="tienda" id="tienda${value.id}" data-local ="${value.id}"
                                                           onclick="MostrarTienda('tienda${value.id}')">
                                                           <h5>${value.nombre_local} ( ${(value.distancia == 9999 ? ' - ' : redondeoDecimal(value.distancia, 1))} km )  <br> ${value.direccion}  </h5>
                                                       </div>
                   `;

        // Añadir el HTML generado al contenedor
        $(".tiendas").append(html);
    });
};
let ValidaCompra = () => {

    let ubigeopermisos = JSON.parse(localStorage.getItem('permisoGeolocalizacion'));

    if (!ubigeopermisos.success) {
        msg.Notifica("Es necesario nos permita acceder a su ubicación, para proseguir, con su compra :) ", "error", "top-right");
        return false;
    };

    let chkTermino = document.getElementById("terms");
    let chkPrivacidad = document.getElementById("privacidad");
    let valida_cliente = $(".form_cliente").attr("data-info");

    if (!VALIDACION.CheckVal("txtNombre", "Ingrese sus nombres", 1, 100, false)) return false;
    if (!VALIDACION.CheckVal("txtApPaterno", "Ingrese sus apellidos", 1, 100, false)) return false;
    //  if (!VALIDACION.CheckVal("direccion", "Ingrese su dirección", 1, 300, false)) return false;
    if (!VALIDACION.CheckVal("telefono", "Ingrese su teléfono celular", 1, 11, false)) return false;

    /* const tipdoc = document.getElementById('sltctipodocumento');
    const valorseleccionado = tipdoc.options[tipdoc.selectedIndex].value;
     
         if (valorseleccionado == "2") {
             if (!VALIDACION.CheckVal("txtdocumento", "EL DNI debe tener 8 caracteres", 8, 8, false)) return false;
         } else if (valorseleccionado == "4") {
             if (!VALIDACION.CheckVal("txtdocumento", "EL CARNET DE EXTRANJERÍA debe tener 12 caracteres", 12, 12, false)) return false;
         } else if (valorseleccionado == "7") {
             if (!VALIDACION.CheckVal("txtdocumento", "EL PASAPORTE debe tener 12 caracteres", 12, 12, false)) return false;
         } else if (valorseleccionado == "23") {
             if (!VALIDACION.CheckVal("txtdocumento", "EL CARNET PTP debe tener 9 caracteres", 9, 9, false)) return false;
         }
         if (!VALIDACION.CheckVal("txtdocumento", "Ingrese su N° de Documento de Identidad", 1, 11, false)) return false;
     */
    if (valida_cliente == 0) {
        msg.Notifica("No ha confirmado sus datos de cliente", "error", "top-right");
        return false;
    }

    let factura = document.getElementById("factura");

    if (factura.checked) {
        if (!VALIDACION.CheckVal("ruc", "Ingrese el RUC correcto (11  dígitos)", 11, 11, false)) return false;
        if (!VALIDACION.CheckVal("razsoc", "Ingrese su Razón Social", 1, 300, false)) return false;
        if (!VALIDACION.CheckVal("domicilio_fiscal", "Ingrese su domicilio fiscal", 1, 300, false)) return false;

    }


    let recojoRadio = document.getElementById("recojoRadio");
    let deliveryRadio = document.getElementById("deliveryRadio") || undefined;

    if (recojoRadio.checked) {
        let id_local = $("#idlocal").val();
        if (id_local == "0") {
            msg.Notifica("No ha seleccionado una tienda donde recoger su compra !!", "error", "top-right");
            return false;
        }
    }
    if (deliveryRadio != undefined) {
        if (deliveryRadio.checked) {
            if (!VALIDACION.CheckCbo("sltcDepartamento", "Seleccione un departamento para la entrega", 0, false)) return false;
            if (!VALIDACION.CheckCbo("sltcProvincia", "Seleccione una provincia para la entrega", 0, false)) return false;
            if (!VALIDACION.CheckCbo("sltcDistrito", "Selecciones un distrito para la entrega", 0, false)) return false;

            if (!VALIDACION.CheckVal("calle", "Ingrese su dirección entrega", 1, 300, false)) return false;
            if (!VALIDACION.CheckVal("referencia", "Ingrese una referencia de la su dirección de entrega", 1, 300, false)) return false;
        }

    }



    if (!chkPrivacidad.checked) {
        msg.Notifica("Para proseguir debes marcar aceptar en nuestras políticas de privacidad y tratamiento de datos", "error", "top-right");
        chkPrivacidad.focus();
        return false;
    }
    if (!chkTermino.checked) {
        msg.Notifica("Para proseguir debes marcar aceptar en nuestros términos y condiciones", "error", "top-right");
        chkTermino.focus();
        return false;
    }

    return true;
}
let configButton = async () => {
    let chkTermino = document.getElementById("terms")
    let chkPrivacidad = document.getElementById("privacidad");
    let url = new URL(urlpath + "/Checkout/configurationButton");
    const dataRequest = {
        method: "POST",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json; charset=UTF-8",
        },
        body: JSON.stringify({ 'terms': (chkTermino.checked ? 1 : 0), 'privacidad': (chkPrivacidad.checked ? 1 : 0) })
    };
    $("#paganomas").empty();
    try {
        const response = await fetch(url, dataRequest);
        const resultado = await response.json();

        if (resultado.success) {
            $(".paganomas").html(resultado.button);
        } else {
            $(".paganomas").html('<button type="button" id="GrabaCompra" onclick="ClickOrderButton()"><b class="">PAGAR</b></button>');

        }
    } catch (err) {
        console.error(err);
    }

}
let ClickOrderButton = () => {
    if (!ValidaCompra()) return;
    $(".jm-cargaTemp").fadeIn(500);
    return true;
};
let ClickOrderButtonNz = async () => {
    if (!ValidaCompra()) return;

    let url = new URL(urlpath + "/Checkout/PreparePayment");

    let recojoRadio = document.getElementById("recojoRadio");
    let deliveryRadio = document.getElementById("deliveryRadio");
    let TipoEntrega = (recojoRadio.checked ? 0 : 1);
    let coordenadas = JSON.parse(localStorage.getItem('coordenadasGeolocalizacion'));
    let data_form = {};
    let PurchaseNumber = $("#pm").val();

    let terminos = document.getElementById("terms");
    let privacidad = document.getElementById("privacidad");

    let boleta = document.getElementById("boleta");
    let factura = document.getElementById("factura");

    if (TipoEntrega == 0) {

        data_form = {
            "TipoEntrega": TipoEntrega,
            "Sucursal": $("#idlocal").val(),
            "coddep": 0,
            "codpro": 0,
            "coddis": 0,
            "direcEntrega": "",
            "direcrefrencia": "",
            "latitud": coordenadas.latitud,
            "longitud": coordenadas.longitud,
            "total": 0.00,
            "stterminos": (terminos.checked ? 1 : 0),
            "stprivacidad": (privacidad.checked ? 1 : 0),
            "tipdocventa": (boleta.checked ? 3 : (factura.checked ? 1 : 0)),
            "ruc": (boleta.checked ? "" : $("#ruc").val()),
            "razsoc": (boleta.checked ? "" : $("#razsoc").val()),
            "dirfiscal": (boleta.checked ? "" : $("#domicilio_fiscal").val()),
        };

    } else {
        data_form = {
            "TipoEntrega": TipoEntrega,
            "Sucursal": 0,
            "coddep": $("#sltcDepartamento").val(),
            "codpro": $("#sltcProvincia").val(),
            "coddis": $("#sltcDistrito").val(),
            "direcEntrega": $("#calle").val(),
            "direcrefrencia": $("#referencia").val(),
            "latitud": coordenadas.latitud,
            "longitud": coordenadas.longitud,
            "total": 0.00,
            "stterminos": (terminos.checked ? 1 : 0),
            "stprivacidad": (privacidad.checked ? 1 : 0),
            "tipdocventa": (boleta.checked ? 3 : (factura.checked ? 1 : 0)),
            "ruc": (boleta.checked ? "" : $("#ruc").val()),
            "razsoc": (boleta.checked ? "" : $("#razsoc").val()),
            "dirfiscal": (boleta.checked ? "" : $("#domicilio_fiscal").val()),
        };

    }


    const dataRequest = {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json; charset=UTF-8'
        },
        body: JSON.stringify({ "PurchaseNumber": PurchaseNumber, "data_form": data_form })
    };

    $(".jm-cargaTemp").fadeIn(500);

    try {
        const resNiubiz = await fetch(url, dataRequest);
        const dataNiubiz = await resNiubiz.json();

        if (dataNiubiz.success == true) {
            let onubiz = dataNiubiz.data;
            VisanetCheckout.configure({
                sessiontoken: onubiz.sessionKey,
                channel: onubiz.channel,
                merchantid: onubiz.merchantid,
                purchasenumber: onubiz.purchasenumber,
                amount: onubiz.amount,
                expirationminutes: onubiz.expirationminutes,
                timeouturl: onubiz.timeouturl,
                merchantlogo: onubiz.merchantlogo,
                formbuttoncolor: onubiz.formbuttoncolor,
                action: onubiz.action,
                merchantname: onubiz.merchantname,
                complete: function (params) {
                    console.log(JSON.stringify(params));
                }
            });
            VisanetCheckout.open();
        } else {
            msg.Alert("::" + tittlemsg + "::", dataNiubiz.msg, () => {
            });
        }
    } catch (error) {
        console.error(error);
    }

    $(".jm-cargaTemp").fadeOut(500);


    return false;
}
let HtmlButtonConfirmcliente = (valid) => {
    $(".botones-checkout").empty();
    let html = '';
    if (valid == 0) {

        $('#txtNombre').attr("disabled", false);
        $('#txtApPaterno').attr("disabled", false);
        $('#sltctipodocumento').attr("disabled", false);
        $('#txtdocumento').attr("disabled", false);
        $('#telefono').attr("disabled", false);
        $('#direccion').attr("disabled", false);


        $(".form_cliente").attr("data-info", 0);
        html = `<button type="button" class="button_checkout" id="btnUpdatecliente" onclick="actualizacliente()">Confirma tus datos</button>`;
    } else {
        $('#txtNombre').attr("disabled", true);
        $('#txtApPaterno').attr("disabled", true);
        $('#sltctipodocumento').attr("disabled", true);
        $('#txtdocumento').attr("disabled", true);
        $('#telefono').attr("disabled", true);
        $('#direccion').attr("disabled", true);
        $(".form_cliente").attr("data-info", 1);
        html = `<div class="mt-10"><small class="edit_cart"><a onclick="EditarDatos()" class=""><i class="fa-solid fa-pencil"></i> Editar Datos</a> </small></div>`;
    }
    $(".botones-checkout").html(html);

}
let EditarDatos = () => {
    HtmlButtonConfirmcliente(0);
}

let actualizacliente = () => {

    let usuario = {
        'nombres': $("#txtNombre").val(),
        'apellidos': $("#txtApPaterno").val(),
        'tipdoc': $("#sltctipodocumento").val(),
        'nrodoc': $("#txtdocumento").val(),
        'celular': $("#telefono").val(),
        'direccion': $("#direccion").val(),
    };
    ClearValidRegistro();
    Editcliente(usuario, (e) => {
        if (e.success == true) {
            msg.Notifica(e.msg, "success", "top-right");
            HtmlButtonConfirmcliente(1);
            $(".jm-cargaTemp").fadeOut(500);
        } else {
            HtmlButtonConfirmcliente(0);
            $("[name='" + e.input + "']").addClass("invalido");
            msg.Notifica(e.msg, "error", "top-right");
            $("[name='" + e.input + "']").focus();
            $(".jm-cargaTemp").fadeOut(500);
        }
    });
}
let ConsultaRuc = async (ruc, fn) => {

    let url = new URL(urlpath + "/api/consulta_ruc/" + ruc);
    const dataRequest = {
        method: "GET",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json; charset=UTF-8",
        },
    };


    try {
        const response = await fetch(url, dataRequest);
        const resultado = await response.json();

        if (resultado.success) {
            fn(resultado.data);
        } else {
            $("#ruc").val("");
            $("#razsoc").val("");
            $("#domicilio_fiscal").val("");
            msg.Notifica(resultado.msg, 'error', 'top-right');
        }
    } catch (err) {
        console.error(err);
    }

}
$(document).ready(() => {

    (async function () {
        checkGeolocationPermission().then((e) => {
            localStorage.setItem("permisoGeolocalizacion", JSON.stringify(e));
        });
        Geolocalizacion().then((e) => {
            localStorage.setItem("coordenadasGeolocalizacion", JSON.stringify(e));
        });
    }());

    Locales_Ubigeo();
    $(".jm-loadingpage").fadeOut(2500);
    $('#sltcDepartamento').val("0");
    entregaDiv('recojo-tienda');
    documentosDiv('boleta');
    $('#sltctipodocumento').on('change', () => {
        let tipdoc = $("#sltctipodocumento").val();
        let nrodoc = $("#txtdocumento");
        $("#txtdocumento").val('');
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
    $('#sltcDepartamento').on('change', () => {
        let coddep = $("#sltcDepartamento").val();
        let Total = SumaTotal();
        InitTotalesDelivery(Total, 0.00);


        Ubigeo.SeleccionaProvincia(coddep);

    });
    $('#sltcProvincia').on('change', () => {
        let coddep = $('#sltcDepartamento').val();
        let codpro = $("#sltcProvincia").val();
        let Total = SumaTotal();
        InitTotalesDelivery(Total, 0.00);
        Ubigeo.SeleccionaDistrito(coddep, codpro);


    });
    $('#sltcDistrito').on('change', () => {
        let coddep = $('#sltcDepartamento').val();
        let codpro = $("#sltcProvincia").val();
        let coddis = $("#sltcDistrito").val();
        let Total = SumaTotal();
        InitTotalesDelivery(Total, 0.00);
        Ubigeo.SeleccionaDistritoPrecio(coddep, codpro, coddis);


    });

    $("#recojoRadio").on("change", () => {
        entregaDiv('recojo-tienda');
    });
    $("#deliveryRadio").on("change", () => {
        entregaDiv('delivery');
    });

    $("#boleta").on('click', () => {
        documentosDiv('boleta');
    });
    $("#factura").on('click', () => {
        documentosDiv('factura');
    });
    $("#terms").on("click", () => {
        configButton();
    });
    $("#privacidad").on("click", () => {
        configButton();
    });

    $("#btnsunat").on("click", () => {
        let ruc = $("#ruc").val();
        if (!VALIDACION.CheckVal("ruc", "Ingrese el RUC correcto (11  dígitos)", 11, 11, false)) return false;
        $(".jm-cargaTemp").fadeIn(500);
        ConsultaRuc(ruc, (e) => {

            $("#ruc").val(e.ruc);
            $("#razsoc").val(e.razonSocial);
            $("#domicilio_fiscal").val(e.direccion);
        })
        $(".jm-cargaTemp").fadeOut(500);
    });

});





//Este js no está siendo llamado en checkout.tpl