<?php
function procesarFormulario($datosFormulario, $archivo) {
    $resultados = [];
    foreach ($datosFormulario as $clave => $valor) {
        $resultados[$clave] = $valor ?? "";
    }
    $resultados["Archivo"] = $archivo["name"] ?? "";
    $resultados["Tipo"] = $archivo["type"] ?? "";
    $resultados["Tamaño"] = $archivo["size"] ?? "";
    $resultados["Ruta Temporal"] = $archivo["tmp_name"] ?? "";

    if (!empty($resultados["Ruta Temporal"]) && is_uploaded_file($resultados["Ruta Temporal"])) {
        $directorioDestino = "archivos/";
        $resultados["Ruta de Destino"] = $directorioDestino . $resultados["Archivo"];
        move_uploaded_file($resultados["Ruta Temporal"], $resultados["Ruta de Destino"]);
    } else {
        $resultados["Ruta de Destino"] = "No se ha cargado ningún archivo de factura.";
    }

    return $resultados;
}

function mostrarResultados($resultados) {
    echo "<h1>INPUT RECEIVED</h1>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>Parameter</th>";
    echo "<th>Value</th>";
    echo "</thead>";
    foreach ($resultados as $clave => $valor) {
        if(is_array($valor)) {
            $valor = implode(", ", $valor);
        }
        echo "<tr>";
        echo "<td> $clave: </td>";
        echo "<td> $valor </td>";
        echo "</tr>";
    }
    echo "</table>";
}

ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultados = procesarFormulario($_POST, $_FILES["archivo"]);
    mostrarResultados($resultados);
} else {
    header("Location: /contact.html");
    exit();
}

ob_end_flush();
?>


<link rel="stylesheet" href="assets/styles/styles.css">




