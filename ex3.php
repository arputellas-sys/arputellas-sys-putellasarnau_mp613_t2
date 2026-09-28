<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 3 - Temperatura</title>
</head>
<body>

    <h1>Exercici 3 - Conversió de temperatura</h1>

    <form action="ex3_processa.php" method="GET">

        <label for="temperatura">Temperatura:</label>
        <input type="number" step="any" name="temperatura" id="temperatura" required>

        <br><br>

        <label for="escala">Escala:</label>

        <select name="escala" id="escala">
            <option value="C">Celsius</option>
            <option value="F">Fahrenheit</option>
        </select>

        <br><br>

        <input type="submit" value="Convertir">

    </form>

    <br>

    <a href="index.php">Tornar</a>

</body>
</html>