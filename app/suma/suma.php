<?php

function getSuma() {
    if (isset($_POST['number1']) && isset($_POST['number2'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        return 'El resultado de la suma es: '. ($number1 + $number2);
    }
}

?>

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
        <h1 class="app--title">Suma</h1>
        <form class="app__form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="app--input" type="number" name="number1" placeholder="Introduce número" required>
            <input class="app--input"  type="number" name="number2" placeholder="Introduce número" required>
            <input class="app--button" type="submit" value="Sumar">
        </form>
        <p class="app__result"><?php echo getSuma()?></p>
        <button class="app--button" onClick="goHome()" >Volver a home</button>
    </div>
    <script>
        function goHome() {
            window.location.href="../home/home.php";
        }
    </script>
</body>
</html>