<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulari d'inscripcio</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Formulari d'Inscripció</h1>

    <form action="index.php" method="post">
    <input type="hidden" name="r" value="procesarformulari" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="Nom" required>
        </div>

        <div class="form-group">
            <label for="cognoms">Cognoms:</label>
            <input type="text" class="form-control" id="cognoms" name="Cognoms" required>
        </div>

        <div class="form-group">
            <label for="data_naixement">Data de Naixement:</label>
            <input type="date" class="form-control" id="data_naixement" name="DataNaixement" required>
        </div>

        <div class="form-group">
            <label for="adreça">Adreça:</label>
            <input type="text" class="form-control" id="Carrer" name="Carrer" placeholder="Carrer" required>
            <input type="text" class="form-control" id="Numero" name="Numero" placeholder="Numero" required>
            <input type="text" class="form-control" id="Ciutat" name="Ciutat" placeholder="Ciutat" required>
            <input type="text" class="form-control" id="CodiPostal" name="CodiPostal" placeholder="CodiPostal" required>
        </div>

        <div class="form-group">
            <label for="resguard_pagament">Resguard del Pagament (PDF o Imatge):</label>
            <input type="file" class="form-control-file" id="resguard_pagament" name="resguard_pagament" accept=".pdf, .jpg, .jpeg, .png, .pdf" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<a href="index.php" class="btn btn-primary">Tornar enrere</a>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>