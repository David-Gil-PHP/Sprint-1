<?php
session_start();

$cognoms = $_POST['cognoms'];
echo "<h1>El nom i cognoms introduïts són '{$_POST['nom']}' '$cognoms'</h1>";

$_SESSION['cognoms'] = $_POST['cognoms']."</br>";
print_r($_SESSION);
echo $_SERVER['PHP_SELF'];

session_unset();
session_destroy();

?>