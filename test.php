<?php
require 'vendor/autoload.php';

Dompdf\Autoloader::register();
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
// $dompdf->loadHtml(file_get_contents('./cv.html'));
$dompdf->loadHtml(file_get_contents('./watermark.html'));
// $dompdf->loadHtml(file_get_contents('./test2.html'));
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>