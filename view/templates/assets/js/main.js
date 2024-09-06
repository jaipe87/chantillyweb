
let toggleSidebar = () => {
	const sidebar = document.getElementById("mySidebar");
	const html = document.querySelector("html");
	const manta = document.querySelector(".siderbar-manta");
	sidebar.style.right = sidebar.style.right === "0px" ? "-500px" : "0px";

	html.style.overflowY = sidebar.style.right === "0px" ? "hidden" : "auto";
	manta.style.display = sidebar.style.right === "0px" ? "block" : "none";
}
let locationdatahref = (e, redirec = true) => {
	const a = document.createElement("a");
	const link = e.getAttribute("data-href");
	a.href = link;
	if (redirec) a.target = "_blank";
	a.click();

}
let initCart = async () => {

	let url = new URL(urlpath + "/Detalle/carga_carrito_save/");

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
				$(".contenedor .contador").text("0");
				$("#mySidebar .cart-body .cart-items").empty();
				$("#mySidebar .cart-body .cart-footer #btn-ordenar div > span").text("0.00");
				let datos = [];
				let TotItems = 0;
				let TotOrden = 0.00;

				if (resultado.success) {
					if (resultado.data != undefined) {

						datos = resultado.data;
						TotItems = resultado.Total;

						$(".contenedor .contador").text(TotItems);
						$.each(datos, function (key, value) {

							let html = `<div class="cart-item">
                                        <div class="cart-img">
                                            <a href="${urlpath}/Detalle/?p=${value.codart_web}">
                                                <img  src="${assets + "/" + value.img}" alt="${value.descri_corta}">
                                            </a>
                                        </div>

                                        <div class="cart-detalle">
                                            <div class="cart-detalle-description">
                                                <div class="item-description">

                                                    <svg class="cart-delete" viewBox="0 0 24 24" fill="#F43F5E" onClick="removeCart('${value.codart}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')"
                                                        width="24" height="24">
                                                        <path
                                                            d="M19.875 4.5H15.5v-.656A1.844 1.844 0 0013.656 2H9.844A1.844 1.844 0 008 3.844V4.5H3.625a.625.625 0 000 1.25h1.156l.875 14.125A2.188 2.188 0 007.781 22h7.938a2.188 2.188 0 002.156-2.125l.844-14.125h1.156a.625.625 0 100-1.25zM9.25 3.844a.594.594 0 01.594-.594h3.812a.594.594 0 01.594.594V4.5h-5v-.656zM9.281 19.5H9.25a.625.625 0 01-.625-.594L8 7.656a.626.626 0 111.25-.062l.625 11.25a.625.625 0 01-.594.656zm3.094-.625a.624.624 0 11-1.25 0V7.625a.625.625 0 111.25 0v11.25zm2.5.031a.625.625 0 01-.625.594h-.031a.626.626 0 01-.594-.656l.625-11.25a.626.626 0 011.25.062l-.625 11.25z">
                                                        </path>
                                                    </svg><a class="item-titulo">
                                                        <p>${value.descri_corta} </p>
                                                    </a>
                                                    <div class="item-porcion">
													${(value.porcion == '' ? "" : "<p>Porción : " + value.porcion + "</p>")}
													${(value.medidas == '' ? "" : "<p>Medida : " + value.medidas + "</p>")}
													${(value.keke == '' ? "" : "<p>Keke : " + value.keke + "</p>")}
													${(value.relleno == '' ? "" : "<p>Relleno : " + value.relleno + "</p>")}
													${(value.diarecojo == '' ? "" : "<p>Fecha Recojo : " + value.diarecojo + "</p>")}
													${(value.tiene_dedicatoria == '0' ? "" : "<p>Nombre o Dedicatoria : " + value.dedicatoria + "</p>")}
                                                    </div>
                                                    <div class="item-precio">
                                                        <div class="unit-amount">
                                                          
														
														   <a class="amount-subtract" href="#" onClick="minusItem('${value.codart}','${value.codart_web}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')">-</a> <span
                                                                class="quantid">${value.quantity}</span>
                                                            <a class="amount-add" href="#" onClick="plusItem('${value.codart}','${value.codart_web}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')">+</a>
														
															</div>		
                                                        <div class="unit-price">
                                                            <span class="price">S/ ${parseFloat(value.neto).toFixed(2)}</span>

                                                        </div>

                                                    </div>



                                                </div>
                                                <div class="item-amount">
                                                    <label>Total producto:</label><span>S/ ${(parseFloat(value.neto) * parseFloat(value.quantity)).toFixed(2)} </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>`;

							TotOrden += parseFloat(value.neto) * parseFloat(value.quantity);

							$("#mySidebar .cart-body .cart-items").append(html);
						});
						$("#mySidebar .cart-body .cart-footer #btn-ordenar div > span").text((TotOrden).toFixed(2));

					}
				} else {
					msg.Notifica(resultado.msg, "message", "top-right");
				}
			}).catch(error => {
				msg.Notifica('Error al obtener los datos: ' + error);
			});
	} catch (err) {
		msg.Notifica(err);
	}


}

