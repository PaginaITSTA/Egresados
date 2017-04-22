<?php

$dateExpedicion = $_POST["dateExpedicion"];
$texEncargado = $_POST["texEncargado"];
$puestoEncargado = $_POST["puestoEncargado"];
$texEmpresa = $_POST["texEmpresa"];
$texLugar = $_POST["texLugar"];
$texNomAlumno = $_POST["texNomAlumno"];
$numControl = $_POST["numControl"];
$texCarreraAlumno = $_POST["texCarreraAlumno"];
$texEspecialidad= $_POST["texEspecialidad"];
$fechaInicio = $_POST["fechaInicio"];
$fechaTermino = $_POST["fechaTermino"];
$fechaLimite = $_POST["fechaLimite"];
$nomDirectorVinculacion = $_POST["nomDirectorVinculacion"];

include('PDF.php');

    $pdf = new PDF();
	$pdf->AddPage('P','Letter');
	$pdf->SetMargins(30,25,30);
	$pdf->SetFont('Arial','B',10); //Arial, negrita, 12 puntos
	
	//Leemos la fecha y guardamos la cadena.
   	//$fecha="México D.F. a ".$_POST['dia']." de ". $_POST['mes']. " de ".$_POST['anio'];
    //Imprime la fecha
    //$pdf->Cell(40,10,$fecha,0,1,'R');
	//Imprime un texto
    $pdf->Cell(0,5,'Oficio No. SS y RP/189-2017',0, 1 ,'R');
	$pdf->Cell(0,5,'ASUNTO: CARTA DE PRESENTACION',0, 1 ,'R');
	$pdf->SetFont('Arial','',10); //Arial, negrita, 12 puntos
	$pdf->Cell(0,5,'Tantoyuca Ver a '.$dateExpedicion,0, 1 ,'R');
	$pdf->Ln(10);
	//$pdf->Ln();

	$pdf->SetFont('Arial','',12); //Arial, negrita, 12 puntos
	$pdf->Cell(40,5,utf8_decode($texEncargado),0, 1 , ' L ');
	$pdf->Cell(40,5,utf8_decode($puestoEncargado),0, 1 , ' L ');
	$pdf->Cell(40,5,utf8_decode($texEmpresa),0, 1 , ' L ');
	$pdf->Cell(40,5,utf8_decode($texLugar) ,0, 1 , ' L ');
	$pdf->Cell(40,5,'P R E S E N T E',0, 1 , ' L ');
	$pdf->Ln(10);
	//$pdf->Ln();


	$pdf->SetFont('Arial','',12); //Arial, negrita, 12 puntos
	$pdf->MultiCell(0,5,utf8_decode('Por este medio presento a sus finas atenciones a la C: '.$texNomAlumno.' con No. de control '.$numControl.' respectivamente, alumno de la carrera de '.$texCarreraAlumno.' en la especialidad de '.$texEspecialidad.' a realizar sus Residencias Profesionales en esta Prestigiada Organización.'),'F','J');
	$pdf->Ln(10);
	//$pdf->Ln();
	
	$pdf->MultiCell(0,5,utf8_decode('El periodo de residencia inicia del '.$fechaInicio.' al '.$fechaTermino.', Cubriendo un total de 500 horas, durante un lapso no menor a 4 meses y no mayor al '.$fechaLimite.', en cuya fecha debe liberarse por medio de la carta de terminación correspondiente a la residencia.'),'F','J');
	
	$pdf->Ln(10);
	//$pdf->Ln();
	
	$pdf->MultiCell(0,5,utf8_decode('Nuestros estudiantes cuentan con la filiación al IMSS por parte de la institución, por lo cual se libera a la empresa de cualquier  responsabilidad medica durante el periodo de las prácticas profesionales.'),'F','J');
	

	//$pdf->Ln();
	$pdf->Ln(10);
	
	$pdf->MultiCell(0,5,utf8_decode('Agradeciendo las atenciones que brindan al portador de la presente, le envió un cordial saludo.'),'F','J');
	$pdf->Ln(10);
	//$pdf->Ln();

	$pdf->Cell(0,5,utf8_decode('Atentamente'),0, 1 ,'R');
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',12); 
	$pdf->Cell(0,5,utf8_decode($nomDirectorVinculacion),0, 1 ,'R');
	$pdf->SetFont('Arial','',12); 
	$pdf->Cell(0,5,utf8_decode('Director De Vinculación  y Extensión'),0, 1 ,'R');
	$pdf->Ln();
	$pdf->Cell(0,5,utf8_decode('C.c.p Archivo de Cartas de Presentacion/ITSTA'),0, 1 ,'l');
	$pdf->Cell(0,5,utf8_decode('HGDA*'),0, 1 ,'l');
	$pdf->Ln();
	$pdf->SetFont('Arial','',10); 
	$pdf->Cell(0,5,utf8_decode('R01/0512                                                                                                                                F-GT-16'),0, 1 ,'l');

    $pdf->Output();
?>