<?php

function ctrlFormulariclau($request, $response, $container){

    $claveCorrecta = 'daw';
    $claveAcceso = $_POST['claveAcceso'];
    
    if ($claveAcceso === $claveCorrecta) {
        $response->redirect("location: index.php?r=inscripcions");
    }
    
    $response->setTemplate("formulariclau.php");

    return $response;    
}
