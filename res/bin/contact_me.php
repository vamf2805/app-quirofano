<?php
// Check for empty fields
var_dump($_POST);
$destino=$_POST['email'];
   	$asunto="comentario";
   	$comentario="
		email:$_POST[email]
		nombre:$_POST[name]
		asunto:$_POST[subject]
		comentario:$_POST[message]
   	";
if($destino =! "" && $comentario!="")
   {
   	$headers = 'From'.$destino."\r\n".
   	'Reply-to'.$destino."\r\n".
   	"X-Mailer:PHP/".phpversion();
   	mail($destino, $asunto, $comentario,$headers);
   	echo "Mensaje enviado";
  
   }
   else{
   	
   echo "ERROR"; 	
   }
?>
