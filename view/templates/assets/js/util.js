"use strict";

var $ = jQuery.noConflict();
window.jQuery = $;
let UrlLang = urlpath + "view/templates/assets/js/lib/data-table/lang/dataTables.Spanish.json";
let tittlemsg = "La Casa del Chantilly"

let msg = {
  Alert: (title, message, fn) => {
    alertify
      .alert()
      .setting({
        title: title,
        label: "Aceptar",
        message: message,
        closableByDimmer: false,
        onok: fn,
        closable: false,
      })
      .show();
    return false;
  },
  Confirm: (title, message, fsi, fno) => {
    alertify
      .confirm()
      .setting({
        title: title,
        labels: { ok: "Si", cancel: "No" },
        message: message,
        closableByDimmer: false,
        onok: fsi,
        oncancel: fno,
        closable: false,
      })
      .show();
    return false;
  },

  Notifica: (message, tipo = "message", pos = "bottom-right") => {
    alertify.set("notifier", "position", pos);
    switch (tipo) {
      case "error":
        alertify.error(message);
        break;
      case "message":
        alertify.message(message);
        break;
      case "success":
        alertify.success(message);
        break;
      case "warning":
        alertify.warning(message);
        break;
      default:
        alertify.message(message);
        break;
    }
  },
};
/*
 var ByteToFile = (Base64, name, $type = 'image/jpg') => {

 try {

 const blob = new Blob([atob(Base64)], {
 type: 'image/jpg',
 encoding: 'utf-8'
 });
 const file = new File([blob], name, {type: $type});
 return file;
 } catch (e) {
 msg.Alert("::Error::", "Error en conversión de imagen");
 return false;
 }

 }*/
