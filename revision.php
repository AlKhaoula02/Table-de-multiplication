<<<<<<< Updated upstream
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
    <div class="contenu">
    <h2>Maintenant, au tableau!!</h2>
    <br>

    <?php
    session_start();
    echo "Révisons ensemble la table de: " . $_SESSION["var"] . ".<br>";

    // $var1 = rand(0, 15);


    ?>
    <p>
        <h2>Quel est le resultat de:</h2>
        <?php

        echo $_SESSION["var"] . " * " . ($_SESSION['random']);
        ?>
    </p>

    <form action="revision.php" method="post">
        <input type="text" name="reponse">
        <input type="submit">
    </form>
    <?php
    $rep = (int) $_POST["reponse"];
    ?>
    <p>
        Votre réponse est:
    </p>
    <?php

    if ($rep == ($_SESSION["var"] * $_SESSION['random'])) {
        echo " Correcte, Bravo! ";
    } else {
        echo " Incorrecte :( ";
    }
    $_SESSION['random'] = rand(0, 15);
    ?>

    <br>
    <br>

    <div class="link">
            <br>
        <a href="form.php">Une autre table? </a>
        <br>
        <br>
    </div>
    <div class="link2">
            
            <br>
        <a href="index.php"> <img src="./assets/img/img3.png" alt="retour"></a>
        <br>
        <p>A bientôt!</p>
        <br>
    </div>
</div>

</body>
=======
<?php
session_start();
$result;
if (isset($_SESSION["var"])) {

    $random = rand(0, 15);
    $result = (int) ($_SESSION["var"]) * $random;
}


echo "Revison la table de: " . $_SESSION["var"] . ".<br>";

?>



<h1>quel est le resultat de"</h1>
<?php
echo $_SESSION["var"] . " * " . ($random);
?>
<!-- <form action="revision.php" method="post">
    <input type="text" name="reponse">
    <input type="submit">
</form> -->




<?php


if (isset($_SESSION["var"])) {   ?>

<form action="revision.php" method="post">
    <input type="text" name="reponse">
    <input type="submit">
</form>

<?php
    if ((int) $_POST["reponse"] == $result) {
        echo "votre réponse est : correcte";
    } else {
        echo "votre réponse est: incorrecte";
    }
} else {

    echo "Veuillez choisir result";
}
>>>>>>> Stashed changes

</html>