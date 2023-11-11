<?php
function ctrlIndex($request, $response, $container){

    $taskModel = $container->apf();
    $user = $request->get("SESSION", "user");
    $response->setTemplate("index.php");

    return $response;
}