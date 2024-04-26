<?php

if (isset($_POST['enviar'])){
    if (!empty($_POST['name']) && !empty($_POST['asunto']) &&!empty($_POST['msg']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mial = mail(nazar.contacto@gmail.com, $asunto, $msg, $header);
        if($mail){
            echo "<h4>¡Correo enviado exitosamente!</h4>"
        }
        else{
            echo "<h4>¡Error al enviar el correo!</h4>"
        }
    }
}