let addCart = async (pcodart, pcodartweb, pidkeke, pidrelleno, pcantidad = 1, pfecrecojo = "", pdedicatoria = "", view_msg = true, fn) => {
	let tiene_dedicatoria = 0;
	pdedicatoria = pdedicatoria.trim();
	if (pdedicatoria.length == 0) {
		tiene_dedicatoria = 0;
	} else {
		tiene_dedicatoria = 1;
	}
	let url = new URL(urlpath + "/Detalle/carga_producto_cart/");
	url.searchParams.append('wb', pcodartweb);
	url.searchParams.append('id', pcodart);
	url.searchParams.append('k', pidkeke);
	url.searchParams.append('r', pidrelleno);
	url.searchParams.append('qt', pcantidad);
	url.searchParams.append('dr', pfecrecojo);
	url.searchParams.append('std', tiene_dedicatoria);
	url.searchParams.append('dd', pdedicatoria);

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
				$(".contenedor .contador").text("0");
				$("#mySidebar .cart-body .cart-items").empty();
				$("#mySidebar .cart-body .cart-footer #btn-ordenar div > span").text("0.00");

				let datos = [];
				let TotItems = 0;
				let TotOrden = 0.00;

				if (resultado.success) {
					if (resultado.data != undefined) {

						datos = resultado.data;
						TotItems = resultado.Total;

						$.each(datos, function (key, value) {

							let html = `<div class="cart-item">
                                        <div class="cart-img">
                                            <a href="${urlpath}/Detalle/?p=${value.codart_web}">
                                                <img  src="${assets + "/" + value.img}" alt="${value.descri_corta}">
                                            </a>
                                        </div>

                                        <div class="cart-detalle">
                                            <div class="cart-detalle-description">
                                                <div class="item-description">

                                                    <svg class="cart-delete" viewBox="0 0 24 24" fill="#F43F5E" onClick="removeCart('${value.codart}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')"
                                                        width="24" height="24">
                                                        <path
                                                            d="M19.875 4.5H15.5v-.656A1.844 1.844 0 0013.656 2H9.844A1.844 1.844 0 008 3.844V4.5H3.625a.625.625 0 000 1.25h1.156l.875 14.125A2.188 2.188 0 007.781 22h7.938a2.188 2.188 0 002.156-2.125l.844-14.125h1.156a.625.625 0 100-1.25zM9.25 3.844a.594.594 0 01.594-.594h3.812a.594.594 0 01.594.594V4.5h-5v-.656zM9.281 19.5H9.25a.625.625 0 01-.625-.594L8 7.656a.626.626 0 111.25-.062l.625 11.25a.625.625 0 01-.594.656zm3.094-.625a.624.624 0 11-1.25 0V7.625a.625.625 0 111.25 0v11.25zm2.5.031a.625.625 0 01-.625.594h-.031a.626.626 0 01-.594-.656l.625-11.25a.626.626 0 011.25.062l-.625 11.25z">
                                                        </path>
                                                    </svg><a class="item-titulo">
                                                        <p>${value.descri_corta} </p>
                                                    </a>
													 <div class="item-porcion">
														${(value.porcion == '' ? "" : "<p>Porción : " + value.porcion + "</p>")}
														${(value.medidas == '' ? "" : "<p>Medida : " + value.medidas + "</p>")}
														${(value.keke == '' ? "" : "<p>Keke : " + value.keke + "</p>")}
														${(value.relleno == '' ? "" : "<p>Relleno : " + value.relleno + "</p>")}
														${(value.diarecojo == '' ? "" : "<p>Fecha Recojo : " + value.diarecojo + "</p>")}
														${(value.tiene_dedicatoria == '0' ? "" : "<p>Nombre o Dedicatoria : " + value.dedicatoria + "</p>")}
                                                    </div>
                                                    
                                                    <div class="item-precio">
                                                        <div class="unit-amount">
                                                          
														
														   <a class="amount-subtract" href="#" onClick="minusItem('${value.codart}','${value.codart_web}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')">-</a> <span
                                                                class="quantid">${value.quantity}</span>
                                                            <a class="amount-add" href="#" onClick="plusItem('${value.codart}','${value.codart_web}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')">+</a>
														
															</div>		
                                                        <div class="unit-price">
                                                            <span class="price">S/ ${parseFloat(value.neto).toFixed(2)}</span>

                                                        </div>

                                                    </div>



                                                </div>
                                                <div class="item-amount">
                                                    <label>Total producto:</label><span>S/ ${(parseFloat(value.neto) * parseFloat(value.quantity)).toFixed(2)} </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>`;

							TotOrden += parseFloat(value.neto) * parseFloat(value.quantity);

							$("#mySidebar .cart-body .cart-items").append(html);
						});



						$(".contenedor .contador").text(TotItems);
						$("#mySidebar .cart-body .cart-footer #btn-ordenar div > span").text((TotOrden).toFixed(2));

					}
					if (view_msg) msg.Notifica(resultado.msg, "success", "bottom-right");
				} else {
					initCart();
					msg.Notifica(resultado.msg, "message", "top-right");
				}
				fn(resultado.success);
			}).catch(error => {
				msg.Notifica('Error al obtener los datos: ' + error);
			});
	} catch (err) {
		msg.Notifica(err);
	}


}

