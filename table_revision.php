<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>table de multiplication</title>


</head>

<body>

    <div class="contenu">
        <div class="titre">
            <h1> Table de multiplication </h1>
            <div id="ac1">
                <a href="index.php">Retour</a> <br>
                <a href="revision.php">Réviser !</a>
            </div>
        </div>

        <h2>Chosissez la table que vous voulez apprendre:</h2>
        <div class="formulaire">
            <!--             
        <form action="table_revision.php" method="post">
                <select name="nombre" id="nombre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
                <input type="submit" value="GO!">
            </form> -->

            <form action="revision.php" method="post">
                <input type="radio" name="nombre" value="1"> 1<br>
                <input type="radio" name="nombre" value="2"> 2<br>
                <input type="radio" name="nombre" value="3"> 3<br>

                <input type="submit" value="ok">
            </form>


            <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favcolor1"] = (int) $_POST["nombre"];

            $_SESSION["var"] = (int) $_POST["nombre"];

            if (isset($_POST["nombre"])) {

                $_SESSION["var"] = (int) $_POST["nombre"];

                echo  $_SESSION["var"];
            }
            ?>

        </div>


</body>

</html>