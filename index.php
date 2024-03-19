<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="functions.php" method="get">
        <label for="lunghezza">Lunghezza password:</label>
        <input type="number" name="lunghezza" min="1" max="10" required>
        <button type="submit">Genera</button>
    </form>

</body>
</html>