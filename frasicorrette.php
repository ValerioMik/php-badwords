<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $testo="Hi, my name is, what? My name is, who?
    My name is, chka-chka Slim Shady
    Hi, my name is, huh? My name is, what?
    My name is, chka-chka Slim Shady
    Hi, my name is, what? My name is, who?
    My name is, chka-chka Slim Shady
    Hi, my name is, huh? My name is, what?
    My name is, chka-chka Slim Shady";
    $parolaCensurata = str_replace($_GET['name'],'***',$testo);
    ?>
    <h2>Ciao le parole che hai censurate sono state sostituite da ***</h2>
    <div>
     H1e la parola da censurare è: <?php echo $_GET["name"]; ?>
    </div>
    <div>
    <p><?php echo $parolaCensurata ?></p>
    </div>
</body>
</html>