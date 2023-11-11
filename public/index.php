<?php

include "../src/config.php";
include "../src/controllers/ctrlIndex.php";

include "../src/middleware/isLogged.php";
include "../src/middleware/isAdmin.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
if (isset($_REQUEST["r"])) {
  $r = $_REQUEST["r"];
}

if ($r == "") {
  $response = ctrlIndex($request, $response, $container);
} else {
  echo "No existe la ruta";
}


$response->response();
