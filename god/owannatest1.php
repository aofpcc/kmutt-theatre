<?php
$klein->respond('GET', '/testbarcode', function ($request, $response, $service) {
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);

    $service->render('layouts/core/owannatest.php');
});
