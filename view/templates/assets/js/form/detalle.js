let metodos = {
    Select_one_porciones: async (codart_web, codart, fn) => {
        let url = new URL(urlpath + "/Detalle/select_porcion_cake/");
        url.searchParams.append('codart_web', codart_web);
        url.searchParams.append('codart', codart);
        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        };
        $("#total-product span").text("");
        $("#btnProducto").attr("data-id", "");

        try {
            await fetch(url, dataRequest)
                .then((resultado) => resultado.json())
                .then((resultado) => {
                    let precio = 0.00;
                    if (resultado.success) {
                        if (resultado.data != undefined) {
                            let producto = resultado.data;
                            precio = producto.precio;
                            $("#total-product span").text(producto.precio);
                            $("#btnProducto").attr("data-id", producto.codart);

                            if (producto.horas != 0) {
                                $("#tiempo_elaboracion").text(producto.horas);
                            } else {
                                $(".elaboracion").addClass("hide");
                            }
                        }

                    } else {
                        $("#btnProducto").attr("data-id", "");
                        $("#total-product span").text("0.00");
                        $("#tiempo_elaboracion").text("-");
                    }
                    fn(precio);
                }).catch(error => {
                    msg.Notifica('Error al obtener los datos: ' + error);
                });
        } catch (err) {
            msg.Notifica(err);
        }
    },

    Select_dedicatoria: async (fn) => {
        let url = new URL(
            urlpath +
            "/Detalle/carga_dedicatoria"
        );

        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        }
        try {
            await fetch(url, dataRequest)
                .then((resultado) => resultado.json())
                .then((resultado) => {
                    let importe = 0.00;
                    if (resultado.success) {

                        if (resultado.data != undefined) {
                            importe = resultado.data;
                        }
                    }
                    fn(importe);
                }).catch(error => {
                    msg.Notifica('Error al obtener los datos: ' + error);
                });
        } catch (err) {
            msg.Notifica(err);
        }
    },
    Select_rellenos_por_keke: async (codart_web, id_keke, cdc) => {
        let url = new URL(urlpath + "/Detalle/carga_rellenos_x_keke/");
        url.searchParams.append('codart_web', codart_web);
        url.searchParams.append('id_keke', id_keke);
        url.searchParams.append('cdc', cdc);
        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        };

        try {
            await fetch(url, dataRequest)
                .then((resultado) => resultado.json())
                .then((resultado) => {
                    if (resultado.success) {
                        let datos = resultado.data;
                        $("#relleno").empty();
                        let html = '<option selected value="0">Elige una opción</option>';
                        $("#relleno").append(html);
                        $.each(datos, function (key, value) {
                            html = `<option value="${value.id_relleno}">${value.relleno}</option>`;

                            $("#relleno").append(html);
                        });

                    } else {
                        $("#relleno").empty();
                        let html = '<option selected value="0">Elige una opción</option>';
                        $("#relleno").append(html);
                    }
                }).catch(error => {
                    msg.Notifica('Error al obtener los datos: ' + error);
                });
        } catch (err) {
            msg.Notifica(err);
        }
    },
    RefreshDatosBocaditos: async (pagina = 1, limite = 4) => {
        let criterio = $("#searchInput").val();

        let url = new URL(urlpath + "/Detalle/refresh_datos_bocaditos_detalle/");
        url.searchParams.append('pagina', pagina);
        url.searchParams.append('limite', limite);

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
                Init_cardBocaditos(resultado.data, resultado.total_items, resultado.pagina, resultado.limite);
                setupPagination(resultado.total_items, resultado.pagina, resultado.limite);
            }
        } catch (err) {
            console.error(err);
        }
    },
    Select_one_img: async (codart_web, codart) => {
        let url = new URL(urlpath + "/Detalle/change_imagen_detalle_porcion/");
        url.searchParams.append('codart_web', codart_web);
        url.searchParams.append('codart', codart);
        const dataRequest = {
            method: "GET",
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json; charset=UTF-8",
            },
        };

        const img = document.getElementById('image-producto');
        let url_img = img.getAttribute('src');
       
        try {
            await fetch(url, dataRequest)
                .then((resultado) => resultado.json())
                .then((resultado) => {
                 
                    if (resultado.success) {
                        if (resultado.data != undefined) {
                            let producto = resultado.data;
                            url_img = producto.url;
                            img.setAttribute('src', assets + '/' +  url_img);
                        }

                    } else {
                        img.setAttribute('src', url_img);

                    }
                 
                }).catch(error => {
                    msg.Notifica('Error al obtener los datos: ' + error);
                });
        } catch (err) {
            msg.Notifica(err);
        }
    }
};

let Init_cardBocaditos = (datos, totalItems, currentPage, limit) => {
    $("#producto-cards .grid-pagination-cards").empty();
    $.each(datos, function (key, value) {
        let html = `
                <div class="item" >
                    <div class="cuerpo">
                        <a href="${urlpath}/Detalle/?p=${value.codart_web}" class="detalle-link" ><img async src="${assets + "/" + value.url}" alt="imagen" width="20%"></a>
                        <div class="titulo">${value.descri_corta}</div>
                        <div class="descripcion">${value.descri_larga}</div>
                        <div class="precio"><b> S/ ${value.precio_min} ${(value.precio_max == 0 ? ' ' : ' - S/ ' + value.precio_max)}     </b>  </div>
                    </div>
                    <div class="pie">
                        <button  class="btn-card agregar-producto" data-href="${urlpath}/Detalle/?p=${value.codart_web}" onClick="locationdatahref(this)">Ver Opciones</button>
                    </div>
                </div>
            `;
        // Añadir el HTML generado al contenedor 

        $("#producto-cards .grid-pagination-cards").append(html);
    });

};



