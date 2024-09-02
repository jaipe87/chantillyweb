var id_pagina = $("#page").val();
let metodos = {
    RefreshDatosPostres: async (pagina = 1, limite = 8) => {
        let criterio = $("#searchInput").val();

        let url = new URL(urlpath + "/Postres/refresh_datos_postres/");
        url.searchParams.append('pagina', pagina);
        url.searchParams.append('limite', limite);
        url.searchParams.append('id_pagina',id_pagina);
        url.searchParams.append('criterio',criterio)

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
                Init_cardPostres(resultado.data,resultado.total_items, resultado.pagina, resultado.limite);
                setupPagination(resultado.total_items, resultado.pagina, resultado.limite);
            } else {
                msg.Notifica( resultado.msg,"message","top-right");
            }
        } catch (err) {
            console.error(err);
        }
    }
};
let Init_cardPostres = (datos, totalItems, currentPage, limit) => {
    $("#lista-productos .grid-pagination").empty();
    $.each(datos, function (key, value) {
        let html = `
                <div class="item" >
                    <div class="cuerpo">
                        <a href="${urlpath}/Detalle/?p=${value.codart_web}" class="detalle-link" ><img  src="${assets + "/" + value.url}" alt="imagen" width="20%"></a>
                        <div class="titulo">${value.descri_corta}</div>
                        <div class="descripcion">${value.descri_larga}</div>
                        <div class="precio"><b> S/ ${value.precio_min} ${(value.precio_max == 0 ? ' ' : ' - S/ ' + value.precio_max )}     </b>  </div>
                    </div>
                    <div class="pie">
                        <button  class="btn-card agregar-producto" data-href="${urlpath}/Detalle/?p=${value.codart_web}" onClick="locationdatahref(this)">Ver Opciones</button>
                    </div>
                </div>
            `;
        // Añadir el HTML generado al contenedor 

        $(".rango-resultados label.label_pagina").text(currentPage * (totalItems<limit ? totalItems : limit));
        $(".rango-resultados label.label_total_items").text(totalItems);
        $("#lista-productos .grid-pagination").append(html);
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

    $('.pagination').html(paginationHTML);

    $('.pagination .page-link').click(function (e) {
        e.preventDefault();
        let page = parseInt($(this).data('page'));
        if (!isNaN(page) && page > 0 && page <= totalPages) {
            metodos.RefreshDatosPostres(page, limit);
        }
    });
};

// Llamada inicial para cargar los datos de los Postres
$(document).ready(() => {

     metodos.RefreshDatosPostres();
     
     $('#searchButton').click(function (e) {
        metodos.RefreshDatosPostres();
     });
  
     $('#searchInput').keypress(function(event) {
     if(event.keyCode  == 13){
      metodos.RefreshDatosPostres();
     }
 });


});

