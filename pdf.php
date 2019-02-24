<?php

/* 
 * Fichero pdf.php -> Genera PPF...
 */

require('./fpdf181/fpdf.php');

class pdf extends FPDF {
    //put your code here
    
    // Cabecera de página
    function Header() {
        // Logo
        $this->Image("https://image.flaticon.com/icons/png/512/419/419280.png",10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(100,10,'FACTURA DE LOS PRODUCTOS',1,0,'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}


$datos = unserialize(filter_input(INPUT_GET, 'datos'));

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);


$pdf->Cell(189 ,10,'',0,1); // Linea vacia
$pdf->Cell(189 ,10,'',0,1); // Linea vacia

// Informacion Columnas izq - derecha...
$pdf->Cell(130 ,5,'FACTURA',0,0);
$pdf->Cell(59 ,5,'#45',0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(130 ,5, date('d/m/Y h:i A'),0,0); // 1º columna - Fecha
$pdf->Cell(59 ,5,'',0,1); // 2º columna - nada...

// Celda vacia para espacio
$pdf->Cell(189 ,10,'',0,1); // Linea vacia
$pdf->Cell(189 ,10,'------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->Cell(189 ,10,'',0,1); // Linea vacia
//
// Nombre de la tabla...
$pdf->SetFont('Arial','B',12);
$pdf->Cell(120 ,5,'ARTICULO', 0,0); // Izq
$pdf->Cell(40 ,5,'UNIDADES', 0,0); // Centro
$pdf->Cell(40 ,5,'PRECIO', 0,1); // Derecha
$pdf->Cell(189 ,10,'',0,1); // Linea vacia
$pdf->SetFont('Arial','',12);
$total = 0; // Sin IVA

foreach ($datos as $pos => $value) {
    $pdf->Cell(120 ,5, $value[0], 0,0); // Izq
    $pdf->Cell(40 ,5, $value[1], 0,0); // Centro
    $pdf->Cell(40 ,5, $value[2], 0,1); // Derecha
    $pdf->Cell(189 ,10,'',0,1); // Linea vacia
    $total += $value[2];
}

// Total
$pdf->Cell(189 ,10,'------------------------------------------------------------------------------------------------------------------------------',0,1);

$pdf->Cell(120 ,5, '', 0,0); // Izq
$pdf->Cell(40 ,5, 'SubTotal', 0,0); // Centro
$pdf->Cell(40 ,5, round($total,2), 0,1); // Derecha

$iva = $total*0.21;
$pdf->Cell(120 ,5, '', 0,0); // Izq
$pdf->Cell(40 ,5, 'IVA', 0,0); // Centro
$pdf->Cell(40 ,5, round($iva,2), 0,1); // Derecha

$pdf->SetFont('Arial','B',12);
$pdf->Cell(189 ,10,'',0,1); // Linea vacia
$pdf->Cell(120 ,5, '', 0,0); // Izq
$pdf->Cell(40 ,5, 'TOTAL', 0,0); // Centro
$pdf->Cell(40 ,5, round($total+$iva,2), 0,1); // Derecha
$pdf->Output();
