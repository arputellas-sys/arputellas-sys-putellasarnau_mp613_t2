<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Exercici 5 - Múltiples de 3</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">

    <h1>Exercici 5 - Filtrar múltiples de 3</h1>

    <form action="ex5_processa.php" method="POST">

        <label for="numeros">
            Escriu els números separats per comes:
        </label>

        <input
            type="text"
            name="numeros"
            id="numeros"
            placeholder="3,5,6,9,10,12"
            required
        >

        <input type="submit" value="Filtrar">

    </form>

    <a href="index.php" class="tornar">Tornar a l'índex</a>

</div>

</body>
</html>
