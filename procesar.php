<?php
$remitente = $_POST['email'];
$destinatario = 'juanjotorres90@gmail.com'; 
$asunto = $_POST["asunto"]; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo = "Apellidos: " . $_POST["apellidos"] . "\r\n";
    $cuerpo = "Asunto: " . $_POST["asunto"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
	

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellidos']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirmacion.html'; 
}
?>
