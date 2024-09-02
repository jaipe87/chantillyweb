document.addEventListener('DOMContentLoaded', function () {

  function searchProducts() {
    var busqueda = document.getElementById('searchInput').value.toLowerCase();
    var items = document.querySelectorAll('.item');
    var pagination = document.querySelector('.pagination');
    var resultsFound = false;

    items.forEach(productoB => {
      var productoNombre = productoB.textContent.toLowerCase();
      if (productoNombre.includes(busqueda)) {
        productoB.style.display = 'block';
        resultsFound = true;
      } else {
        productoB.style.display = 'none';
      }
    });

    // Oculta la paginación si se encuentran resultados
    pagination.style.display = busqueda && resultsFound ? 'none' : 'flex';
  }

  document.getElementById('searchInput').addEventListener('input', searchProducts);
  document.getElementById('searchForm').addEventListener('submit', function (event) {
    event.preventDefault();
    searchProducts();
  });
});

//--------------------------------------------CATEGORIA-------------------------------------------------
document.getElementById('categoryFilter').addEventListener('change', function () {
  var selectedCategory = this.value;
  document.querySelectorAll('.item').forEach(productoo => {
    var productCategory = productoo.getAttribute('category');
    productoo.style.display = (selectedCategory === 'all' || selectedCategory === productCategory) ? 'block' : 'none';
  });
});