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
        <h2>Maintenant, au tableau!!</h2>
        <br>

        <?php

        echo "Révisons ensemble la table de: " . $_SESSION["var"] . ".<br>";


        ?>
        <p>
            <h2>Quel est le resultat de:</h2>
            <?php
            $a=(int) rand(0, 15);
            $b= (int) $_SESSION["var"];

            echo $b . " * " . ($a);
            ?>
        </p>



        <form action="revision.php" method="post">
            <input type="text" name="reponse">
            <input type="submit" value="Valider">
        </form>
        <?php

        if (isset($a)) {
        echo $a."<br>";
        var_dump($_POST["reponse"]);
            if (isset($_POST["reponse"])) {
                $rep = (int) $_POST["reponse"];
                echo $a;
                ?>
                <p>
                    Votre réponse est:
                </p>
        <?php
        echo $a."<br>";
        echo $rep."<br>";
        echo $b."<br>";
                if ($rep !=  ($b * $a)) {
                    echo $rep."celle ci <br>";
                    echo " Incorrecte :( ";

                } else {
                    echo $a."<br>";
                    echo $rep."celle la <br>";

                    echo " Correcte, Bravo! ";
                    
                }
                echo $a;
            }
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