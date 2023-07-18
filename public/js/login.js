function mostrarLoguin() {
  const rutaUsuarioCreate = "{{route('usuario.create')}}";
  const estiloBody= document.getElementById('styleLoguin');
    // Crea un elemento iframe para cargar la vista de loguin
  let iframe = document.createElement('iframe');
  iframe.classList.add('superposicion')
    iframe.src = 'registro'; // Ruta a  controlador que devuelve la vista de 
    // Agrega el iframe al contenedor
    estiloBody.appendChild(iframe);
    // Muestra el contenedor
    iframe.style.display = 'block';
    
}




















window.onload = function() {
}