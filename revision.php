<?php
session_start();

echo "Favorite color is " . $_SESSION["favcolor1"] . ".<br>";


$var1 = rand(0, 15);
echo "quel est le resultat de" . "<br>";
echo $_SESSION["var"] . " * " . $var1 . "<br>";
?>

<form action="revision.php" method="post">
    <input type="text" name="reponse">
    <input type="submit">
</form>

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

<?php
if (isset($_POST["submit"])) {
    $rep = (int) $_POST["reponse"];
    echo "votre réponse est:" . "<br>";
} else {
    echo "Veuillez choisir result";
}
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

?>