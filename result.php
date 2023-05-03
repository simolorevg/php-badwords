<?php
$prova = 'Prova di testo';
$para = $_GET['paragraph'];
$cens = $_GET['censored'];
$paraNew = str_replace($cens, '***', $para);
$paraLength = strlen($para);
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
    <p><?php echo $paraNew ?></p>
</body>

</html>