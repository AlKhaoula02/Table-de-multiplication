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
    
    // $var1 = rand(0, 15);
    
    
    ?>
    <p>
    <?php
    
    echo $_SESSION["var"]." * ".($_SESSION['random']);
    ?>
    </p>

    <form action="revision.php" method="post">
        <input type="text" name = "reponse" >
        <input type="submit">
    </form>
    <?php 
    $rep= (int) $_POST["reponse"];
    var_dump($rep);
    var_dump($_SESSION['random']);
    ?>
    <p>
        votre réponse est:
    </p>
    <?php 
    
    if ( $rep == ($_SESSION["var"] * $_SESSION['random'] )){
        echo "correcte";
    }
    else 

    echo "incorrecte";
    ?>
    

</body>

</html>