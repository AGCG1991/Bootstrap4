<?php
$error = '';

//validamos el nombre
if(empty( $_POST["nombre"])){ //Si está vacio
    $error = 'Ingresa un nombre </br>';
}else {
    $nombre = $_POST["nombre"];
    $nombre =filter_var($nombre, FILTER_SANITIZE_STRING); //Limpiamos el texto de etiquetas 

}
//validamos el email
if (empty($nombre = $_POST["email"];)){
    $error .= 'Ingresa un email </br>'; //.= Concatena con el valor que ya tenía antes
    
}else {
    $email = $nombre = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        $error .= 'Ingresa un Email verdadero </br>';

    }else {
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}

//validamos el mensaje
if(empty($_POST["mensaje"])){
    $error .= 'Ingresa un mensaje </br>';
}else {
    $mensaje = $_POST["mensaje"];
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
}

//CUERPO DEL MENSAJE
$cuerpo = 'Nombre :'.$nombre.'\n'; //Concateno
$cuerpo.= 'Email  :' .$email. '\n'; 
$cuerpo.= 'Mensaje :'.$mensaje.'\n';

//Dirección
$enviarA = 'aitor.gustavo@gmail.com';
$asunto = 'Nuevo mensaje de mi sitio web';

//Enviar correo
$success = mail($enviarA,$asunto,$cuerpo,'de : '.$email); //Primer parámetro correoDestino,Segundo parámetro asunto, tercero el cuerpo y cuarto, el email del cliente
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
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}
//VALIDANDO MENSAJE
if(empty($_POST["mensaje"])){
    $error .= 'Ingresa un mensaje </br>';
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
$enviarA = 'tucorreo@tudominio.com'; //REEMPLAZAR CON TU CORREO ELECTRÓNICO
$asunto = 'Nuevo mensaje de mi sitio web';

//ENVIAR CORREO
if($error == ''){
    $success = mail($enviarA,$asunto,$cuerpo,'de: '.$email);
    echo 'exito';
}else{
    echo $error;
}

?>
if($error == ''){
    $success = mail($enviarA,$asunto,$cuerpo,'de : '.$email);
    echo 'exito';
}else {
     echo $error;
}


?>