// Función para mostrar/ocultar la barra de búsqueda
function toggleBusqueda() {
    const contenedorBusqueda = document.getElementById('contenedorBusqueda');
    contenedorBusqueda.style.display = contenedorBusqueda.style.display === 'flex' ? 'none' : 'flex';
}

// Función para mostrar/ocultar las opciones de cada filtro
function toggleOpciones(id) {
    const opciones = document.getElementById(id);
    const icono = document.querySelector(`#${id} ~ .boton-filtro .icono-desplegable`);
    opciones.style.display = opciones.style.display === 'block' ? 'none' : 'block';
    icono.textContent = opciones.style.display === 'block' ? '▲' : '▼'; 
}
