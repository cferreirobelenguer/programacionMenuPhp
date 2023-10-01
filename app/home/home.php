<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div id="content" class="menu">
        <h1 class="menu--title">Selecciona una de las opciones</h1>
        <button  class="menu--button" onClick="getSuma()">Suma de enteros</button>
        <button class="menu--button" onClick="getDiferencia()">Diferencia</button>
        <button class="menu--button" onClick="getProducto()">Producto</button>
        <button class="menu--button" onClick="getDivision()">División</button>
        <button class="menu--button" onClick="exitProgram()">Salir</button>
    </div>
    <div id="exit">

    </div>
    <script>
        /**
         * Variable that controls whether the exit message is displayed
         */
        var isVisible = false;
        /**
         * Go to sum url
         */
        function getSuma() {
            isVisible = false;
            window.location.href="../suma/suma.php";
        }
        /**
         * Go to diference url
         */
        function getDiferencia() {
            isVisible = false;
            window.location.href="../Resta/resta.php";
        }
        /**
         * Go to product url
         */
        function getProducto() {
            isVisible = false;
            window.location.href="../producto/producto.php";
        }
        /**
         * Go to division url
         */
        function getDivision() {
            isVisible = false;
            window.location.href="../division/division.php";
        }
        /**
         * description: exit program
         */
        function exitProgram() {
            isVisible = true;
            document.getElementById("exit").innerHTML = isVisible ? "Usted salió del programa exitósamente <br> <button onClick='goHome()' >Volver a menú</button></button>" : "";
            let content = document.getElementById("content");
            if (content.hidden === false) {
                content.hidden = true;
            }
        }   
        /**
         * description: go to principal menu
         */
        function goHome() {
            let content = document.getElementById("content");
            if (content.hidden) {
                content.hidden = false;
            }
            let exit = document.getElementById("exit");
            if (exit.hidden === false) {
                exit.hidden = true;
            }

        }

    </script>
</body>
</html>