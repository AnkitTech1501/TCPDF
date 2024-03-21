<?php 
require_once 'vendor/autoload.php';
// use TCPDF\TCPDF;

// Create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Sample PDF');
$pdf->SetSubject('Testing TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, test');

// Set default header data
$pdf->SetHeaderData('', 0, 'Sample PDF', '');

// Set margins
$pdf->SetMargins(0, 0, 0);

// Set font
$pdf->SetFont('helvetica', '', 24);

// Add a page
$pdf->AddPage();
$padding = 5; // Horizontal padding
$paddingY = 5; // Vertical padding
// $pdf->setCellPaddings($paddingX, $paddingY, $paddingX, $paddingY);

// Set text for multicell
$text = "Your large data here dsfffffffffffffffffffffffffffffffffffffffffffffffffffffffvxvxgdfgd
sdfdsfdsffg";
$text1 = "dfgfd";
// Set maximum width and height for each cell
$maxWidth = 50; // Adjust as needed
$maxHeight = 10; // Adjust as needed

// Output multicell with padding
$each_cell_width = $pdf->getPageWidth()/4;
$pdf->MultiCell($each_cell_width*2, $maxHeight, $text, 1, 'L', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);

// Set the X position for the second multicell
$pdf->SetXY($each_cell_width * 2, 0);
$pdf->MultiCell($maxWidth, $maxHeight, 'sdf', 1, 'J', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);

// Set the X position for the second multicell
$pdf->SetXY($each_cell_width * 3-2.5, 0);
$pdf->MultiCell($maxWidth, $maxHeight*3,'Anmkit', 1, 'J', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);
$y = $pdf->GetY();

$pdf->SetXY(0, $y);
$pdf->MultiCell($each_cell_width*2, $maxHeight, $text, 1, 'J', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);

// Set the X position for the second multicell
$pdf->SetXY($each_cell_width * 2, $y);
$pdf->MultiCell($maxWidth, $maxHeight, 'sdf', 1, 'J', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);

// Set the X position for the second multicell
$pdf->SetXY($each_cell_width * 3-2.5, $y);
$pdf->MultiCell($maxWidth, $maxHeight,'Anmkit', 1, 'J', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);

// $pdf->MultiCell($maxWidth, $maxHeight, 'Dubey', 1, 'J', 0, 1, '', '', true, 0, true, true, $maxHeight, 'L', true);
// $x = $pdf->GetX() + 45 + $padding;
// $pdf->SetXY($x, 10);
// Set some content

// Close and output PDF
$pdf->Output('sample.pdf', 'I');

?>