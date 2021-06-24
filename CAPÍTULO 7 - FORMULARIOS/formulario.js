//1º EVITAMOS QUE SE REFRESQUE AL ENVIAR

$("#formulario").submit(function (event) {
    //En cuanto detecte el submit, el cual se ejecuta al pulsar enviar, almacenamos los datos y evitamos que se refresque, una vez hecho, enviamos los datos
    event.preventDefault(); //Almacena los datos sin refrescar el sitio web
    enviar();
})

function enviar() {
    var datos = $("#formulario").serialize(); //Toma los datos "name" y los lleva a un arreglo
    console.log(datos);
    $.ajax({
        type: "post",
        url: "formulario.php",
        data: datos,
        success: function (texto) {  //Esperamos una respuesta a la que respondemos con success
            if (texto === "exito") {
                correcto();

            } else {
                phperror(texto);
            }
        }

    })
}

function correcto() {
    $("#mensajeExito").removeClass("d-none"); //Elmino la clase d-none gracias a removeClass

}
function phperror(texto) {
    $("#mensajeError").removeClass("d-none");
    $("mensajeError").html(texto);

}