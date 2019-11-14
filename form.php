<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table de multiplication</title>


</head>
<body>
    <h1> Table de multiplication </h1>

<div class="contenu">
    <form action="form.php" method="post" >
        <select name="nombre" id="nombre">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        <input type="submit" value="multipliez!">
    </form>
</div>
</div>

<?php
var_dump ($_POST["nombre"]);





?>




    
</body>
</html>