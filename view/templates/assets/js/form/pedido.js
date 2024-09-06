
let pedidos = {
    RefreshDatosPedidos: async (idpedido = 0, idfiltro = 1, tipo = '0') => {
        $(".jm-cargaTemp").fadeIn(500);
        let url = new URL(urlpath + "/Cuenta/get_pedidos/");
        url.searchParams.append('id_pedido', idpedido);
        url.searchParams.append('id_filtro', idfiltro);
        url.searchParams.append('id_tipo', tipo);
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
                Init_cardPedido(resultado.data);

            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }
        $(".jm-cargaTemp").fadeOut(500);
    }
};

let Init_cardPedido = (datos) => {
    $(".items_compras").empty();
    let pie = '';
    let cabecera = '';
    let cuerpo = '';
    $.each(datos, function (key, value) {
        const id_pedido = (value.id_pedido).toString().padStart(4, '0');
        const fechaOriginal = value.fecha;
        const fechaObjeto = new Date(fechaOriginal);
        const dia = fechaObjeto.getDate();
        const mes = fechaObjeto.toLocaleString("default", { month: "long" });
        const anio = fechaObjeto.getFullYear();
        const fechaFormateada = `${dia.toString().padStart(2, '0')} de ${mes} ${anio}`;


        cabecera = `
                <div class="items">
                        <div class="compra">
                            <div class="header_item">
                                <div class="fecha_compra">
                                    <p class="">
                                       <b class=""> ${fechaFormateada}</b>
                                    </p>
                                </div>
                                <div class="importe_compra">
                                    <p class="">
                                       <b class="">S/ <span>${formatNumber(value.total)}</span></b> 
                                    </p>
                                </div>
                            </div>
                            <div class="body_item">
                                <div class="detalle_item">
                                    <div class="producto">
                                        <div class="nropedido">
                                            <div class="pedido">
                                                <p> <b class="">Compra Nº ${id_pedido}</b></p>
                                            </div>
                                        </div>`;


        cuerpo = "";
        $.each(value.detalle, function (key, items) {
            let item = `<div class="item_estado">
                                                                        <div class="imagen">
                                                                            <img src="${assets + "/" + items.urldet}" alt="" class="">
                                                                        </div>
                                                                        <div class="datos_pedido">
                                                                            <div class="situcion">
                                                                                <div class="name_product">
                                                                                    <p> <b class=""><span class="">${items.cantidad} x</span> ${items.descri_corta}</b> </p>
                                                                                </div>

                                                                                <div class="toping_product">

                                                                                ${(items.porcion == '' ? "" : "<p>Porción : " + items.porcion + "</p>")}
                                                                                ${(items.medidas == '' ? "" : "<p>Medida : " + items.medidas + "</p>")}
                                                                                ${(items.keke == '' ? "" : "<p>Keke : " + items.keke + "</p>")}
                                                                                ${(items.relleno == '' ? "" : "<p>Relleno : " + items.relleno + "</p>")}
                                                                                ${(items.diarecojo == '' ? "" : "<p>Fecha Recojo : " + items.diarecojo + "</p>")}
                                                                                ${(items.dedicatoria == '' ? "" : "<p>Nombre o Dedicatoria : " + items.dedicatoria + "</p>")}

                                                                                </div>
                                                                                <div class="neto_product">
                                                                                    <p> <b class=""> S/ <span class="">${items.neto}</span></b> </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>`;

            cuerpo += item;
        });



        if (value.tipo_envio == 0) {
            pie = `</div>
                        <div class="detalle">
                            <div class="grid_pedido">

                                <div>
                                    <p class="title"> <i class="fa fa-check-square"></i>
                                        <b class="">Tipo de Entrega</b> </p>
                                </div>
                                <div>
                                    <p  class="label"> ${value.desentrega}  </p>
                                </div>

                                <div>
                                    <p class="title"><i class="fa fa-home"></i>  <b class="">Tienda</b></p>
                                </div>
                                <div>
                                    <p class="label"> <b>${value.nombre_local}</b></p>
                                    <p class="label">${value.direcc_local}</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                `;
        } else {
            pie = `</div>
                        <div class="detalle">
                            <div class="grid_pedido">

                                <div>
                                    <p class="title"> <i class="fa fa-check-square"></i>
                                        <b class="">Tipo de Entrega</b> </p>
                                </div>
                                <div>
                                    <p  class="label"> ${value.desentrega}  </p>
                                </div>

                                <div>
                                    <p class="title"><i class="fa fa-home"></i>  <b class="">Dirección Entrega</b></p>
                                </div>
                                <div>
                                    <p class="label">${value.direcc_entrega}</p>
                                    <p class="label">${value.ref_direccion}</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                `;
        }




        let html = cabecera + cuerpo + pie;
        $(".items_compras").append(html);
    });



}


$(document).ready(() => {

    pedidos.RefreshDatosPedidos();

    $('#cboFiltroCompras').on("change", () => {
        const idpedido = $("#txtBuscar").val();
        const idfiltro = $("#cboFiltroCompras").val();
        const opcionSeleccionada = $("#cboFiltroCompras option:selected");
        const tipo = opcionSeleccionada.data("t");
        pedidos.RefreshDatosPedidos(idpedido, idfiltro, tipo);

    })

    $('#btnsearch').on("click", () => {
        const idpedido = $("#txtBuscar").val();
        const idfiltro = $("#cboFiltroCompras").val();
        const opcionSeleccionada = $("#cboFiltroCompras option:selected");
        const tipo = opcionSeleccionada.data("t");
    
        pedidos.RefreshDatosPedidos(idpedido, idfiltro, tipo);


    })



});

