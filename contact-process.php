<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        if(isset($_POST["Nombre"]) && $_POST["Nombre"]!= "" 
        && isset($_POST["Edad"]) && $_POST["Edad"]!= ""
        && isset($_POST["Direccion"]) && $_POST["Direccion"]!= "" 
        && isset($_POST["Comentario"]) && $_POST["Comentario"]!= ""){
            
            echo 'Nombre'. $_POST["Nombre"] . '<br />';
            echo 'Edad'. $_POST["Edad"] . '<br />';
            echo 'Direcci&oacute;n'. $_POST["Direccion"] . '<br />';
            echo 'Comentario'. $_POST["Comentario"] . '<br />';
        }else{
            echo "Todos los campos son requeridos"; 
        }
    ?>


</body>
</html>
