<?php

//include autoloader
require_once 'dompdf/autoload.inc.php';

//reference the Dompdf namespace
use Dompdf\Dompdf;

//instatiate and use the dompdf class
$dompdf = new Dompdf();

//html conttent
$htmlContent = file_get_contents('profile.php');

//load html content
$dompdf->loadHtml($htmlContent);

//set up the pepersize
//$dompdf->setPaper('A4');
//render the HTML as PDF
$dompdf->render();

//output the generated PDF to Browser
$dompdf->stream('profile', array('Attachment' => 0));
