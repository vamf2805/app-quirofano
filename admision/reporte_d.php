<?php 
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 AND $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

}else {
require 'fpdf/fpdf.php';
include("controller/conect.php");
include "smarty/libs/Smarty.class.php";
$html      = new smarty;
$admin=$_SESSION['admin'];
$alerta ="";
$fecha = $_GET['fecha'];
$html->assign("admin",$admin);

class PDF extends FPDF{
	function Header(){
	$this->SetFont('Arial','B',25);
	// Movernos a la derecha
	$this->Cell(46);
	// Título
	$this->Cell(180, 10, 'Reporte diario',0,0,'C');
	// Salto de línea
	$this->Ln(20);
	}
	function Tabla($header){
	$this->SetFillColor(30,144,255);
	$this->SetTextColor(255,250,250);
	//$this->SetDrawColor(128,0,0);
	//$this->SetLineWidth(.3);
	$this->SetFont('Arial','',12);
	$w = array(32,32,38,38,33,55);
	$this->SetX(30);
	$this->SetFont('Arial','',11);

	for($i=0;$i<count($header);$i++)
	$this->Cell($w[$i],7,$header[$i],1,0,'C',1);
	$this->Ln();
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	$fill = false;
	$fecha = $_GET['fecha'];
	$mysqli=conectar();
	$query     = ("SELECT * FROM `horarios` WHERE `fecha_horarios`='$fecha' AND `estado`='ocupado'");
	$resultado = $mysqli->query($query);
	while($row = $resultado->fetch_array()){
		$this->SetX(30);
		$this->Cell($w[0],6,$row['fecha_horarios'],'LR',0,'C',$fill);
		$this->Cell($w[1],6,$row['quirofano'],'LR',0,'C',$fill);
		$this->Cell($w[2],6,$row['medico'],'LR',0,'C',$fill);
		$this->Cell($w[3],6,$row['paciente'],'LR',0,'C',$fill);
		$this->Cell($w[4],6,$row['hora_inicial'].'-'.$row['hora_final'],'LR',0,'C',$fill);
		$this->Cell($w[5],6,$row['intervencion'],'LR',0,'C',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	$this->SetX(30);
 	$this->Cell(array_sum($w),0,'','T');
	}
	function Footer()
	{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
$pdf = new PDF('L');
$header = array('Fecha',utf8_decode('Quirófano'),utf8_decode('Médico'),'Paciente','Horario', 'Estado');
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->AliasNbPages();
$pdf->Tabla($header);
$pdf->Output();
}
 ?>