<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario d'accés</title>
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
</head>
<body>
    <h1>Formulari d'accés:</h1>
    <form id="miFormulario">
    <input type="password" id="claveAcceso" name="claveAcceso">
    <input type="submit" value="Enviar">
</form>
<div id="resultado"></div>
<script>
document.getElementById('miFormulario').addEventListener('submit', function(e) {
    e.preventDefault();
    var claveAcceso = document.getElementById('claveAcceso').value;
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/procesarformulari.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        // Redirigir después de recibir la respuesta del servidor
        window.location.href = 'index.php?r=inscripcions';
    };
    xhr.send('claveAcceso=' + claveAcceso);
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
