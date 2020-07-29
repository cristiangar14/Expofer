window.addEventListener('onload', ()=>{
    console.log('cargada')
})


//login
let btnlogin = document.getElementById('btnLogin');
let login = document.getElementById('login');

const loginActivo = 'login-abierto';

btnlogin.addEventListener('mouseover', function(){
    login.className = (loginActivo)
})

login.addEventListener('mouseover', function(){
    login.className = (loginActivo)
})

login.addEventListener('mouseout', function (){
    login.classList.remove(loginActivo);
    login.className = ('login-cerrado');
})

//nav

let btnInicio = document.getElementById('btnInicio');
let navMenu = document.getElementById('navMenu');

btnInicio.addEventListener('mouseover', function(){
    btnInicio.className = ('link-nav-activo');
    navMenu.className = ('nav-activo');
})

navMenu.addEventListener('mouseover', function(){
    btnInicio.className = ('link-nav-activo');
    navMenu.className = ('nav-activo');
})

navMenu.addEventListener('mouseout', function(){
    btnInicio.classList.remove('link-nav-activo');
    navMenu.classList.remove('nav-activo');
    btnInicio.className = ('link-nav')
    navMenu.className = ('nav-inactivo');

})


//leer el texto del input buscar
document.getElementById('buscarBtn').addEventListener('click', (e) =>{
    e.preventDefault();

const textoBuscador = document.getElementById('searchInput').value;
console.log(textoBuscador);
})

//categorias

//fondo categorias
