//contadores para eventos 
let contadorLogin = '';
let contadorCarrito = '';
let contadorInicio = '';
let contadorProductos = '';
let contadorServicioTecnico = '';
let contadorNosotros = '';
let contadorAccesorios = '';


//login
let btnlogin = document.getElementById('btnLogin');
let login = document.getElementById('login');

const loginActivo = 'login-abierto';

btnlogin.addEventListener('click', function(){
    if(contadorLogin ==''){
        login.className = (loginActivo)
        
        contadorLogin = 1;

        if(contadorCarrito !=''){
            contadorCarrito = '';
        }
        if(contadorInicio !='' ){
            btnInicio.classList.remove(linkActivo);
            navActivo.classList.remove(navAct);
            contadorInicio = '';
        }
        if(contadorProductos !='' ){
            btnProductos.classList.remove(linkActivo);
            contadorProductos = '';
        }
        if(contadorServicioTecnico !='' ){
            btnServicioTecnico.classList.remove(linkActivo);
            contadorServicioTecnico = '';
        }
        if(contadorNosotros !=0 ){
            btnNosotros.classList.remove(linkActivo);
            contadorNosotros = '';
        }
        if(contadorAccesorios !='' ){
            btnAccesorios.classList.remove(linkActivo);
            contadorAccesorios = '';
        }
        
    }else{
        login.classList.remove(loginActivo);
        login.className = ('login-cerrado');
        contadorLogin = '';
    }
})

//nav


let navActivo = document.getElementById('navActivo')
let btnInicio = document.getElementById('btnInicio')
let btnProductos = document.getElementById('btnProductos')
let btnServicioTecnico = document.getElementById('btnServicioTecnico')
let btnNosotros = document.getElementById('btnNosotros')
let btnAccesorios = document.getElementById('btnAccesorios')

const linkActivo = 'link-nav-activo';
const navAct = 'nav-activo';


btnInicio.addEventListener('click', function(){

    contadorInicio = 1;

        if (contadorLogin != ''){
            login.classList.remove('login-abierto');
            login.className = ('login-cerrado');
            contadorLogin = '';
        }
        if(contadorCarrito !=''){
            contadorCarrito = '';
        }
        if(contadorInicio ===1 ){
            navActivo.className = (navAct);
            btnInicio.className = (linkActivo);
            contadorInicio = 1;
        }else{
            navActivo.classList.remove('nav-activo');
            navActivo.className = ('nav-inactivo');
            btnInicio.classList.remove(linkActivo);
            btnInicio.className = ('link-nav');
            contadorInicio = '';
        }
        if(contadorProductos !='' ){
            btnProductos.classList.remove(linkActivo);
            contadorProductos = '';
        }
        if(contadorServicioTecnico !='' ){
            btnServicioTecnico.classList.remove(linkActivo);
            contadorServicioTecnico = '';
        }
        if(contadorNosotros !='' ){
            btnNosotros.classList.remove(linkActivo);
            contadorNosotros = '';
        }
        if(contadorAccesorios !='' ){
            btnAccesorios.classList.remove(linkActivo);
            contadorAccesorios = '';
        }
        
})







//leer el texto del input buscar
document.getElementById('buscarBtn').addEventListener('click', (e) =>{
    e.preventDefault();

const textoBuscador = document.getElementById('searchInput').value;
console.log(textoBuscador);
})

