<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacion = $_POST["operacion"];
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    switch ($operacion) {
        case "suma":
            $resultado = $valor1 + $valor2;
            break;
        case "resta":
            $resultado = $valor1 - $valor2;
            break;
        case "multiplicacion":
            $resultado = $valor1 * $valor2;
            break;
        case "division":
                $resultado = $valor1 / $valor2;
                break;
        default:
            $resultado = "Operación no válida";
    }

    echo "Resultado: " . $resultado;
}
?>