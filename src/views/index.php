<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excursió Cendrassos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
</head>
<body>
<?php include "head.php"; ?>


<div id="cookieModal" class="modal">
  <div class="modal-content">
  <h2>Avís de Política de Cookies</h2>
<p>Aquest lloc web utilitza cookies per millorar l'experiència de l'usuari. En continuar utilitzant el lloc, accepteu l'ús de cookies.</p>
</p>
    <button id="acceptCookies">Aceptar</button>
  </div>
</div>



<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/52677754289_ba409cc3f3_k.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/53109166628_0e8e95afd0_k.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/53182577251_f4113bb617_k.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <p>La nostra excursió del projecte anterior va ser una experiència increïble. Ens vam aventurar a la natura per explorar els meravellosos paratges que ens envolten. El trajecte ens va portar a través de densos boscos, valls verdes i rierols cristal·lins.</p>
    </div>
    <div class="col">
    <p>Durant la nostra aventura, vam gaudir de les vistes panoràmiques de les muntanyes i ens vam endinsar en la bellesa de la natura. Vam descobrir flora i fauna locals, i vam tenir l'oportunitat d'aprendre més sobre la riquesa de la biodiversitat de la nostra regió.</p>
    </div>
    <div class="col">
    <p>La nostra excursió va ser una oportunitat per connectar amb la natura, allunyar-nos de l'estrès diari i gaudir de la companyia dels nostres companys de projecte. Va ser un record que guardarem per sempre i que ens ha inspirat a continuar explorant i protegint el nostre entorn natural.</p>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="src/js/index.js"></script>
</body>
</html>