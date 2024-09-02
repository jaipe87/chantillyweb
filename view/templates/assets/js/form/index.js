var id_pagina = $("#page").val();


let metodos = {
    RefreshDatosLocalIndex: async () => {
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

            let coordenadas = JSON.parse(localStorage.getItem('coordenadasGeolocalizacion')) || undefined;
            if (resultado.success) {


                $.each(resultado.data, function (key, value) {
                    let distancia = "9999";
                    if (parseFloat(value.latitud) != 0 && parseFloat(value.longitud) != 0) {
                        distancia = (calcularDistancia(value.latitud, value.longitud, coordenadas.latitud, coordenadas.longitud)).toFixed(2);
                    }
                    value.distancia = parseFloat(distancia);
                });

                let Locales = (resultado.data).sort((a, b) => a.distancia - b.distancia);


                Init_cardLocalIndex(Locales);

            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }
    },
    RefreshDatosTortasIndex: async (pagina = 1, limite = 8) => {
        let criterio = $("#searchInput").val();

        let url = new URL(urlpath + "/Tortas/refresh_datos_tortas_destacadas/");
        url.searchParams.append('pagina', pagina);
        url.searchParams.append('limite', limite);
        url.searchParams.append('id_pagina', id_pagina);
        url.searchParams.append('criterio', criterio)

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
                Init_cardTortaIndex(resultado.data, resultado.total_items, resultado.pagina, resultado.limite);
                setupPaginationTorta(resultado.total_items, resultado.pagina, resultado.limite);
            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }
    },
    RefreshDatosTortasEspIndex: async (pagina = 1, limite = 8) => {
        let url = new URL(urlpath + "/Tortas/refresh_datos_tortas_personalizadas/");
        url.searchParams.append('pagina', pagina);
        url.searchParams.append('limite', limite);
        url.searchParams.append('id_pagina', id_pagina);

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
                Init_cardTortaEspIndex(resultado.data, resultado.total_items, resultado.pagina, resultado.limite);
                setupPaginationTortaEsp(resultado.total_items, resultado.pagina, resultado.limite);
            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }
    },
    CargaTipdoccliente: async () => {
        let url = new URL(urlpath + "/api/select_all_tipdoc/");

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
                Init_ComboTipdoc(resultado.data);
            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }

    }
};


let Init_ComboTipdoc = (datos) => {
    // Limpiar el contenedor
    $("#cboTipdoc").empty();

    // Limitar los datos a los primeros 3 elementos
    let Listadoc = datos;
    let html = "";
    // Recorrer cada producto en los datos limitados y generar el HTML
    $.each(Listadoc, function (key, value) {

        if (key == 0) {
            html = `<option value="${value.cod}" selected>${value.desabr}</option> `;

        } else {
            html = `<option value="${value.cod}">${value.desabr}</option> `;
        }

        // Añadir el HTML generado al contenedor
        $("#cboTipdoc").append(html);
    });
};


let Init_cardLocalIndex = (datos) => {
    // Limpiar el contenedor
    $(".cards-locales").empty();

    // Limitar los datos a los primeros 3 elementos
    let limiteLocales = datos.slice(0, 3);

    // Recorrer cada producto en los datos limitados y generar el HTML
    $.each(limiteLocales, function (key, value) {
        let html = `
            <div class="card-section-local">
                <div class="cuerpo">
                         <img src="${assets + value.imagen}" alt="imagen">
                    <br><br>
                    <div class="titulo">
                    ${value.nombre_local} ( ${(value.distancia == 9999 ? '-' : redondeoDecimal(value.distancia, 1))} km )
                    </div>
                    <div class="descripcion" style="font-family: 'Poppins' !important; font-size: 13px">
                    ${value.direccion}-${value.distrito}
                    <br>
                    ${value.dias_atencion} de ${value.horario_ini.substring(0, 5)} a.m. - ${value.horario_fin.substring(0, 5)} p.m.
                    </div>
                </div>
                <br>
                <div class="pie">
                    <a href="${value.link_local}">Más información &#62;</a>
                </div>
            </div>
        `;
        // Añadir el HTML generado al contenedor
        $(".cards-locales").append(html);
    });
};


