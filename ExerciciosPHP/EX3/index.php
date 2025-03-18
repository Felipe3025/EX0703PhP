<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Salarial</title>
</head>
<body>
    <h2>Calculadora de Reajuste Salarial</h2>
    <form action="calcular.php" method="post">
        <input type="number" name="salario"  placeholder="Salário Atual" required>
        <input type="number" name="filhos" placeholder="Quantidade de Filhos" required>
        <button type="submit">Calcular Reajuste</button>
    </form>
</body>
</html>