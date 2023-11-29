<?php

function ctrlDoRegister($request, $response, $container) {
    $taskModel = $container->users();
    
    // Retrieve data from the POST form
    $nombre = $request->get(INPUT_POST, "nombre");
    $correo = $request->get(INPUT_POST, "correo");
    $contrasena = $request->get(INPUT_POST, "contrasena");

    // Validate and escape the form data before using it

    // Call the model to register the user
    $taskModel->register($nombre, $correo, $contrasena);

    // Redirect the user to the login page after registration
    $response->redirect("location: index.php");
    
    return $response;
}