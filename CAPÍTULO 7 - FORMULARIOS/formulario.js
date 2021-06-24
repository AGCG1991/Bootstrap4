//console.log("funcionando");
$("#formulario").submit(function (event) {
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.
    enviar();
});
function enviar() {
    //console.log("ejecutado");
    var datos = $("#formulario").serialize(); //toma los datos "name" y los lleva a un arreglo.
    $.ajax({
        type: "post",
        url: "formulario.php",
        data: datos,
        success: function (texto) { //Esperamos una respuesta a la que respondemos con success
            if (texto == "exito") {
                correcto();
            } else {
                phperror(texto);
            }
        }
    })
}
function correcto() {
    $("#mensajeExito").removeClass("d-none"); //Elmino la clase d-none gracias a removeClass
    $("#mensajeError").addClass("d-none"); //Si hubo errores antes, los eliminamos (no queremos que se acumulen en pantalla)
}
function phperror(texto) {
    $("#mensajeError").removeClass("d-none");
    $("#mensajeError").html(texto);
}