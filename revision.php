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
        if (isset($_POST["reponse"])) {
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
        }
        ?>

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

</html>