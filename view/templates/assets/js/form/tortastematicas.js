
let id_tematica = $("#tortas").attr("data-tm");
let metodos = {
    RefreshDatosTortasTematicas: async (pagina = 1, limite = 8) => {
        let criterio = $("#searchInput").val();

        let url = new URL(urlpath + "/TortasTematicas/refresh_datos_tortas_tematicas/");
        url.searchParams.append('pagina', pagina);
        url.searchParams.append('limite', limite);
        url.searchParams.append('id_tematica', id_tematica);
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
                Init_cardTorta(resultado.data, resultado.total_items, resultado.pagina, resultado.limite);
                setupPagination(resultado.total_items, resultado.pagina, resultado.limite);
            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }
    },
};
/**
 * Una de las opciones es el uso de local storage asi como lo hice anteriormente en 
 * 
 */
let Init_cardTorta = (datos, totalItems, currentPage, limit) => {

    $("#lista-productos .grid-pagination").empty();

    // Recorrer cada producto en los datos y generar el HTML
    $.each(datos, function (key, value) {
        let html = `
                <div class="item" >
                    <div class="cuerpo">
                        <a href="${urlpath}/Detalle/?p=${value.codart_web}" class="detalle-link" ><img  src="${assets + "/" + value.url}" alt="imagen" width="20%"></a>
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
//Se agrego la funcion click de agregar carrito y detalle link

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

    $('.pagination').html(paginationHTML);

    $('.pagination .page-link').click(function (e) {
        e.preventDefault();
        let page = parseInt($(this).data('page'));
        if (!isNaN(page) && page > 0 && page <= totalPages) {
            metodos.RefreshDatosTortasTematicas(page, limit);
        }
    });

};

let ActivaTematica = (id_tematica) => {
    const listaTemas = document.querySelectorAll(".scrollmenu > #grid .name-section");
    listaTemas.forEach((elemt) => {
        let a = elemt.firstElementChild;
        let idtematica = a.getAttribute("data-tematica");
         
        if (idtematica == id_tematica) {
            a.classList.add('activo');
        }else{
            a.classList.remove('activo');
        }
    });
}
// Llamada inicial para cargar los datos
$(document).ready(() => {

    (function () {
        ActivaTematica(id_tematica);
        metodos.RefreshDatosTortasTematicas();
    }());




    $('#searchButton').click(function (e) {
        metodos.RefreshDatosTortasTematicas();
    });

    $('#searchInput').keypress(function (event) {
        if (event.keyCode == 13) {
            metodos.RefreshDatosTortasTematicas();
        }
    });



});

///Todavia no funciona el clic Carrito