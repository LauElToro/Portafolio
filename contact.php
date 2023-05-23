<?php

        $destinatario = "LautyfigueroaLau@gmail.com";
        $name = $_POST["name"];
        $motivo = $_POST["motivo"];
        $mensaje = $_POST["mensaje"];
        $email = $_POST["email"];
   
       $header = "Enviado desde postafolio";
       $mensajeCompleto = $mensaje . "\nAtentamente: " . $name;

       $envio = mail ($destinatario, $motivo, $mensajeCompleto, $header);
       if ($envio){
        echo "<script> alert('Correo enviado de manera correcta') </script>";
       }
 ?> 