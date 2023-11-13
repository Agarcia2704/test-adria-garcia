<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <title>Document</title>
</head>
<body>
<table id="alumnes" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Cognoms</th>
            <th>Data Naixement</th>
            <th>Carrer</th>
            <th>Numero</th>
            <th>Ciutat</th>
            <th>Codi Postal</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alu as $alumnes): ?>
        <tr>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['Nom'] ?>"></td>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['Cognoms'] ?>"></td>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['DataNaixement'] ?>"></td>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['Carrer'] ?>"></td>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['Numero'] ?>"></td>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['Ciutat'] ?>"></td>
            <td><input name="nom" type="text" class="form-control panel" value="<?php echo $alumnes['CodiPostal'] ?>"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php" class="btn btn-primary">Tornar enrere</a>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="src/js/index.js"></script>
</html>
