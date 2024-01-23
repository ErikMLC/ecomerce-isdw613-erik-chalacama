<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> N&uacute;mero de elementos en carrito
        <?php
        if(isset($_COOKIE['ecommerce-cookie-cart-items'])){
            echo $_COOKIE ['ecommerce-cookie-cart-items'];
        }else{
            echo 'No especificado'; 
        }
        ?>
    </h1>

    <script>
        console.log(document.cookie);
    </script>

</body>
</html>