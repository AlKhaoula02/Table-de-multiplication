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


<?php
if (isset($_POST["submit"])) {
    $rep = (int) $_POST["reponse"];
    echo "votre réponse est:" . "<br>";
} else {
    echo "Veuillez choisir result";
}

?>