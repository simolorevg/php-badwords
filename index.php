<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CensurApp</h1>
    <form action="result.php">
        <label for="paragraph">Inserisci il paragrafo</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
        <label for="censored">Parola da censurare</label>
        <input type="text" name="censored" id="censored">
        <button type="submit">Invia</button>
    </form>
</body>

</html>