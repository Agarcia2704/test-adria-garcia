<?php
function ctrlIndex($request, $response, $container){

    $taskModel = $container->Users();
    $user = $request->get("SESSION", "user");
    $response->setTemplate("index.php");

    return $response;
}