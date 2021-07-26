console.log('%c' + "Fichier menu-active.js chargé", 'color: #0bf; font-size: 1rem; background-color:#fff');

const menu = {
    menuSelectors:null,
    init: function() {
        // we target the the class menu-item
        menu.menuSelectors = document.querySelectorAll('.menu-item');
        // we go through the whole class and we listen to the click on the menu
        for(let menuSelector of menu.menuSelectors) {
            menuSelector.addEventListener('click', menu.handleClick);
        }
        
    },

    handleClick:function(event) {
        console.log('%c' + 'Click', 'color: #0bf; font-size: 1rem; background-color:#fff');

        
        // DOC JS event.currentTarget https://developer.mozilla.org/en-US/docs/Web/API/Event/currentTarget
        // we create a variable for to recover the current menu
        const clickedButton = event.currentTarget;
        console.log(clickedButton);
        // we give the result of clickedButton to the function setCurrentActive in callback
        menu.setCurrentActive(clickedButton);
    },

    setCurrentActive:function(clickedButton) {
        // we target the current element who have the class active
        const currentLink = document.querySelector('.menu-item.active');
        // if he have the class active we remove the classe active and else we add to the class menu-item
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