function mostrarOcultarDiv(tarjeta) {
    document.getElementById('visa').style.display = 'none';
    document.getElementById('mastercard').style.display = 'none';
    document.getElementById('billeteras').style.display = 'none';

    if (tarjeta === 'visa') {
        document.getElementById('visa').style.display = 'block';
    } else if (tarjeta === 'mastercard') {
        document.getElementById('mastercard').style.display = 'block';
    } else if (tarjeta === 'billetera') {
        document.getElementById('billeteras').style.display = 'block';
    }
}

// Agregar eventos de cambio a los botones de radio
document.getElementById('visaRadio').addEventListener('change', function() {
    mostrarOcultarDiv('visa');
});

document.getElementById('mastercardRadio').addEventListener('change', function() {
    mostrarOcultarDiv('mastercard');
});

document.getElementById('billeteraRadio').addEventListener('change', function() {
    mostrarOcultarDiv('billetera');
});