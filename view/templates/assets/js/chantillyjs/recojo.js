function mostrarOcultarDiv(tiendas) {
    document.getElementById('tComas').style.display = 'none';
    document.getElementById('tarjetaCD').style.display = 'none';
    document.getElementById('agencia').style.display = 'none';
    document.getElementById('billeteras').style.display = 'none';

    if (tiendas === 'tComas1') {
        document.getElementById('tComas1').style.display = 'block';
    } else if (tiendas === 'tComas2') {
        document.getElementById('tComas2').style.display = 'block';
    } else if (tiendas === 'agencia') {
        document.getElementById('agencia').style.display = 'block';
    } else if (tiendas === 'billeteras') {
        document.getElementById('billeteras').style.display = 'block';
    }
}
document.getElementById('tComas1').addEventListener('change', function () {
    mostrarOcultarDiv('dComas1');
});
document.getElementById('tComas2').addEventListener('change', function () {
    mostrarOcultarDiv('dComas2');
});
document.getElementById('agenciaRadio').addEventListener('change', function () {
    mostrarOcultarDiv('agencia');
});
document.getElementById('billeteraRadio').addEventListener('change', function () {
    mostrarOcultarDiv('billeteras');
});
