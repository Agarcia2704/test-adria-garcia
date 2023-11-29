<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1>Registrar-se</h1>

<form action="index.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="r" value="doregister" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="cognoms">Correu:</label>
        <input type="email" class="form-control" id="cognoms" name="correo" required>
    </div>

    <div class="form-group">
        <label for="contrasena">Contraseña:</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
<a href="index.php" class="btn btn-primary">Tornar enrere</a>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>