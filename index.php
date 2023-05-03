<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Custom link-->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <h1>CensurApp</h1>
        <div class="container">
            <form action="result.php" method="get">
                <label for="paragraph">Inserisci il paragrafo</label>
                <textarea name="paragraph" id="paragraph" cols="20" rows="5"></textarea>
                <label for="censored">Parola da censurare</label>
                <input type="text" name="censored" id="censored">
                <button type="submit">Invia</button>
            </form>
        </div>
    </div>
</body>

</html>