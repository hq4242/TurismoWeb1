<?php
    $destinatario = 'yorenemez@gmail.com';

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];
    $header = "Enviado desde la Pagina turismopuno.com";
    $mensajeCompleto = "Nombre: ".$nombre ."\nTelefono: " .$telefono "\nE-mail: " .$email "\nMensaje: " .$mensaje;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente...')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
    
?>