<?php 
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");
}else
	include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    $admin=$_SESSION['admin'];
    $html->assign('horas', array('7','8','9','10','11','12','13','14','15','16','17','18',array('07:00:00','08:00:00','09:00:00','10:00:00','11:00:00','12:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00','18:00:00')));
    $html->assign("admin",$admin);
    $fecha_i = $_POST['fecha_i'];
    $fecha_f = $_POST['fecha_f'];
    $quirofano = $_POST['quirofano'];
    $horaI = $_POST['hora_inicial'];
    $horaF = $_POST['hora_final'];
    $aux=$horaI;
    $aux2=$horaI;
    $auxiliar = $fecha_i;

    if($horaI > $horaF or $horaI == $horaF){
    	$alerta ="<script>alertify.alert('Mensaje de alerta','Ingrese una hora correcta/Fecha correcta', function (e) {
            if (e) {
                window.location.href='createhours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("createHours.html");
    }else{
    	include("controller/conect.php");
    	$mysqli=conectar();
    	if($fecha_i != "" and $fecha_f !="" and $quirofano!="Seleccionar"){
    		$query = ("SELECT fecha_horarios, quirofano FROM `horarios` WHERE `fecha_horarios`>='$fecha_i' AND `fecha_horarios`<='$fecha_f' AND `quirofano`='$quirofano'");
    		$mysqli->query($query);
    		if($mysqli->affected_rows > 0){
    			$alerta ="<script>alertify.alert('Mensaje de alerta','El horario para la fecha $fecha_i - $fecha_f del quirofano $quirofano ya ha sido creado', function (e) {
            	if (e) {
                window.location.href='createhours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("createHours.html");
    		}else{
        while($auxiliar <= $fecha_f){
    if($auxiliar == $fecha_i){
        while ($aux2 < $horaF){
            if($aux2 == $horaI){
                //echo $fecha_i.'-'.$horaI.':00:00';
                mysqli_query($mysqli,"INSERT INTO `horarios` (`id_horario`, `fecha_c`, `fecha_horarios`, `quirofano`, `hora`, `estado`, `medico`, `cedula_p`, `paciente`, `hora_inicial`, `hora_final`, `intervencion`, `observacion`) VALUES (NULL, CURRENT_TIMESTAMP, '$fecha_i', '$quirofano', '$horaI:00:00', 'disponible', '', '', '', '', '', '', '');");
            }
            $resultado = $aux2+1;
            //echo $fecha_i.'-'.$resultado.':00:00';
            mysqli_query($mysqli,"INSERT INTO `horarios` (`id_horario`, `fecha_c`, `fecha_horarios`, `quirofano`, `hora`, `estado`, `medico`, `cedula_p`, `paciente`, `hora_inicial`, `hora_final`, `intervencion`, `observacion`) VALUES (NULL, CURRENT_TIMESTAMP, '$fecha_i', '$quirofano', '$resultado:00:00', 'disponible', '', '', '', '', '', '', '');");
            $aux2++;
        }
    }else{
        while($aux < $horaF){
            if($aux == $horaI){
                //echo $auxiliar. '-' .$horaI.':00:00';
                //echo '<br>';
                mysqli_query($mysqli,"INSERT INTO `horarios` (`id_horario`, `fecha_c`, `fecha_horarios`, `quirofano`, `hora`, `estado`, `medico`, `cedula_p`, `paciente`, `hora_inicial`, `hora_final`, `intervencion`, `observacion`) VALUES (NULL, CURRENT_TIMESTAMP, '$auxiliar', '$quirofano', '$horaI:00:00', 'disponible', '', '', '', '', '', '', '');");

            }
        $resultado = $aux+1;
        //echo $auxiliar. '-' .$resultado.':00:00';
        mysqli_query($mysqli,"INSERT INTO `horarios` (`id_horario`, `fecha_c`, `fecha_horarios`, `quirofano`, `hora`, `estado`, `medico`, `cedula_p`, `paciente`, `hora_inicial`, `hora_final`, `intervencion`, `observacion`) VALUES (NULL, CURRENT_TIMESTAMP, '$auxiliar', '$quirofano', '$resultado:00:00', 'disponible', '', '', '', '', '', '', '');");

        $aux++;
        }
    }
$aux=$horaI;
$nuevaF = strtotime($auxiliar. "+1 days");
$fechaU=date("Y-m-d", $nuevaF);
$auxiliar = $fechaU;
/*echo "Valor del auxuliar: ".$auxiliar;
echo '<br>';
if($auxiliar > $fecha_f){
    echo 'la fecha ya es mayor: '.$auxiliar;
    echo '<br>';
 }*/
}
       
                $alerta ="<script>alertify.alert('Mensaje de alerta','Horario creado para la fecha $fecha_i hasta el $fecha_f del quirofano $quirofano', function (e) {
            	if (e) {
                window.location.href='createhours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("createHours.html");
    		}
    	}else {
    		$alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
            	if (e) {
                window.location.href='createhours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("createHours.html");
    	}
 
    }

 ?>