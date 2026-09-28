<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Exercici 4 - Contrasenya</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">

    <h1>Exercici 4 - Validador de contrasenyes</h1>

    <form action="ex4_processa.php" method="POST">

        <label for="contrasenya">Contrasenya:</label>

        <input
            type="password"
            name="contrasenya"
            id="contrasenya"
            required
        >

        <input type="submit" value="Validar">

    </form>

    <a href="index.php" class="tornar">Tornar a l'índex</a>

</div>

</body>
</html>
