<?php

session_start();

$_SESSION['player2'] = $_POST['player2'];
header('location: game.php');
?>