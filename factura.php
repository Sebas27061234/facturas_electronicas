<?php
    $doc = new DOMDocument();
    $doc->formatOutput = FALSE;
    $doc->preserveWhiteSpace = TRUE;
    $doc->encoding = 'utf-8';

    $xml = '<?xml version="1.0" encoding="UTF-8"?>
            <factura>
                <fecha>2021-07-20</fecha>
                <serie>F001</serie>
                <correlativo>455</correlativo>
            </factura>';

    $doc->loadXML($xml);
    $doc->save('FACTURA.XML');

    echo "XML CREADO",
?>