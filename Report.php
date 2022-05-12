<?php
    
ob_end_clean();
require('https://localhost/fpdf/fpdf.php');
  
// Instantiate and use the FPDF class 
$pdf = new FPDF();
  $pdf->SetFont('Arial', 'B', 18);
//Add a new page
$pdf->AddPage();
$pdf->Cell(20, 50, 'Falcon Cafe');
$pdf->Cell(20, 60, 'System users Report');
$pdf->Cell(20, 80, '-----------------------------------------------------------------------------------------------');
// Set the font for the text


  
// return the generated output
$pdf->Output();
  
?>