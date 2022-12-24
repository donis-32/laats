<?php 

   include("con_db.php");
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';

include("con_db.php");

if (isset($_POST['register'])) {
    $fecha_servicio = trim($_POST['fecha_servicio']);
    $nombre_cliente = trim($_POST['nombre_cliente']);
    $direccion_cliente = trim($_POST['direccion_cliente']);
    $contacto_cliente = trim($_POST['contacto_cliente']);
    $telefono_cliente = trim($_POST['telefono_cliente']);
    $email_cliente = trim($_POST['email_cliente']);
    $nombre_equipo = trim($_POST['nombre_equipo']);
    $marca_equipo = trim($_POST['marca_equipo']);
    $modelo_equipo = trim($_POST['modelo_equipo']);
    $serie_equipo = trim($_POST['serie_equipo']);
    $observaciones_servicio = trim($_POST['observaciones_servicio']);
    $status_inicial_equipo = trim($_POST['status_inicial_equipo']);
    $status_final_equipo = trim($_POST['status_final_equipo']);
    $tecnico = trim($_POST['tecnico']);
    $hora_entrada_tecnico = trim($_POST['hora_entrada_tecnico']);
    $hora_salida_tecnico = trim($_POST['hora_salida_tecnico']);
    $calificacion = trim($_POST['calificacion']);
    $observacion_cliente = trim($_POST['observacion_cliente']);
    
    if (isset($_POST["cliente_acepta"])) {
        $cliente_acepta = 'YES';
    } else {
        $cliente_acepta = 'NO';
    }
    
    $fechareg = date("Y-m-d");
    date_default_timezone_set('America/Guatemala');
    $hora = date("G:i:s");
    
    $consulta = "INSERT INTO mnto_servicio(fecha_servicio, nombre_cliente, direccion_cliente, contacto_cliente, telefono_cliente, email_cliente, nombre_equipo, marca_equipo, modelo_equipo, serie_equipo, observaciones_servicio, status_inicial_equipo, status_final_equipo, tecnico, hora_entrada_tecnico, hora_salida_tecnico, calificacion, observacion_cliente, cliente_acepta, date) VALUES ('$fecha_servicio','$nombre_cliente','$direccion_cliente','$contacto_cliente','$telefono_cliente','$email_cliente','$nombre_equipo','$marca_equipo','$modelo_equipo','$serie_equipo','$observaciones_servicio','$status_inicial_equipo','$status_final_equipo','$tecnico','$hora_entrada_tecnico','$hora_salida_tecnico','$calificacion','$observacion_cliente','$cliente_acepta','$fechareg')";

    
     $resultado = mysqli_query($conex,$consulta);
   
    if ($resultado) {
        error_log($consulta);
        echo($consulta);

    } else {
error_log($consulta);
        echo($consulta);
    }
    

                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->SMTPDebug = 2;
                $mail->Host = 'smtp.hostinger.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'info@donis.fun';
                $mail->Password = 'Cybertech22&&';
                $mail->setFrom('info@donis.fun', 'Outsourcing | +');
                $mail->addAddress($email_cliente, $nombre_cliente);
                $mail->Subject = 'Orden de servicio | LAATS';
                
                $body = "<html><body>"; 
                $body .= " <table border=1 cellspacing=0 cellpadding=0 align=center >";
                $body .= " <tr><td align = center> Orden de Servicio </td></tr>";
                $body .= " <tr><td align = center><img src= https://donis.fun/Service/assets/images/log-png.png ></td></tr>";
                $body .= " <tr><td align = center>Fecha: $fecha_servicio</td></tr>";
                $body .= " <tr><td align = center>Nombre: $nombre_cliente, Cel: $telefono_cliente  </td></tr>";
                $body .= " <tr><td align = center>Equipo:$nombre_equipo, Marca: $marca_equipo, Modelo: $modelo_equipo, Serie:$serie_equipo   </td></tr>";
                $body .= " <tr><td align = center>Descripcion del servicio realizado: $observaciones_servicio </td></tr>";
                $body .= " <tr><td align = center>Estado incial del equipo: $status_inicial_equipo </td></tr>";
                $body .= " <tr><td align = center>Estado final del equipo: $status_final_equipo </td></tr>";
                $body .= " <tr><td align = center>Observacion del tecnico: $observaciones_servicio</td></tr>";
                $body .= " <tr><td align = center>Tenico: $tecnico</td></tr>";
                $body .= " <tr><td align = center><a href=https://donis.fun/Service/ target=_blank><h1><font color=black>Viasita nuestra web para mas!</font></h1></td></tr>";

    
                $body .= "</body></html>";

                $mail->Body = $body;
                $mail->AltBody = $body;
                //$mail->addAttachment('test.txt');
                if (!$mail->send()) {
                }
                else {
                }
   
       
}

?>