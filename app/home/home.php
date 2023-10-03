<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div id="content" class="app">
        <h1 class="app--title">Selecciona una de las opciones</h1>
        <button  class="app--button" onClick="getSuma()">Suma de enteros</button>
        <button class="app--button" onClick="getDiferencia()">Diferencia</button>
        <button class="app--button" onClick="getProducto()">Producto</button>
        <button class="app--button" onClick="getDivision()">División</button>
        <button class="app--button" onClick="exitProgram()">Salir</button>
    </div>
    <div id="exit">

    </div>
    <script>
        /**
         * Go to sum url
         */
        function getSuma() {
            window.location.href="../suma/suma.php";
        }
        /**
         * Go to diference url
         */
        function getDiferencia() {
            window.location.href="../Resta/resta.php";
        }
        /**
         * Go to product url
         */
        function getProducto() {
            window.location.href="../producto/producto.php";
        }
        /**
         * Go to division url
         */
        function getDivision() {
            window.location.href="../division/division.php";
        }
        /**
         * description: exit program
         */
        function exitProgram() {
            window.location.href="../exit/exit.php";
        }   

    </script>
</body>
</html>