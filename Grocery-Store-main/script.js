let searchForm = document.querySelector('.search-form');
let searchBtn = document.querySelector('#search-btn');
let navbar = document.querySelector('.navbar');

let shoppingCart = document.querySelector('.shopping-cart');
let cartBtn = document.querySelector('#cart-btn');

let loginForm = document.querySelector('.login-form');
let loginBtn = document.querySelector('#login-btn');

searchBtn.onclick = () => {
  searchForm.classList.toggle('active');

  if (!searchForm.classList.contains('active')) {
    searchBtn.classList.add('no-hover');  // remove hover
  } else {
    searchBtn.classList.remove('no-hover'); // enable hover again
  }

  shoppingCart.classList.remove('active'); 
  loginForm.classList.remove('active');   
  navbar.classList.remove('active');   
};

cartBtn.onclick = () => {
  shoppingCart.classList.toggle('active');
  searchForm.classList.remove('active');  
  loginForm.classList.remove('active');  
  navbar.classList.remove('active');    
};

loginBtn.onclick = () => {
  loginForm.classList.toggle('active');
  searchForm.classList.remove('active');  
  shoppingCart.classList.remove('active'); 
  navbar.classList.remove('active');   
};

let menu = document.querySelector('.navbar');
let menubtn = document.querySelector('#menu-btn');

menubtn.onclick = () => {
  menu.classList.toggle('active');
  searchForm.classList.remove('active');
  shoppingCart.classList.remove('active');
  loginForm.classList.remove('active');
};

document.addEventListener('click', function (e) {

  // if clicking OUTSIDE all elements
  if (
    !searchForm.contains(e.target) &&
    !searchBtn.contains(e.target) &&
    !shoppingCart.contains(e.target) &&
    !cartBtn.contains(e.target) &&
    !loginForm.contains(e.target) &&
    !loginBtn.contains(e.target) &&
    !menu.contains(e.target) &&
    !menubtn.contains(e.target)
  ) {
    // close everything
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    menu.classList.remove('active');

    // remove hover for searchBtn if needed
    searchBtn.classList.add('no-hover');
  }

});

   var swiper = new Swiper(".product-slider", {
      loop: true,
      spaceBetween: 10,
      autoPlay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      centerSlides: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
        
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
      },
    });

    var swiper = new Swiper(".review-slider", {
      loop: true,
      spaceBetween: 10,
      autoPlay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      centerSlides: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
        
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
      },
    });