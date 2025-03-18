<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form action="calcular.php" method="post">
        <input type="number" name="peso" id = "peso" placeholder="Peso (kg)" required>
        <input type="number" name="altura" id = "altura" placeholder="Altura (m)" required>
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>