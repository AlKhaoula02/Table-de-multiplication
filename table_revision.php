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
            <h2>Chosissez la table que vous voulez apprendre:</h2>

        </div>


        <div class="formulaire">
<<<<<<< Updated upstream
            <form action="revision.php" method="post">
                <select name="nombre">
                    <option value="0"></option>
=======

            <form action="table_revision.php" method="post">
                <select name="nombre" id="nombre">
>>>>>>> Stashed changes
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
            </form>
<<<<<<< Updated upstream


            <table id="table">
                <?php
                session_start();
=======
>>>>>>> Stashed changes

                $var = (int) $_POST["nombre"];
                $_SESSION["var"] = $var;
                $_SESSION['random'] = rand(0, 15);
                for ($i = 0; $i < 16; $i++) {
                    ?>
                <tr>
                    <td><?php echo $var . "*" . $i . "=" ?> </td>
                    <td><?php echo $var * $i ?></td>
                </tr>

<<<<<<< Updated upstream

                <!-- echo $var."*". $i. "=". $var * $i."<br>"; -->



                <?php }

                ?>
            </table>
        </div>

=======
        </div>

        <?php

        $_SESSION["var"] = $_POST["nombre"];
        echo "Revison la table de: " . $_POST["nombre"];




        ?>
>>>>>>> Stashed changes
</body>

</html>