<?php

function ctrlFormulari($request, $response, $container){

    $response->setTemplate("formulari.php");

    return $response;    
}