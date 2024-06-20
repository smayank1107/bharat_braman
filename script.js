let menu = document.querySelector('#menu-btn');

let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {

    menu.classList.toggle('fa-times');

    navbar.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
var swiper = new swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// const swiper = new Swiper('.swiper-container', {
//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,
//     // If you want pagination
//     pagination: {
//         el: '.swiper-pagination',
//     },
//     // If you want navigation buttons
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     // And if you need scrollbar
//     scrollbar: {
//         el: '.swiper-scrollbar',
//     },
// });
