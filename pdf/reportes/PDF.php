<?php
include('../lib/fpdf.php');

class PDF extends FPDF
{
	
	function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
		$this->MultiCell(0,3,utf8_decode('Instituto Tecnológico superior de tantoyucaa'),'F','C');
		$this->MultiCell(0,3,'Desv. Lindero Tametate S/N Col. La Morita. CP. 92120 Tantoyuca Veracruz','F','C');
		$this->MultiCell(0,3,'Tel.(789)8931680,  8932503,8931675,89311014 y 8932623  Fax.8931552','F','C');
		$this->SetFont('','U',8);
		$this->MultiCell(0,3,'itsta.edu.mx','F','C');
		/*
		C-->Center
		R--> Derecha
		I--> Izquierda*/
    }
    function Header(){
        
    	
        $this->Image('sev.png', 30,10,-300);
        $this->Image('sep.png',126, 10,60);
       	// $this->Cell(40,25,'',0,0,'C',$this->Image('tec.jpg', 175, 12, 19));
        //Se da un salto de línea de 25
        $this->Ln(25);
    }
 
    /*function ImprimirTexto($file){
        //Se lee el archivo
        $txt = file_get_contents($file);
        $this->SetFont('Arial','',12);
        //Se imprime
        $this->MultiCell(0,5,$txt);
    }*/
	 
}
?>