let setupPagination = (totalItems, currentPage, limit) => {
    let totalPages = Math.ceil(totalItems / limit);
    let paginationHTML = '';

    // Botón de flecha izquierda
    paginationHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                           <a class="page-link arrow" href="#" aria-label="Previous" data-page="${currentPage - 1}">
                               <i class="fa-solid fa-caret-left"></i>
                           </a>
                       </li>`;

    for (let i = 1; i <= totalPages; i++) {
        paginationHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                               <a class="page-link" href="#" data-page="${i}">${i}</a>
                           </li>`;
    }

    // Botón de flecha derecha
    paginationHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                           <a class="page-link arrow" href="#" aria-label="Next" data-page="${currentPage + 1}">
                               <i class="fa-solid fa-caret-right"></i>
                           </a>
                       </li>`;

    $('.pagination-cards').html(paginationHTML);

    $('.pagination-cards .page-link').click(function (e) {
        e.preventDefault();
        let page = parseInt($(this).data('page'));
        if (!isNaN(page) && page > 0 && page <= totalPages) {
            metodos.RefreshDatosBocaditos(page, limit);
        }
    });
};

let addAccesorio = (e) => {
    let pcodart = e.getAttribute("data-id");
    let pcodartweb = e.getAttribute("data-wb");
    addCart(pcodart, pcodartweb, 0, 0, 1, '', '', false, function (e) {
        if (e) {

            toggleSidebar();
        }
    });


    return;
}
$(document).ready(() => {
    let preciounico = "0.00";
    let timeout;
    $("#porciones").val("0");
    $("#cakes").val("0");
    $("#relleno").val("0");
    preciounico = $("#total-product").data("precio");
    $("#total-product span").text(preciounico);
    $("input[type='date']").val("");
    $("#dedicatoria").val("");



    metodos.RefreshDatosBocaditos();



    $("#porciones").on("change", function () {
        let codart = $(this).val();
        let codart_web = $("#producto").attr("data-wb");
        let okdedicatoria = $("#dedicatoria").attr("data-ok");
        if (codart == "0") {
            $("#total-product span").text("0.00");
            return;
        }

        metodos.Select_one_img(codart_web, codart);

        metodos.Select_one_porciones(codart_web, codart, (precio) => {
            let precio_final = precio;

            if (okdedicatoria == "1") {
                metodos.Select_dedicatoria((precio_tarjeta) => {
                    precio_final = parseFloat(precio_final) + parseFloat(precio_tarjeta);
                    ;
                    $("#total-product span").text(formatNumber(precio_final));
                });
            } else {

                $("#total-product span").text(formatNumber(precio_final));
            }
        });
    });
    $("#cakes").on("change", function () {
        let id_keke = $(this).val();
        let codart_web = $("#producto").attr("data-wb");
        let cdc = $("#producto").attr("data-wb-cd");
        $("#btnProducto").attr("data-k", id_keke);
        $("#btnProducto").attr("data-r", "0");
        metodos.Select_rellenos_por_keke(codart_web, id_keke, cdc);
    });
    $("#relleno").on("change", function () {
        let id_relleno = $(this).val();
        $("#btnProducto").attr("data-r", id_relleno);
    });
    $("#recojo").on("change", function () {
        let fecha = $(this).val();
        $("#btnProducto").attr("data-f", fecha);
    });

    $("#dedicatoria").on("input", function () {
        clearTimeout(timeout);
        let codart = "";
        let TienePc = $("#producto").attr("pc");
        if (TienePc == "1") {
            codart = $("#porciones").val();
        } else {
            codart = $("#btnProducto").attr("data-id");
        }


        let codart_web = $("#producto").attr("data-wb");
        let dedicatoria = $(this).val();

        dedicatoria = dedicatoria.trim();

        $("#dedicatoria").attr("data-ok", (dedicatoria.length == "0" ? "0" : "1"));
        $("#btnProducto").attr("data-d", dedicatoria);


        if (codart == "0") {
            $("#total-product span").text("0.00");
            return;
        }
        timeout = setTimeout(() => {

            metodos.Select_dedicatoria((precio_tarjeta) => {
                let precio_final = (dedicatoria.length == "0" ? 0 : precio_tarjeta);
                metodos.Select_one_porciones(codart_web, codart, (precio) => {
                    precio_final = parseFloat(precio_final) + parseFloat(precio);
                    $("#total-product span").text(formatNumber(precio_final));
                });
            });
        }, 500);


    });

    $("#btnProducto").on("click", function () {

        let add = $("#btnProducto");
        let pcodart = add.attr("data-id");
        let pcodartweb = $("#producto").attr("data-wb");
        let pidkeke = add.attr("data-k");
        let pidrelleno = add.attr("data-r");
        let pfecrecojo = add.attr("data-f");
        let pdedicatoria = add.attr("data-d");
        let pcantidad = 1;
        pdedicatoria = pdedicatoria.trim();


        addCart(pcodart, pcodartweb, pidkeke, pidrelleno, pcantidad, pfecrecojo, pdedicatoria, false, function (e) {
            if (e) {
                toggleSidebar();
            }

        });


        return;
    });
});
