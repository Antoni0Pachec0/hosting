//Obtener elementos, cuando se de click al boton de añadir opcion, se le agrega la clase open, y cuando se vuelve
//a presionar, esta clase se remueve.

const nav = document.querySelector("main nav"),
    toggleBtn = document.querySelector("main nav .nav-content .toggle-btn");

toggleBtn.addEventListener("click" , () => {
    nav.classList.toggle("open");
})

function onDrag(){
    const navStyle = window.getComputedStyle(nav),
        navTop = parseInt(navStyle.top),
        navHeight = parseInt(navStyle.height),
        windHeight = window.innerHeight;

    if(navTop > windHeight - navHeight){
        nav.style.top = `${windHeight - navHeight}px`
    }
}