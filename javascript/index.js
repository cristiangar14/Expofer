
//event listeners
document.getElementById('buscarBtn').addEventListener('click', (e) =>{
    e.preventDefault();
   //leer el texto del input buscar

const textoBuscador = document.getElementById('searchInput').value;
console.log(textoBuscador);
})