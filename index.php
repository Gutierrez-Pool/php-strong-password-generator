<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="index.php" method="get">
        <label for="lunghezza">Lunghezza password:</label>
        <input type="number" name="lunghezza" min="1" max="10" required>
        <button type="submit">Genera</button>
    </form>

    <?php
        $lunghezza = $_GET["lunghezza"];
        function password($lunghezza) {
            $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
            $password = "";
            for ($i = 0; $i < $lunghezza; $i++) {
                $password .= $characters[rand(0, strlen($characters) -1)];
            }
            return $password;
        }

        $password = password($lunghezza);

        echo "La tua password è: $password";
    ?>
</body>
</html>