<?php

function ctrlProcesarFormulari($request, $response, $container) {
    
    $taskModel = $container->Users();
    
    $Nom = $request->get(INPUT_POST, "Nom");
    $Cognoms = $request->get(INPUT_POST, "Cognoms");
    $DataNaixement = $request->get(INPUT_POST, "DataNaixement");
    $Carrer = $request->get(INPUT_POST, "Carrer");
    $Numero = $request->get(INPUT_POST, "Numero");
    $Ciutat = $request->get(INPUT_POST, "Ciutat");
    $CodiPostal = $request->get(INPUT_POST, "CodiPostal");

    $resguardo_name = $_FILES['resguardo']['name'];
    $resguardo_tmp_name = $_FILES['resguardo']['tmp_name'];

    $resguardo_path = "img/resguard" . $resguardo_name;

    move_uploaded_file($resguardo_tmp_name, $resguardo_path);

    $taskModel->addAlumnes($Nom, $Cognoms, $DataNaixement, $Carrer, $Numero, $Ciutat, $CodiPostal);

    $response->redirect("location: index.php");
    
    return $response;
}