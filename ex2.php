<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Exercici 2 - Mesos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">

    <h1>Exercici 2 - Dies del mes</h1>

    <form action="ex2_processa.php" method="GET">

        <label for="mes">Selecciona un mes:</label>

        <select name="mes" id="mes">

            <option value="1">Gener</option>
            <option value="2">Febrer</option>
            <option value="3">Març</option>
            <option value="4">Abril</option>
            <option value="5">Maig</option>
            <option value="6">Juny</option>
            <option value="7">Juliol</option>
            <option value="8">Agost</option>
            <option value="9">Setembre</option>
            <option value="10">Octubre</option>
            <option value="11">Novembre</option>
            <option value="12">Desembre</option>

        </select>

        <input type="submit" value="Consultar">

    </form>

    <a href="index.php" class="tornar">Tornar a l'índex</a>

</div>

</body>
</html>
