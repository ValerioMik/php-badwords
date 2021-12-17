<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <?php 
    $conteggio = count(explode(' ', $testo));
    ?>
    <div><p><?php echo $testo?></p></div>
    <div><h1><?php echo "IL NUMERO DI PAROLE DEL TESTO E :".$conteggio ?></h1></div>
    <form action="frasicorrette.php" method="get">
        <input type="text" name="name" placeholder="censura">
        <input type="submit">
    </form>

</body>
</html>