console.log('%c' + "Fichier menu-active.js chargé", 'color: #0bf; font-size: 1rem; background-color:#fff');

const menu = {
    menuSelectors:null,
    init: function() {

        menu.menuSelectors = document.querySelectorAll('.menu-item');
        
        for(let menuSelector of menu.menuSelectors) {
            menuSelector.addEventListener('click', menu.handleClick);
        }
        
    },

    handleClick:function(event) {
        console.log('%c' + 'Click', 'color: #0bf; font-size: 1rem; background-color:#fff');

        
        // DOC JS event.currentTarget https://developer.mozilla.org/en-US/docs/Web/API/Event/currentTarget
        const clickedButton = event.currentTarget;
        console.log(clickedButton);
        menu.setCurrentActive(clickedButton);
    },

    setCurrentActive:function(clickedButton) {
        const currentLink = document.querySelector('.menu-item.active');
        
            currentLink.classList.remove('active');
        
        
            clickedButton.classList.add('active');
        
        
    }
};

// Loading of dom
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dom loaded');
    // once the loading dom, we launch the app
    menu.init();
  });