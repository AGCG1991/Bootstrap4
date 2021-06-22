//1º EVITAMOS QUE SE REFRESQUE AL ENVIAR

$("#formulario").submit(function (event) {
    //En cuanto detecte el submit, el cual se ejecuta al pulsar enviar, almacenamos los datos y evitamos que se refresque, una vez hecho, enviamos los datos
    event.preventDefault(); //Almacena los datos sin refrescar el sitio web
    enviar();
})

function enviar() {
    console.log("Ejecutado");
}