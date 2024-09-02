//--------------------------CONTADOR----------------------------------------------
function contarElementos() {
    const todosLosItems = { ...localStorage };
    let contador = 0;
    for (const key in todosLosItems) {
        if (todosLosItems.hasOwnProperty(key)) {
            if (/^\d{2}$/.test(key)||/^\d{3}$/.test(key)) {
                contador++;
            }
        }
    }
    document.querySelector('.contador').textContent = `${contador}`;
}
contarElementos();

//----------------------------SELECCION PRODUCTO ----------------------------------
const clickboton = document.querySelectorAll('.agregar-producto');
const clickimagen = document.querySelectorAll('img');

clickimagen.forEach((img) => {
  img.addEventListener('click', (event) => {
    const producto = event.target.closest('#items');
    const imagen = producto.querySelector('img').src;
    const titulo = producto.querySelector('.titulo').textContent;
    const precio = producto.querySelector('.precio b').textContent;

    sessionStorage.setItem('imagenTorta', imagen);
    sessionStorage.setItem('tituloTorta', titulo);
    sessionStorage.setItem('precioTorta', precio);

    window.location.href = 'producto.html';
  });
});
clickboton.forEach((boton) => {
  boton.addEventListener('click', (event) => {
    const producto = event.target.closest('#items');
    const imagen = producto.querySelector('img').src;
    const titulo = producto.querySelector('.titulo').textContent;
    const precio = producto.querySelector('.precio b').textContent;
    sessionStorage.setItem('imagenTorta', imagen);
    sessionStorage.setItem('tituloTorta', titulo);
    sessionStorage.setItem('precioTorta', precio);

    window.location.href = 'producto.html';
  });
});
//------------------------ OBTENER PRODUCTO ------------------------------------------------

const imagen = sessionStorage.getItem('imagenTorta');
const titulo = sessionStorage.getItem('tituloTorta');
const precio = sessionStorage.getItem('precioTorta');
const total = sessionStorage.getItem('precioTorta');

document.getElementById('vertical-image').src = imagen;
document.getElementById('image-producto').src = imagen;
document.getElementById('title-product').textContent = titulo;
document.getElementById('price-product').textContent = precio;
document.getElementById('total-product').textContent = precio;
