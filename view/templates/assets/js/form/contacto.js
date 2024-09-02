
let metodos = {
    RefreshDatosContacto: async () => {
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

                Init_cardLocales(Locales);
            } else {
                msg.Notifica(resultado.msg, "message", "top-right");
            }
        } catch (err) {
            console.error(err);
        }
    }
};
let Init_cardLocales = (datos) => {
    // Limpiar el contenedor de productos
    $(".cards-section-locales").empty();
    
    $.each(datos, function (key, value) {

        let html = `
            <div id="card-local${value.key}"  class="card-section-local">
                <div class="cuerpo">
                    <img src="${assets + value.imagen}" alt="imagen">
                    <br><br>
                    <div class="titulo">
                        ${value.nombre_local} ( ${(value.distancia == 9999 ? '-' : redondeoDecimal(value.distancia, 1))} km )
                    </div>
                    <div class="descripcion">
                        ${value.direccion}-${value.distrito}
                        <br>
                        ${value.dias_atencion} de ${value.horario_ini.substring(0, 5)} - ${value.horario_fin.substring(0, 5)} horas
                    </div>
                </div>
                <br>
                <div class="pie">
                    <a href="${value.link_local}">Más información &#62;</a>
                </div>
            </div>
            `;

        // Añadir el HTML generado al contenedor
        $(".cards-section-locales").append(html);
    });
};

// Llamada inicial para cargar los datos
$(document).ready(() => {
    metodos.RefreshDatosContacto();
});

///Todavia no funciona