function b64toBlob(b64Data, contentType, sliceSize) {
  contentType = contentType || "";
  sliceSize = sliceSize || 512;

  var byteCharacters = atob(b64Data);
  var byteArrays = [];

  for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
    var slice = byteCharacters.slice(offset, offset + sliceSize);

    var byteNumbers = new Array(slice.length);
    for (var i = 0; i < slice.length; i++) {
      byteNumbers[i] = slice.charCodeAt(i);
    }

    var byteArray = new Uint8Array(byteNumbers);

    byteArrays.push(byteArray);
  }

  var blob = new Blob(byteArrays, { type: contentType });
  return blob;
}
function insertAfter(e, i) {
  if (e.nextSibling) {
    e.parentNode.insertBefore(i, e.nextSibling);
  } else {
    e.parentNode.appendChild(i);
  }
}
var VALIDACION = {
  CheckRange: function (IdControl, Mensaje, Min, Max, OcultarMensaje) {
    /// <summary>
    /// Valida el rango de valores permitidos en un control
    /// </summary>
    /// <param name="IdControl" type="String">Id del control a validar</param>
    /// <param name="Mensaje" type="String">Mensaje mostrado en caso se validación sea incorrecta</param>
    /// <param name="Min" type="Number">Valor mínimo permitido para el control</param>
    /// <param name="Max" type="Number">Valor máximo permitido para el control</param>
    /// <param name="OcultarMensaje" type="Boolean">(Opcional) Oculta mensaje de validación</param>

    var valControl;
    var objControl = $("[id$=" + IdControl + "]");

    if (!objControl) return false;

    valControl = objControl.val() == null ? "" : objControl.val();

    if (valControl > Max || valControl < Min) {
      objControl.addClass("invalido");
      if (!OcultarMensaje) {
        msg.Notifica(Mensaje, "error",'top-right');
        objControl.focus();
      }

      return false;
    } else {
      objControl.removeClass("invalido");
      return true;
    }
  },
  CheckVal: function (IdControl, Mensaje, Min, Max, OcultarMensaje) {
    /// <summary>
    /// Valida el rango de valores permitidos en un control
    /// </summary>
    /// <param name="IdControl" type="String">Id del control a validar</param>
    /// <param name="Mensaje" type="String">Mensaje mostrado en caso se validación sea incorrecta</param>
    /// <param name="Min" type="Number">Valor mínimo permitido para el control</param>
    /// <param name="Max" type="Number">Valor máximo permitido para el control</param>
    /// <param name="OcultarMensaje" type="Boolean">(Opcional) Oculta mensaje de validación</param>

    var valControl;
    var objControl = $("[id$=" + IdControl + "]");

    if (!objControl) return false;

    valControl = objControl.val() == null ? "" : objControl.val();

    if (valControl.trim().length > Max || valControl.trim().length < Min) {
      objControl.addClass("invalido");
      if (!OcultarMensaje) {
        msg.Notifica(Mensaje, "error",'top-right');
        objControl.focus();
      }

      return false;
    } else {
      objControl.removeClass("invalido");
      return true;
    }
  },


  CheckCbo: function (IdControl, Mensaje, Min, OcultarMensaje) {
    /// <summary>
    /// Valida el rango de valores permitidos en un control
    /// </summary>
    /// <param name="IdControl" type="String">Id del control a validar</param>
    /// <param name="Mensaje" type="String">Mensaje mostrado en caso se validación sea incorrecta</param>
    /// <param name="Min" type="Number">Valor mínimo permitido para el control</param>
    /// <param name="Max" type="Number">Valor máximo permitido para el control</param>
    /// <param name="OcultarMensaje" type="Boolean">(Opcional) Oculta mensaje de validación</param>

    var valControl;
    var objControl = $("[id$=" + IdControl + "]");

    if (!objControl) return false;

    valControl =
      objControl.val() == null || objControl.val().trim().length == 0
        ? "0"
        : objControl.val();

    if (valControl == Min) {
      objControl.addClass("invalido");
      if (!OcultarMensaje) {
        msg.Notifica(Mensaje, "error",'top-right');
        objControl.focus();
      }

      return false;
    } else {
      objControl.removeClass("invalido");
      return true;
    }
  },
  IsDate: function (txtDate) {
    /// <summary>
    /// Valida si el texto proporcionado es una fecha
    /// </summary>
    /// <param name="txtDate" type="String">cadena que representa una fecha</param>
    var currVal = txtDate;
    if (currVal == "") return false;

    //Declare Regex
    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
    var dtArray = currVal.match(rxDatePattern); // is format OK?

    if (dtArray == null) return false;

    //Checks for dd/mm/yyyy format.
    var dtDay = dtArray[1];
    var dtMonth = dtArray[3];
    var dtYear = dtArray[5];

    if (dtMonth < 1 || dtMonth > 12) return false;
    else if (dtDay < 1 || dtDay > 31) return false;
    else if (
      (dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) &&
      dtDay == 31
    )
      return false;
    else if (dtMonth == 2) {
      var isleap = dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0);
      if (dtDay > 29 || (dtDay == 29 && !isleap)) return false;
    }
    if (dtYear < 1900 || dtYear > 2500) return false;
    return true;
  },
  StringToDate: function (str) {
    var dia = str.substr(0, 2);
    var mes = str.substr(3, 2) - 1;
    var anho = str.substr(6, 4);

    return new Date(anho, mes, dia);
  },

  isValidDate: function (IdControl, Mensaje, OcultarMensaje) {
    /// <summary>
    /// Valida que el contenido del control sea una fecha valida en formato DD/MM/YYYY
    /// </summary>
    /// <param name="IdControl" type="String">Id del control a validar</param>
    /// <param name="Mensaje" type="String">Mensaje mostrado en caso se validación sea incorrecta</param>
    /// <param name="OcultarMensaje" type="Boolean">(Opcional) Oculta mensaje de validación</param>

    var objControl = $("[id$=" + IdControl + "]");
    if (!objControl) return false;

    var s = objControl.val();

    if (s.length != 10) {
      objControl.addClass("invalido");
      if (!OcultarMensaje) {
        msg.Notifica(Mensaje, "error",'top-right');
        objControl.focus();
      }
      return false;
    }

    // format D(D)/M(M)/(YY)YY
    var dateFormat = /^\d{1,4}[\.|\/|-]\d{1,2}[\.|\/|-]\d{1,4}$/;
    if (dateFormat.test(s)) {
      // remover ceros del supuesto valor fecha
      s = s.replace(/0*(\d*)/gi, "$1");
      var dateArray = s.split(/[\.|\/|-]/);
      // valor de mes correcto
      dateArray[1] = dateArray[1] - 1;
      // valor de año correcto
      if (dateArray[2].length < 4) {
        // valor de año correcto
        dateArray[2] =
          parseInt(dateArray[2]) < 50
            ? 2000 + parseInt(dateArray[2])
            : 1900 + parseInt(dateArray[2]);
      }
      var testDate = new Date(dateArray[2], dateArray[1], dateArray[0]);
      if (
        testDate.getDate() != dateArray[0] ||
        testDate.getMonth() != dateArray[1] ||
        testDate.getFullYear() != dateArray[2]
      ) {
        objControl.addClass("invalido");
        if (!OcultarMensaje) {
          msg.Notifica(Mensaje, "error",'top-right');
          objControl.focus();
        }
        return false;
      } else {
        objControl.removeClass("invalido");
        return true;
      }
    } else {
      objControl.addClass("invalido");
      if (!OcultarMensaje) {
        msg.Notifica(Mensaje, "error",'top-right');
        objControl.focus();
      }
      return false;
    }
  },
  CheckDate: function (IdControl, Mensaje, OcultarMensaje) {
    /// <summary>
    /// Valida si el control proporcionado contiene un dato de fecha válido
    /// </summary>
    /// <param name="IdControl" type="String">Id del control a validar</param>
    /// <param name="Mensaje" type="String">Mensaje mostrado en caso se validación sea incorrecta</param>
    /// <param name="OcultarMensaje" type="Boolean">(Opcional) Oculta mensaje de validación</param>

    var valControl;
    var objControl = $("[id$=" + IdControl + "]");
    if (!objControl) return false;

    valControl = objControl.val();

    if (!PROYECTODEV.IsDate(valControl)) {
      objControl.addClass("invalido");
      if (!OcultarMensaje) {
        msg.Notifica(Mensaje, "error",'top-right');
        objControl.focus();
      }
      return false;
    } else {
      objControl.removeClass("invalido");
    }

    return true;
  },
};

