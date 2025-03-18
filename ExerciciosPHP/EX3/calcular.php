<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = $_POST["salario"];
    $filhos = $_POST["filhos"];

    if ($salario <= 800) {
        $salario *= 1.3; 
    }
    if ($filhos > 1) {
        $salario += ($filhos - 1) * 90; 
    }

    echo "<h3>Novo Salário: R$" . number_format($salario, 2, ',', '.') . "</h3>";
}

?>
