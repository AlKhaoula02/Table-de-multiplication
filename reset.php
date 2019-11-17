<?php

session_start();
$_SESSION = [];
session_destroy();
session_start();

header('Location: http://localhost/Table-de-multiplication/index.php');
exit;
