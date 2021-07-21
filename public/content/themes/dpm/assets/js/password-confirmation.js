console.log('%c' + "Fichier password-confirmation.js chargé", 'color: #0bf; font-size: 1rem; background-color:#fff');
const password = document.getElementById("password")
const confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;