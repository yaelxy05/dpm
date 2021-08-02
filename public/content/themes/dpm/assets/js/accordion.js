console.log('%c' + "Fichier accordion.js chargé", 'color: #0bf; font-size: 1rem; background-color:#fff');


/*const accordions = {
  accordion:null,
  init: function() {
    accordions.accordion = document.querySelectorAll('.accordion');
    
    for(let accord of accordions.accordion) {
      accord.addEventListener('click', accordions.handleClick);
    }
    
  },
  handleClick:function(event) {
    event.preventDefault();
    
    const accordionsBox = document.querySelector('.accordion_box');
    console.log(accordionsBox);
    accordionsBox.classList.toggle('is-open');

  },

}
// Loading of dom
document.addEventListener('DOMContentLoaded', function() {
  console.log('Dom loaded');
  // once the loading dom, we launch the app
  accordions.init();
});
*/



let acc = document.querySelectorAll('.accordion');
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function(event) {
    event.preventDefault();
    
    
    this.classList.toggle("is-open");

    
    let content = this.nextElementSibling;
    if (content.style.maxHeight) {
      
      
      content.style.maxHeight = null;
    } else {
      
      content.style.maxHeight = content.scrollHeight + "px";
    }
     
  });
}