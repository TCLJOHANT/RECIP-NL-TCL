
const mainWeb = document.getElementById('main-web');
const imgUsuarioPerfil = document.getElementById('usuario-perfil');
function cambiarventanilla(){
    const contenidoPrincipal = document.getElementById('cont-p');
    mainWeb.style.display = 'none';
    const iframe = document.createElement('iframe');
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        iframe.style.outline = 'none';
        iframe.style.border = 'none';
        iframe.style.boxShadow = 'none';
        iframe.src = 'perfil'; // Ruta de la vista a cargar
    contenidoPrincipal.appendChild(iframe); // Agregar el elemento <iframe> a contenidoPrincipal
}
