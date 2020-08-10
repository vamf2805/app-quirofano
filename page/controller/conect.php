<?php 
function conectar(){
$s='localhost';
$u='root';
$p='';
$db='citas_medicas';
$mysqli= new mysqli($s, $u, $p, $db);
if ($mysqli -> connect_errno) {
die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
. ") " . $mysqli -> mysqli_connect_error());
}
else
return $mysqli;
}

?>