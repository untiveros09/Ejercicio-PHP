<?php

require('../pdf/fpdf.php');
class PDF extends FPDF {

    function Header(){
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(60); 
        $this->Cell(70,10,'Reporte de Ventas',1,0,'C');
        $this->Ln(20); 

        // Encabezados de la tabla
        $this->Cell(40,10,'Nombre',1,0,'C');
        $this->Cell(35,10,'DNI',1,0,'C');
        $this->Cell(40,10,'Producto',1,0,'C');
        $this->Cell(25,10,'P. Uni',1,0,'C');
        $this->Cell(25,10,'Cant',1,0,'C');
        $this->Cell(25,10,'Total',1,1,'C'); 
    }

    function Footer(){
        $this->SetY(-15); 
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

require '../Model/conexion.php';
$consulta = "SELECT * FROM ventas";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12); 

while($row = $resultado->fetch_assoc()) {
    $pdf->Cell(40,10,$row['nombre'],1,0,'C');
    $pdf->Cell(35,10,$row['dni'],1,0,'C');
    $pdf->Cell(40,10,$row['producto'],1,0,'C');
    $pdf->Cell(25,10,$row['precioUnitario'],1,0,'C');
    $pdf->Cell(25,10,$row['cantidad'],1,0,'C');
    $pdf->Cell(25,10,$row['precioTotal'],1,1,'C'); 
}

$pdf->Output();

?>