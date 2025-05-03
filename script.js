document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.querySelector('#search-btn');
    const searchBar = document.querySelector('.search-bar-container');
    const formBtn = document.querySelector('#login-btn');
    const loginForm = document.querySelector('.login-form-container');
    const formClose = document.querySelector('#form-close');
    const menu = document.querySelector('#menu-bar');
    const navbar = document.querySelector('.navbar');
    const videoBtn = document.querySelectorAll('.vid-btn');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Scroll behavior
    window.onscroll = () => {
        if (searchBtn) searchBtn.classList.remove('fa-times');
        if (searchBar) searchBar.classList.remove('active');
        if (menu) menu.classList.remove('fa-times');
        if (navbar) navbar.classList.remove('active');
        if (loginForm) loginForm.classList.remove('active');
        if (dropdownMenu) dropdownMenu.classList.remove('show');
    };

    

    // Login form open
    if (formBtn) {
        formBtn.addEventListener('click', () => {
            loginForm.classList.add('active');
        });
    }

    // Login form close
    if (formClose) {
        formClose.addEventListener('click', () => {
            loginForm.classList.remove('active');
        });
    }

    // Menu button toggle
    if (menu) {
        menu.addEventListener('click', () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        });
    }

    // Video button functionality
    if (videoBtn) {
        videoBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                const src = btn.getAttribute('data-src');
                document.querySelector("#video-slider").src = src;
            });
        });
    }

    // Dropdown menu
    const packagesLink = document.getElementById('packages-link');
    if (packagesLink) {
        packagesLink.addEventListener('click', (e) => {
            e.preventDefault();
            const dropdownMenu = packagesLink.nextElementSibling;
            dropdownMenu.classList.toggle('show');
        });
    }
});


var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay:{
        delay: 2500,
        disableOnInteraction:false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    breakpoints:{
        640: {
          
            slidesPerView:1,
        },
        768: {
          
            slidesPerView:2,
        },        
        1024: {
          
            slidesPerView:3,
        },

    }
  });




