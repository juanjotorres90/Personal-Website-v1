<?php
$remitente = $_POST['email'];
$destinatario = 'juanjotorres_90@hotmail.com'; 
$asunto = $_POST["asunto"]; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nom: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo = "Cognoms: " . $_POST["apellidos"] . "\r\n";
    $cuerpo = "Assumpte: " . $_POST["asunto"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Missatge: " . $_POST["mensaje"] . "\r\n";
	

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellidos']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirmacion-cat.html'; 
}
?>
