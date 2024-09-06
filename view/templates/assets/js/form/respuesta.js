function imprimirElemento(elemento) {
    var ventana = window.open('', 'PRINT', 'height=400,width=600');
    ventana.document.write('<html><head><title>' + document.title + '</title>');
    ventana.document.write('</head><body >');
    ventana.document.write(elemento.innerHTML);
    ventana.document.write('</body></html>');
    ventana.document.close();
    ventana.focus();
    ventana.print();
    ventana.close();
    return true;
}

let SeguirComprando = function () {
    window.location.replace(urlpath);
}
let RegresarCheckOut = function () {
    window.location.href = urlpath + '/Checkout';
}
let Ircompras = function () {
    window.location.replace(urlpath + '/Cuenta/mis_compras');
}
let ImprimirTrans = function(){

     window.print();

}