function pad(str, max) {
  str = str.toString();
  return str.length < max ? pad("0" + str, max) : str;
}
function numeroAleatorio(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}
function FillvbNull(str, r, n) {
  str = str.toString();
  let ind = str.length;

  return r.repeat(n < ind ? ind : n - ind) + str;
}
function isMobile() {
  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    )
  ) {
    return true;
  } else {
    return false;
  }
}
function Totales_Tabla(name = "table", column = 0) {
  let selector =
    "#" + name.toString() + " tbody tr td:nth-child(" + column + ")";
  let table = document.querySelectorAll(selector);
  let wtotal = 0.0;
  table.forEach((item) => {
    wtotal = wtotal + parseFloat(item.innerHTML);
  });
  return wtotal;
}

function Getcelda(name = "table", row = 0, column = 0) {
  let selector =
    "#" +
    name.toString() +
    " tbody tr:nth-child(" +
    row +
    ") td:nth-child(" +
    column +
    ")";

  let cell = document.querySelector(selector);
  cell = cell.innerHTML;

  return cell;
}
function Setcelda(name = "table", row = 0, column = 0, valor = "") {
  let selector =
    "#" +
    name.toString() +
    " tbody tr:nth-child(" +
    row +
    ") td:nth-child(" +
    column +
    ")";

  let cell = document.querySelector(selector);

  cell.innerHTML = valor.toString();
}

function LastRowCell(name = "table", column = 0) {
  let selector =
    "#" + name.toString() + " tbody tr:last-child td:nth-child(" + column + ")";

  let cell = document.querySelector(selector);
  cell = cell.innerHTML;

  return cell;
}
//parametro rest
var AddRow = (idTable, ...columnas) => {
  var htmlTags = "";
  htmlTags = "<tr>";
  columnas.forEach(function (item, index) {
    htmlTags += "<td>" + item + "</td>";
  });

  htmlTags += "</tr>";

  $(idTable + " tbody").append(htmlTags);
};

function pad(str, max) {
  str = str.toString();
  return str.length < max ? pad("0" + str, max) : str;
}

function FechaActual(fmt, opcion = 0, addDay = 0) {
  var f = new Date();
  var Fecha = "";
  if (opcion == 0) {
    Fecha =
      f.getFullYear() +
      fmt +
      pad(f.getMonth() + 1, "2") +
      fmt +
      (f.getDate() + addDay);
  }
  if (opcion == 1) {
    Fecha =
      f.getDate() +
      addDay +
      fmt +
      pad(f.getMonth() + 1, "2") +
      fmt +
      f.getFullYear();
  }
  return Fecha;
}
function HoraActual() {
  var f = new Date();
  return f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
}
function PrimerDia() {
  let date = new Date();
  let ini = new Date(date.getFullYear(), date.getMonth(), 1);
  return ini;
}
function UltimoDia() {
  let date = new Date();
  let last = new Date(date.getFullYear(), date.getMonth() + 1, 0);
  return last;
}
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
     the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function (e) {
    var a,
      b,
      i,
      val = this.value;
    /*close any already open lists of autocompleted values*/
    closeAllLists();
    if (!val) {
      return false;
    }
    currentFocus = -1;
    /*create a DIV element that will contain the items (values):*/
    a = document.createElement("DIV");
    a.setAttribute("id", this.id + "autocomplete-list");
    a.setAttribute("class", "autocomplete-items");
    /*append the DIV element as a child of the autocomplete container:*/
    this.parentNode.appendChild(a);
    /*for each item in the array...*/
    for (i = 0; i < arr.length; i++) {
      /*check if the item starts with the same letters as the text field value:*/
      if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
        /*create a DIV element for each matching element:*/
        b = document.createElement("DIV");
        /*make the matching letters bold:*/
        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
        b.innerHTML += arr[i].substr(val.length);
        /*insert a input field that will hold the current array item's value:*/
        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

        /*execute a function when someone clicks on the item value (DIV element):*/
        b.addEventListener("click", function (e) {
          /*insert the value for the autocomplete text field:*/
          inp.value = this.getElementsByTagName("input")[0].value;

          /*close the list of autocompleted values,
                     (or any other open lists of autocompleted values:*/
          closeAllLists();
        });
        a.appendChild(b);
      }
    }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function (e) {
    var x = document.getElementById(this.id + "autocomplete-list");
    if (x) x = x.getElementsByTagName("div");
    if (e.keyCode == 40) {
      /*If the arrow DOWN key is pressed,
             increase the currentFocus variable:*/
      currentFocus++;
      /*and and make the current item more visible:*/
      addActive(x);
    } else if (e.keyCode == 38) {
      //up
      /*If the arrow UP key is pressed,
             decrease the currentFocus variable:*/
      currentFocus--;
      /*and and make the current item more visible:*/
      addActive(x);
    } else if (e.keyCode == 13) {
      /*If the ENTER key is pressed, prevent the form from being submitted,*/
      e.preventDefault();
      if (currentFocus > -1) {
        /*and simulate a click on the "active" item:*/
        if (x) x[currentFocus].click();
      }
    }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = x.length - 1;
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }

  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }

  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
         except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }

  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
    closeAllLists(e.target);
  });
}

