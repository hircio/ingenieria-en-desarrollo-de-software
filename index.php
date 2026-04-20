<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capura de datos</title>
    <script>src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"</script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <div class="dive">
        <form action="resultados.php" method="POST">
            <h1>Captura de datos personales</h1>
            <br>
            <h2>Ingresar los datos que se te piden</h2>
            <br>
            <p>mi primera encuesta</p>
            <hr>
            <label for="Name">nombre</label>
            <input type="text" name="Name" id="Name" value="Ingresa tu nombre"><hr>
            <label for="Age">Edad</label>
            <input type="number" name="Age" id="Age" value="Ingresa tu edad"><hr>
            <label for="City">Ciudad</label>
            <input type="text" name="City" id="City" value="Ingresa tu ciudad"><hr>
            <label for="Hobby">Pasatiempo</label>
            <input type="text" name="Hobby" id="Hobby" value="Ingresa tu pasatiempo"><hr>
            <button type="submit">¡Ingresamos Datos!</button>
        </form>
    </div>
</body>
</html>