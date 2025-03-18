<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);

    echo "<h3>IMC: " . number_format($imc, 2) . "</h3>";

    if ($imc < 18.5) {
        echo "Abaixo do Peso</p>";
    } elseif ($imc < 24.9) {
        echo "Peso Normal</p>";
    } elseif ($imc < 29.9) {
        echo "Sobrepeso</p>";
    } else {
        echo "<Obesidade</p>";
    }
}
?>
