<?php
session_start();
$_SESSION = [];
session_destroy();
session_start();

header('Location: /Table-de-multiplication/index.php');
exit;
