const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const passwordField = document.getElementById('contraseña');
const passwordField2 = document.getElementById('contraseña2');
const icon = document.getElementById('i1');
const icon2 = document.getElementById('i2');


//Funcion click para cambiar entre formularios
registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active');
});


//Funcion click para cambiar la visibilidad de la contraseña en el formulario de ingreso
function cambiarVisibilidad(){
    if(passwordField.getAttribute("type") === "password"){
        passwordField.setAttribute("type", "text");
        icon.classList.remove('bx-show');
        icon.classList.add('bx-hide');
    }else{
        passwordField.setAttribute("type", "password");
        icon.classList.remove('bx-hide');
        icon.classList.add('bx-show');
    }
}


//Funcion click para cambiar la visibilidad de la contraseña en el formulario de registro
function cambiarVisibilidad2(){
    if(passwordField2.getAttribute("type") === "password"){
        passwordField2.setAttribute("type", "text");
        icon2.classList.remove('bx-show');
        icon2.classList.add('bx-hide');
    }else{
        passwordField2.setAttribute("type", "password");
        icon2.classList.remove('bx-hide');
        icon2.classList.add('bx-show');
    }
}