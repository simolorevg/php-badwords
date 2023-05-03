<?php
$prova = 'Prova di testo';
$inputPara = $_GET['paragraph'];
$inputCensored = $_GET['censored'];
$paraNew = str_replace($inputCensored, '***', $inputPara);
$paraLength = strlen($inputPara);
$paraLengthNew = strlen($paraNew);
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
        <h1>Hai scritto</h1>
        <div class="container">
            <p>Paragrafo: <?php echo $inputPara; ?></p>
            <p>Ed ha <?php echo $paraLength; ?> lettere</p>
        </div>
        <h1>Paragrafo Censurato</h1>
        <div class="container">
            <p><?php echo $paraNew; ?></p>
            <p>Numero di lettere nel paragrafo: <?php echo $paraLengthNew; ?></p>
        </div>
    </div>
</body>

</html>