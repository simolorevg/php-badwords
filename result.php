<?php
$prova = 'Prova di testo';
$inputPara = $_GET['paragraph'];
$inputCensored = $_GET['censored'];
$paraNew = str_replace($inputCensored, '***', $inputPara);
$paraLength = strlen($inputPara);
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
    <h1>Hai scritto</h1>
    <p>Paragrafo: <?php echo $inputPara; ?></p>
    <p>Ed ha <?php echo $paraLength; ?> lettere</p>
    <h2>Paragrafo Censurato</h2>
    <p><?php echo $paraNew; ?></p>
    <p>Numero di lettere nel paragrafo: <?php echo $paraLength; ?></p>
</body>

</html>