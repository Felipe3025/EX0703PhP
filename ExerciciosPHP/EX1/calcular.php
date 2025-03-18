<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

if ($num1 > $num2) {
    echo "O numero 1 e o maior!";
}
else {
    echo "O numero 2 e maior!";
}

?>