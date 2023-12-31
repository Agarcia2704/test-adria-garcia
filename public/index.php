<?php

include "../src/config.php";

include "../src/controllers/ctrlIndex.php";
include "../src/controllers/ctrlFormulari.php";
include "../src/controllers/ctrlProcesarFormulari.php";
include "../src/controllers/ctrlInscripcions.php";
include "../src/controllers/ctrlFormulariclau.php";
include "../src/controllers/ctrlRegister.php";
include "../src/controllers/ctrlDoRegister.php";

include "../src/middleware/isLogged.php";

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
} elseif ($r == "formulari") {
  $response = ctrlFormulari($request, $response, $container, "ctrlFormulari");
} elseif ($r == "procesarformulari") {
  $response = ctrlProcesarFormulari($request, $response, $container, "ctrlProcesarFormulari");
} elseif ($r == "inscripcions") {
  $response = ctrlInscripcions($request, $response, $container, "ctrlInscripcions");
} elseif ($r == "formulariclau") {
  $response = ctrlFormulariclau($request, $response, $container, "ctrlFormulariclau");
} elseif ($r == "register") {
  $response = ctrlRegister($request, $response, $container, "ctrlRegister");
} elseif ($r == "doregister") {
  $response = ctrlDoRegister($request, $response, $container, "ctrlDoRegister");
} else {
  echo "No existe la ruta";
}


$response->response();
