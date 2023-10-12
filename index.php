<?php

//include autoloader
require_once 'dompdf/autoload.inc.php';
//reference the Dompdf namespace
use Dompdf\Dompdf;
//instatiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');
//set up the pepersize
$dompdf->setPaper('A4');
//render the HTML as PDF
$dompdf->render();
//output the generated PDF to Browser
$dompdf->stream();