let Init_cardTortaIndex = (datos, totalItems, currentPage, limit) => {
    // Limpiar el contenedor de productos
    $("#lista-productos .grid-pagination").empty();

    // Recorrer cada producto en los datos y generar el HTML
    $.each(datos, function (key, value) {
        let html = `
                <div class="item" >
                    <div class="cuerpo">
                        <a href="${urlpath}/Detalle/?p=${value.codart_web}" class="detalle-link" ><img src="${assets + "/" + value.url}" alt="imagen" width="20%"></a>
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

        $(".rango-resultados label.label_pagina").text(currentPage * (totalItems < limit ? totalItems : limit));
        $(".rango-resultados label.label_total_items").text(totalItems);
        $("#lista-productos .grid-pagination").append(html);
    });
};

let setupPaginationTorta = (totalItems, currentPage, limit) => {
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

    $('.pagination').html(paginationHTML);

    $('.pagination .page-link').click(function (e) {
        e.preventDefault();
        let page = parseInt($(this).data('page'));
        if (!isNaN(page) && page > 0 && page <= totalPages) {
            metodos.RefreshDatosTortasIndex(page, limit);
        }
    });
};



let Init_cardTortaEspIndex = (datos) => {
    // Limpiar el contenedor 
    $(".grid-pagination-cards").empty();

    // Recorrer cada producto en los datos y generar el HTML
    $.each(datos, function (key, value) {
        let html = `
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="${urlpath}/Detalle/?p=${value.codart_web}" class="detalle-link" ><img src="${assets + "/" + value.url}" alt="imagen" width="20%"></a>
                        <div class="titulo">
                        ${value.descri_corta}
                        </div>
                        <div class="descripcion">
                        ${value.descri_larga}
                        </div>
                        <div class="precio">
                            <b>S/ ${value.precio_min} - S/ ${value.precio_max} </b>
                        </div>
                    </div>
                    <div class="pie">
                       <button  class="btn-card agregar-producto" data-href="${urlpath}/Detalle/?p=${value.codart_web}" onClick="locationdatahref(this)">Ver Opciones</button>
                    </div>
                </div>
            `;
        // Añadir el HTML generado al contenedor
        $(".grid-pagination-cards").append(html);
    });
};

let setupPaginationTortaEsp = (totalItems, currentPage, limit) => {
    let totalPages = Math.ceil(totalItems / limit);
    let paginationHTML = '';

    // Botón de flecha izquierda
    paginationHTML += `<li class="page-item-cards ${currentPage === 1 ? 'disabled' : ''}">
                           <a class="page-link-cards arrow" href="#" aria-label="Previous" data-page="${currentPage - 1}">
                               <i class="fa-solid fa-caret-left"></i>
                           </a>
                       </li>`;

    for (let i = 1; i <= totalPages; i++) {
        paginationHTML += `<li class="page-item-cards ${i === currentPage ? 'active' : ''}">
                               <a class="page-link-cards" href="#" data-page="${i}">${i}</a>
                           </li>`;
    }

    // Botón de flecha derecha
    paginationHTML += `<li class="page-item-cards ${currentPage === totalPages ? 'disabled' : ''}">
                           <a class="page-link-cards arrow" href="#" aria-label="Next" data-page="${currentPage + 1}">
                               <i class="fa-solid fa-caret-right"></i>
                           </a>
                       </li>`;

    $('.pagination-cards').html(paginationHTML);

    $('.pagination-cards .page-link-cards').click(function (e) {
        e.preventDefault();
        let page = parseInt($(this).data('page'));
        if (!isNaN(page) && page > 0 && page <= totalPages) {
            metodos.RefreshDatosTortasEspIndex(page, limit);
        }
    });
};

// Llamada inicial para cargar los datos
$(document).ready(() => {
    let editcart = localStorage.getItem('editcart');
    if (editcart != undefined && editcart != null) {
        if (editcart == 'true') {
            toggleSidebar();
            localStorage.setItem("editcart", 'false');
        }
    }



    metodos.RefreshDatosLocalIndex();
    metodos.RefreshDatosTortasIndex();
    metodos.RefreshDatosTortasEspIndex();
    metodos.CargaTipdoccliente();
    $('#searchButton').click(function (e) {
        metodos.RefreshDatosTortasIndex();
    });

    $('#searchInput').keypress(function (event) {
        if (event.keyCode == 13) {
            metodos.RefreshDatosTortasIndex();
        }
    });
    $("#slider .slider-content img").click(function (e) {
        let link = $(this).data('link');
        if (link == "#" || link == '') {
            return;
        }
        let a = document.createElement("a");
        a.href = link;
        a.target = '_blank';
        a.click();
    })

});
