<?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"]; #correo de la persona que escribe el mensaje
    $mensaje = $_POST["mensaje"];

    $destinatario = "nazar.contacto@gmail.com"; #aqui insertar el correo al que deseas que llegue el mensaje que envies en el formulario
    $asunto = "nuevo mensaje de $email";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $email \n";
    $contenido .= "Mensaje: $mensaje";

    $header = "From: ejemplo@correo.com"; #aqui insertas el correo del remitente en el encabezado del correo.

    $mail = mail($destinatario, $asunto, $contenido, $header);

    if ($mail) {
        echo "<script>alert('El correo se envio correctamente :)')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
    }
}
?>
