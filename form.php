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
                <a href="table_revision.php">Réviser !</a>
            </div>
            <h2>Chosissez la table que vous voulez apprendre:</h2>

        </div>


        <div class="formulaire">
            <form action="form.php" method="post">
                <select name="nombre" id="nombre">
                    <option value="0"></option>
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

            <?php
<!-- <img src="./assets/img/1.png" alt="background"> -->
<div class="contenu">
    <div class="titre">
        <h2>Chosissez la table que vous voulez apprendre:</h2>

    </div>

    
    <div class="formulaire">
        <form action="form.php" method="post">
            <select name="nombre" id="nombre">
                <option value="0">0</option>
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


        <table id="table">
            <?php
            session_start();
            if (isset($_POST["nombre"]) ){
            $var = (int) $_POST["nombre"];
            $_SESSION["var"] = $var;
            $_SESSION['random'] = rand(0, 15);
            for ($i = 0; $i < 16; $i++) {
                ?>
            <tr>
                <td><?php echo $var . "*" . $i . "=" ?> </td>
                <td><?php echo $var * $i ?></td>
            </tr>

            // if ((int) $_POST['nombre'] > 0)

            if (isset($_POST['nombre'])) {
            $tab = (int) $_POST['nombre'];
            for ($i = 1; $i < 16; $i++) { echo "<p>" . $i . "x" . $tab . "=" . $i * $tab; } } else {
                echo " <b> Veuillez choisir une table" ; } ?>

        </div>
        </table>
        <br>
        <div class="link">
            <p>A vous de jouer!</p>
            <br>
            <a href="revision.php">"C'est par ici.."</a>
            <br>
            <br>
        </div>
    </div>

</body>

</html>