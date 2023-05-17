
document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault();
var codigo = document.getElementById("codigo").value;
var nombre = document.getElementById("nombreArea").value;
var fecha = document.getElementById("fecha").value;
var version = document.getElementById("version").value;

console.log(codigo);
$.ajax({

    type: 'POST', // Método HTTP utilizado para enviar los datos
    url: '../mantenedor/insertarDatos.php', // Ruta del archivo en el servidor que procesará los datos
    data: {codigo: codigo, nombre : nombre , fecha:fecha,version:version}, // Datos que se enviarán al servidor (pueden ser un objeto o una cadena)
    success: function(respuesta) {
        // Función que se ejecuta si la solicitud es exitosa
        console.log(respuesta);
    },
    error: function(xhr, status, error) {
        // Función que se ejecuta si hay un error en la solicitud
        console.log(error);
    }
});
});