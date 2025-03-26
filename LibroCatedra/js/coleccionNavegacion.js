// Función para mostrar/ocultar las opciones de cada filtro
function toggleSearch() {
    const searchContainer = document.getElementById('searchContainer');
    searchContainer.style.display = searchContainer.style.display === 'flex' ? 'none' : 'flex';
}

function toggleOptions(id) {
    const options = document.getElementById(id);
    const icon = document.querySelector(`#${id} ~ .filter-btn .dropdown-icon`);
    options.style.display = options.style.display === 'block' ? 'none' : 'block';
    icon.textContent = options.style.display === 'block' ? '▲' : '▼'; 
}
