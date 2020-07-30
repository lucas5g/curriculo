<?php

require './vendor/autoload.php';

use Dompdf\Dompdf;


$dompdf = new Dompdf();

// $dompdf->loadHtml()

ob_start();
// require __DIR__ . '/contents/frontend.php';
require __DIR__ . '/contents/backend.php';

$dompdf->loadHtml(ob_get_clean());
// $pdf  = ob_get_clean();

$dompdf->setPaper('A4');

$dompdf->render();

$dompdf->stream('frontend.pdf', ['Attachment' => false]);



?>