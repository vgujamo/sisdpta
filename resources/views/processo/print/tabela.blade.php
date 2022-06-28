<?php


require __DIR__.'vendor/autoload.php';

$dompdf = new Dompdf();

$dompdf->loadHtml('<d>Ola pessoal</b>');

$dompdf->render();


//echo $dompdf->output();