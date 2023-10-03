<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="app">
        <h1 class="app--title">Ha salido del programa satisfactoriamente</h1>
        <button class="app--button" onClick="exitProgram()">Volver a menú</button>
    </div>
    <script>
        function exitProgram() {
            window.location.href="../home/home.php";
        }
    </script>
</body>
</html>