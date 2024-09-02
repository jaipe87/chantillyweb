<?php

require './lib/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
class PDFactory
{

    public static function crearPDF($html,$name,$ruta)
    {

        $pdf = new HTML2PDF('P', 'A4', 'es', 'true', 'UTF-8');
        $pdf->writeHTML($html);
        if ($ruta != '') {
            $pdf->output($ruta . $name . '.pdf', 'F');
        } else {
            $pdf->output($name.'.pdf');
        }
        return $pdf;
    }
}

