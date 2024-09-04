$(document).ready(() => {

    (async function () {
        checkGeolocationPermission().then((e) => {
            localStorage.setItem("permisoGeolocalizacion", JSON.stringify(e));
        });
        Geolocalizacion().then((e) => {
            localStorage.setItem("coordenadasGeolocalizacion", JSON.stringify(e));
        });
    }());



    $("#BtnCerrarSesion").on("click",()=>{
      let a = document.createElement("a");
      a.href=`${urlpath}/Auth/LogOut`;
      a.click();
    })

});