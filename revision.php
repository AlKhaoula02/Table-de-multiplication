<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Révision</title>
</head>

<body>
    <h1>Revisez!</h1>
    <h2>quel est le resultat de:</h2>
    
    <?php
    session_start();
    echo "revisez la table de: ". $_SESSION["var"] . ".<br>";
    
    $var1 = rand(0, 15);
    
    
    ?>
    <p>
    <?php
    echo $_SESSION["var"]." * ".$var1;
    ?>
    </p>

    <form action="revision.php" method="post">
        <input type="text" name = "reponse" >
        <input type="submit">
    </form>
    <p>
        votre réponse est:
    </p>
    <?php 
    $rep= (int) $_POST["reponse"];
    if ( $rep == ($_SESSION["var"]*$var1 )){
        echo "correcte";
    }
    else 

    echo "incorrecte";
    ?>
    

</body>

</html>