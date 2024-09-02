
//---------------------------------------------PAGINATION---------------------------------------------------
let currentPage = 1;
let pageSize = 4;
const items = document.querySelectorAll('.item');

function showItems() {
  items.forEach((item, index) => {
    item.style.display =
      index >= (currentPage - 1) * pageSize && index < currentPage * pageSize ? 'block' : 'none';
  });
}
function updatePagination() {
  const windowWidth = window.innerWidth;

  pageSize = windowWidth <= 480 ? 4 : windowWidth <= 900 ? 6 : 8;
  totalPages = Math.ceil(items.length / pageSize);

  const pagination = document.querySelector('.pagination');
  pagination.innerHTML = '';

  const leftButton = document.createElement('button');
  leftButton.innerHTML = '<i class="fa-solid fa-caret-left"></i>';
  leftButton.classList.add('left-button');
  leftButton.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      showItems();
      updatePagination();
    }
  });
  pagination.appendChild(leftButton);

  for (let i = 1; i <= totalPages; i++) {
    const button = document.createElement('button');
    button.innerText = i;
    button.addEventListener('click', () => {
      currentPage = i;
      showItems();
      updatePagination();
    });
    if (i === currentPage) {
      button.classList.add('active');
    }
    pagination.appendChild(button);
  }

  const rightButton = document.createElement('button');
  rightButton.innerHTML = '<i class="fa-solid fa-caret-right"></i>';
  rightButton.classList.add('right-button');
  rightButton.addEventListener('click', () => {
    if (currentPage < totalPages) {
      currentPage++;
      showItems();
      updatePagination();
    }
  });
  pagination.appendChild(rightButton);
  showItems();
}
window.addEventListener('DOMContentLoaded', updatePagination);
window.addEventListener('resize', updatePagination);

//---------------------------------------------PAGINATION CARDS---------------------------------------------------

let currentPageCard = 1;
let pageSizeCard = 4;
const itemsCard = document.querySelectorAll('.item-cards');
function showItemsCards() {
  itemsCard.forEach((itemc, indexC) => {
    itemc.style.display =
      indexC >= (currentPageCard - 1) * pageSizeCard && indexC < currentPageCard * pageSizeCard ? 'block' : 'none';
  });
}
function updatePaginationCards() {
  const windowWidth = window.innerWidth;

  pageSizeCard = windowWidth <= 480 ? 2 : windowWidth <= 900 ? 3 : 4;
  totalPagesCard = Math.ceil(itemsCard.length / pageSizeCard);

  const paginationCards = document.querySelector('.pagination-cards');
  paginationCards.innerHTML = '';

  const leftButtonC = document.createElement('button');
  leftButtonC.innerHTML = '<i class="fa-solid fa-caret-left"></i>';
  leftButtonC.classList.add('left-button');
  leftButtonC.addEventListener('click', () => {
    if (currentPageCard > 1) {
      currentPageCard--;
      showItemsCards();
      updatePaginationCards();
    }
  });
  paginationCards.appendChild(leftButtonC);

  for (let i = 1; i <= totalPagesCard; i++) {
    const button = document.createElement('button');
    button.innerText = i;
    button.addEventListener('click', () => {
      currentPageCard = i;
      showItemsCards();
      updatePaginationCards();
    });
    if (i === currentPageCard) {
      button.classList.add('active');
    }
    paginationCards.appendChild(button);
  }
  const rightButtonC = document.createElement('button');
  rightButtonC.innerHTML = '<i class="fa-solid fa-caret-right"></i>';
  rightButtonC.classList.add('right-button');
  rightButtonC.addEventListener('click', () => {
    if (currentPageCard < totalPagesCard) {
      currentPageCard++;
      showItemsCards();
      updatePaginationCards();
    }
  });
  paginationCards.appendChild(rightButtonC);
  showItemsCards();
}
window.addEventListener('DOMContentLoaded', updatePaginationCards);
window.addEventListener('resize', updatePaginationCards);
