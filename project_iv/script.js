const wrapper = document.querySelector('.sliderWrapper');

const menuItems = document.querySelectorAll('.menuItem');

let chosenProduct = products[0];

const currentProductImg = document.querySelector('.productImage');
const currentProductTitle = document.querySelector('.productTitle');
const currentProductPrice = document.querySelector('.productPrice');
const currentProductColors = document.querySelectorAll('.color');
const currentProductSizes = document.querySelectorAll('.size');

menuItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    //changes the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //changes the chosen product
    chosenProduct = products[index];

    //changes the texts of current product
    currentProductTitle.textContent = chosenProduct.title.toUpperCase();
    currentProductPrice.textContent = '$' + chosenProduct.price;
    currentProductImg.src = chosenProduct.colors[0].img;

    //changes the style of product by selected color
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = chosenProduct.colors[index].code;
    });
  });
});

currentProductColors.forEach((color, index) => {
  color.addEventListener('click', () => {
    currentProductImg.src = chosenProduct.colors[index].img;
  });
});

currentProductSizes.forEach((size, index) => {
  size.addEventListener('click', () => {
    currentProductSizes.forEach((size) => {
      size.style.backgroundColor = 'white';
      size.style.color = 'black';
    });
    size.style.backgroundColor = 'black';
    size.style.color = 'white';
  });
});

const productButton = document.querySelector('.productButton');
const payment = document.querySelector('.payment');
const close = document.querySelector('.close');

productButton.addEventListener('click', () => {
  payment.style.display = 'flex';
});
close.addEventListener('click', () => {
  payment.style.display = 'none';
});
