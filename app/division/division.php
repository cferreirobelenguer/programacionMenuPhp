<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>División</h1>
        <form action="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="number" name="number1" placeholder="Introduce número" required>
            <input type="number" name="number2" placeholder="Introduce número" required>
        </form>
        <button onClick="goHome()" >Volver a home</button>
    </div>
    <script>
        function goHome() {
            window.location.href="../home/home.php";
        }
    </script>
</body>
</html>