let removeCart = async (pcodart, pidkeke, pidrelleno, pfecrecojo, pdedicatoria, view_msg = false ) => {
	let url = new URL(urlpath + "/Detalle/DeleteItem/");
	url.searchParams.append('id', pcodart);
	url.searchParams.append('k', pidkeke);
	url.searchParams.append('r', pidrelleno);
	url.searchParams.append('d', pdedicatoria);
	url.searchParams.append('f', pfecrecojo);

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
				$(".contenedor .contador").text("0");
				$("#mySidebar .cart-body .cart-items").empty();
				$("#mySidebar .cart-body .cart-footer #btn-ordenar div > span").text("0.00");

				let datos = [];
				let TotItems = 0;
				let TotOrden = 0.00;

				if (resultado.success) {
					if (resultado.data != undefined) {

						datos = resultado.data;
						TotItems = resultado.Total;
						$(".contenedor .contador").text(TotItems);


						$.each(datos, function (key, value) {

							let html = `<div class="cart-item">
                                        <div class="cart-img">
                                            <a href="${urlpath}/Detalle/?p=${value.codart_web}">
                                                <img  src="${assets + "/" + value.img}" alt="${value.descri_corta}">
                                            </a>
                                        </div>

                                        <div class="cart-detalle">
                                            <div class="cart-detalle-description">
                                                <div class="item-description">

                                                    <svg class="cart-delete" viewBox="0 0 24 24" fill="#F43F5E" onClick="removeCart('${value.codart}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')"
                                                        width="24" height="24">
                                                        <path
                                                            d="M19.875 4.5H15.5v-.656A1.844 1.844 0 0013.656 2H9.844A1.844 1.844 0 008 3.844V4.5H3.625a.625.625 0 000 1.25h1.156l.875 14.125A2.188 2.188 0 007.781 22h7.938a2.188 2.188 0 002.156-2.125l.844-14.125h1.156a.625.625 0 100-1.25zM9.25 3.844a.594.594 0 01.594-.594h3.812a.594.594 0 01.594.594V4.5h-5v-.656zM9.281 19.5H9.25a.625.625 0 01-.625-.594L8 7.656a.626.626 0 111.25-.062l.625 11.25a.625.625 0 01-.594.656zm3.094-.625a.624.624 0 11-1.25 0V7.625a.625.625 0 111.25 0v11.25zm2.5.031a.625.625 0 01-.625.594h-.031a.626.626 0 01-.594-.656l.625-11.25a.626.626 0 011.25.062l-.625 11.25z">
                                                        </path>
                                                    </svg><a class="item-titulo">
                                                        <p>${value.descri_corta} </p>
                                                    </a>
                                                    <div class="item-porcion">
														${(value.porcion == '' ? "" : "<p>Porción : " + value.porcion + "</p>")}
														${(value.medidas == '' ? "" : "<p>Medida : " + value.medidas + "</p>")}
														${(value.keke == '' ? "" : "<p>Keke : " + value.keke + "</p>")}
														${(value.relleno == '' ? "" : "<p>Relleno : " + value.relleno + "</p>")}
														${(value.diarecojo == '' ? "" : "<p>Fecha Recojo : " + value.diarecojo + "</p>")}
														${(value.tiene_dedicatoria == '0' ? "" : "<p>Nombre o Dedicatoria : " + value.dedicatoria + "</p>")}
                                                    </div>
                                                    <div class="item-precio">
                                                        <div class="unit-amount">
                                                          
														
														   <a class="amount-subtract" href="#" onClick="minusItem('${value.codart}','${value.codart_web}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')">-</a> <span
                                                                class="quantid">${value.quantity}</span>
                                                            <a class="amount-add" href="#" onClick="plusItem('${value.codart}','${value.codart_web}','${value.id_keke}','${value.id_relleno}','${value.diarecojo}','${value.dedicatoria}')">+</a>
														
															</div>		
                                                        <div class="unit-price">
                                                            <span class="price">S/ ${parseFloat(value.neto).toFixed(2)}</span>

                                                        </div>

                                                    </div>



                                                </div>
                                                <div class="item-amount">
                                                    <label>Total producto:</label><span>S/ ${(parseFloat(value.neto) * parseFloat(value.quantity)).toFixed(2)} </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>`;

							TotOrden += parseFloat(value.neto) * parseFloat(value.quantity);

							$("#mySidebar .cart-body .cart-items").append(html);
						});


						$("#mySidebar .cart-body .cart-footer #btn-ordenar div > span").text((TotOrden).toFixed(2));

					}
					if (view_msg)	msg.Notifica(resultado.msg, "warning", "bottom-right");
				} else {
					initCart();
					msg.Notifica(resultado.msg, "message", "top-right");
				}
			}).catch(error => {
				msg.Notifica('Error al obtener los datos: ' + error);
			});
	} catch (err) {
		msg.Notifica(err);
	}


}
let plusItem = (pcodart, pcodartweb, pidkeke, pidrelleno, pfecrecojo, pdedicatoria) => {

	addCart(pcodart, pcodartweb, pidkeke, pidrelleno, 1, pfecrecojo, pdedicatoria, false,()=>{});
}
let minusItem = (pcodart, pcodartweb, pidkeke, pidrelleno, pfecrecojo, pdedicatoria) => {

	addCart(pcodart, pcodartweb, pidkeke, pidrelleno, -1, pfecrecojo, pdedicatoria, false,()=>{});
}

let ValidacioncheckOut = (Texto)=>{
	msg.Alert(`::${tittlemsg}::`,Texto,()=>{
		toggleSidebar();
		$('#btnLogIn').click();
	})
}
$(document).ready(() => {
	initCart();


	(async function () {
		checkGeolocationPermission().then((e) => {
			localStorage.setItem("permisoGeolocalizacion",JSON.stringify(e));
		});
		Geolocalizacion().then((e) => {
			localStorage.setItem("coordenadasGeolocalizacion",JSON.stringify(e));
        });

	
	}());
	

});