<?php

$DirecVinculacion = $_POST["DirecVinculacion"];
$CarreraAlumno = $_POST["CarreraAlumno"];
$nomJefeCarrrera = $_POST["nomJefeCarrrera"];
$nomAlumno = $_POST["nomAlumno"];
$noControl = $_POST["noControl"];
$nomProyecto = $_POST["nomProyecto"];
$AsesorEmpresarial = $_POST["AsesorEmpresarial"];
$cargoAsesor = $_POST["cargoAsesor"];
$emailAsesor = $_POST["emailAsesor"];
$telAsesor = $_POST["telAsesor"];
$lugarExpedicion = $_POST["lugarExpedicion"];
$fechaExpedicion = $_POST["fechaExpedicion"];



	include('../lib/fpdf.php');

    $pdf = new FPDF();
	$pdf->AddPage('P','Letter');
	$pdf->SetMargins(30,25,30);
	

 	$pdf->Ln(25);
    $pdf->SetFont('Arial','B',12); 
	$pdf->Cell(0,5,utf8_decode($DirecVinculacion),0, 1 ,'L');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,5,utf8_decode('DIRECTOR DE VINCULACIÓN Y EXTENCIÓN'),0, 1 ,'L');
	$pdf->Cell(0,5,utf8_decode('INSTITUTO TECNOLÓGICO SUPERIOR DE TANTOYUCA'),0, 1 ,'L');
	$pdf->Cell(0,5,utf8_decode('TANTOYUCA,VER.'),0, 1 ,'L');
	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,5,utf8_decode('ATN: '.$nomJefeCarrrera),0, 1 ,'R');
	$pdf->SetFont('Arial','',12); 
	$pdf->Cell(0,5,utf8_decode('JEFE DE CARRERA DE '.$CarreraAlumno),0, 1 ,'R');
	$pdf->Ln(10);



	$pdf->SetFont('Arial','',12); 
	$pdf->MultiCell(0,5,utf8_decode('Por medio del presente hago de su conocimiento que el (a) alumno (a) '.$nomAlumno.', con Numero de control  '.$noControl.', de la carrera de  '.$CarreraAlumno.' , ha sido aceptado (a) para realizar sus Residencias Profesionales en el proyecto '.$nomProyecto.' para el cual tendrá como asesor empresarial al C. '.$AsesorEmpresarial.' con cargo: '.$cargoAsesor.', correo electrónico: '.$emailAsesor.', telefono: '.$telAsesor.'.'),'F','J');
	$pdf->Ln(10);

	$pdf->MultiCell(0,5,utf8_decode('Sin más por el momento, me es propicio la ocasión para enviarle un cordial saludo.'),'F','J');
	

	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,5,utf8_decode('A t e n t a m e n t e'),0, 1 , 'C');
	$pdf->Ln(15);
	//$this->Line(10,10,206 es el largo de la linea,10);
	$pdf->Line(65,170,150,170);
	$pdf->Ln(1);
	$pdf->Cell(0,5,utf8_decode($AsesorEmpresarial),0, 1 , 'C');
	$pdf->Cell(0,5,utf8_decode($cargoAsesor),0, 1 , 'C');
	$pdf->Ln(60);
	$pdf->Cell(0,5,$lugarExpedicion.' a '. $fechaExpedicion,0, 1 ,'R');
	$pdf->Output();
	