function formatNumber(numero) {
  let opciones = {
    style: "decimal",
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
    useGrouping: true,
  };
  let formatoNumero = new Intl.NumberFormat("en-US", opciones);
  let numeroFormateado = formatoNumero.format(numero);
  return numeroFormateado;
}
function formatFecha(pfecha) {
  let fecha = new Date(pfecha);
  let dia = (fecha.getDate() + 1).toString().padStart(2, "0"); // Día del mes
  let mes = (fecha.getMonth() + 1).toString().padStart(2, "0"); // Los meses en JavaScript van de 0 a 11, por eso sumamos 1
  let año = fecha.getFullYear(); // Año

  let fechaFormateada = `${dia}/${mes}/${año}`;

  return fechaFormateada;
}

function startTimer(duration, display) {
  let timer = duration;
  setInterval(function () {
    const minutes = parseInt(timer / 60, 10);
    const seconds = parseInt(timer % 60, 10);
    display.textContent = `${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
    if (--timer < 0) {
      timer = 0; // Opcional: reiniciar el temporizador automáticamente después de llegar a 0
    }
  }, 1000);
}

async function Geolocalizacion() {


  if ("geolocation" in navigator) {
    try {
      const position = await new Promise((resolve, reject) => {
        navigator.geolocation.getCurrentPosition(resolve, reject);
      });

      return {
        latitud: position.coords.latitude,
        longitud: position.coords.longitude
      };
    } catch (error) {
      console.error("Error al obtener la ubicación: " + error.message);
    }
  } else {
    msg.Alert("::" + tittlemsg + "::", "'Geolocalización no soportada por el navegador")
  }

}


async function checkGeolocationPermission() {
  if ("geolocation" in navigator) {
    try {
      const result = await navigator.permissions.query({ name: 'geolocation' });
      if (result.state === 'granted') {
        return { 'success': true, 'message': 'Permisos concedidos' };
      } else if (result.state === 'prompt') {
        return { 'success': false, 'message': 'Permiso no concedido, pero se puede solicitar' };
      } else if (result.state === 'denied') {
        return { 'success': false, 'message': 'Permiso denegado' };
      }
    } catch (error) {
      throw new Error('Error al consultar el permiso: ' + error);
    }
  } else {
    msg.Alert("::" + tittlemsg + "::", 'Geolocalización no soportada por el navegador')
  }
}
/***
 * lat1 y lon1 coordenadas de destino
 * 
 * Lat2 y lon2 coordenas de tu posición actual
 */
function calcularDistancia(lat1, lon1, lat2, lon2) {
  const radioTierraKm = 6371; // Radio de la Tierra en kilómetros

  // Convertir las coordenadas de grados a radianes
  const lat1Rad = (lat1 * Math.PI) / 180;
  const lon1Rad = (lon1 * Math.PI) / 180;
  const lat2Rad = (lat2 * Math.PI) / 180;
  const lon2Rad = (lon2 * Math.PI) / 180;

  // Calcular las diferencias de latitud y longitud
  const dLat = lat2Rad - lat1Rad;
  const dLon = lon2Rad - lon1Rad;

  // Aplicar la fórmula del semiverseno
  const a = Math.sin(dLat / 2) ** 2 + Math.cos(lat1Rad) * Math.cos(lat2Rad) * Math.sin(dLon / 2) ** 2;
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const distancia = radioTierraKm * c;

  return distancia;
}


function redondeoDecimal(valor, decimales) {
  const factor = 10 ** decimales;
  return Math.round(valor * factor) / factor;
}