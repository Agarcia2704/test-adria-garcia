<?php

function ctrlInscripcions($request, $response, $container){

    $taskModel = $container->Users();

    $alu = $taskModel->getAll();
    
    // Set the "apfs," "reserve," and "apart" data in the response object to pass this data to the view.
    $response->set("alu", $alu);
    // Set the template for the response to "admincontroller.php," indicating the view that should be rendered.
    $response->setTemplate("inscripcions.php");

    // Return the response.
    return $response;
}