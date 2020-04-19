<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$d = new Dompdf();
$d ->loadHtml('Menggunakan Library DOMpdf untuk Membuat Report PDF dengan DOMPDF');

$d->setPaper('A4','landscape');
$d->render();

$d->stream('hasil_report.pdf');
?>