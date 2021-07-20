console.log('%c' + "Fichier app.js chargé", 'color: #0bf; font-size: 1rem; background-color:#fff');


const app = {
    init: function() {
        console.log('%c' + 'Initialisation de app', 'color: #0bf; font-size: 1rem; background-color:#fff');

        // targeting of burger selector
        const burgerSelector = document.querySelector('.header_burger-icon');
        
        
        // I listen to the click
        burgerSelector.addEventListener('click', app.handleClick);

    },
    handleClick: function() {
        console.log('%c' + 'Click', 'color: #0bf; font-size: 1rem; background-color:#fff');
        const menuMobile = document.querySelector('.header_nav-mobile');
        menuMobile.classList.toggle('active');
    }
};

// Loading of dom
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dom loaded');
    // once the loading dom, we launch the app
    app.init();
  });