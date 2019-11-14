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

    <div class="titre">
        <h1> Table de multiplication </h1>

    </div>

    <div class="contenu">

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
            <input type="submit" value="multipliez!">
        </form>




        <table id="table">
            <?php
            session_start();

            $_SESSION["var1"] = rand(0, 15);


            $var = (int) $_POST["nombre"];
            $_SESSION["var"] = $var;
            for ($i = 0; $i < 16; $i++) {
                ?>
            <tr>
                <td><?php echo $var . "*" . $i . "=" ?> </td>
                <td><?php echo $var * $i ?></td>
            </tr>


            <!-- echo $var."*". $i. "=". $var * $i."<br>"; -->



            <?php }

            ?>
        </table>
    </div>




</body>

</html>