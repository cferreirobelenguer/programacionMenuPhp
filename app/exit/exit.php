<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exit.css">
</head>
<body>
    <div class="exit">
        <h1 class="exit--title">Ha salido del programa satisfactoriamente</h1>
        <button class="exit--button" onClick="exitProgram()">Volver a menú</button>
    </div>
    <script>
        function exitProgram() {
            window.location.href="../home/home.php";
        }
    </script>
</body>
</html>