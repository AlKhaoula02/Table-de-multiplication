<?php
session_start();


?>

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
        <h1>Maintenant, au tableau!!</h1>
        <br>
        <?php
        echo "<h2>Révisons ensemble la table de: " . $_SESSION["var"] . ".</h2><br>";
        ?>
        <p>
            <h2>Quel est le resultat de:</h2>
            <?php
            if (isset($_POST["var"])) {
                $_SESSION["var"]  = $_POST["var"];
            };
            if (isset($_POST["reponse"])) {
                if (isset($_SESSION['rand'])) {
                    if ($_SESSION['rand'] * $_SESSION['var'] == $_POST['reponse']) {
                        $reslt = ' <p class="oui">Bonne réponse, bravo!</br>la réponse était bien ' . $_POST["reponse"] . '</p></br>';
                    } else {
                        $reslt = '<p class="non">Incorrect :(</br> la réponse est plutôt ' . $_SESSION['rand'] * $_SESSION['var'] . '</p></br>';
                    }
                }
            };
            $_SESSION['rand'] = rand(1, 15);
            ?>
            <p class="question"> <?php echo $_SESSION["var"] ?> X <?php echo $_SESSION["rand"] ?> </p>
            <form action="revision.php" method="post">
                <input type="text" name="reponse">
                <input type="submit" value="Valider">
            </form>

            <div class="resultat">
                <?php
                if (isset($reslt)) {
                    echo $reslt;
                };
                ?>
            </div>
            <div class="link">
                <br>
                <a href="form.php">Une autre table? </a>
                <br>
                <br>
            </div>
            <div class="link2">
                <br>
                <a href="reset.php"> <img src="./assets/img/img3.png" alt="retour"></a>
                <br>
                <p>A bientôt!</p>
                <br>
            </div>
    </div>

</body>

</html>