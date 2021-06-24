<?php

$error = '';

//VALIDANDO NOMBRE
if(empty($_POST["nombre"])){
    $error = 'Ingresa un nombre </br>';
}else{
    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);
    if($nombre==''){
        $error .= 'Nombre está vacio</br>';
    }
}
//VALIDANDO E-MAIL
if(empty($_POST["email"])){
    $error .= 'Ingresa un E-mail</br>';
}else{
    $email = $_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error .= 'Ingresa un E-mail verdadero</br>';
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL); //Limpiamos el texto de etiquetas
    }
}
//VALIDANDO MENSAJE
if(empty($_POST["mensaje"])){ //Si está vacio, devuelve error
    $error .= 'Ingresa un mensaje </br>'; //.= Concatena con el valor que ya tenía antes
}else{
    $mensaje = $_POST["mensaje"];
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING); 
    $mensaje = trim($mensaje);
    if($mensaje==''){
        $error .= 'Mensaje está vacio</br>';
    }
}

//CUERPO DEL MENSAJE
$cuerpo .= "Nombre: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";
 
$cuerpo .= "Email: ";
$cuerpo .= $email;
$cuerpo .= "\n";
 
$cuerpo .= "Mensaje: ";
$cuerpo .= $mensaje;
$cuerpo .= "\n";

//DIRECCIÓN
$enviarA = 'aitor.gustavo@gmail.com'; //REEMPLAZAR CON TU CORREO ELECTRÓNICO
$asunto = 'Nuevo mensaje de mi sitio web';

//ENVIAR CORREO
if($error == ''){
    //Primer parámetro correoDestino,Segundo parámetro asunto, tercero el cuerpo y cuarto, el email del cliente
    $success = mail($enviarA,$asunto,$cuerpo,'de: '.$email);
    echo 'exito';
}else{
    echo $error;
}

?>