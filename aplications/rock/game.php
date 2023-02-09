<?php

session_start();
if ($_SESSION['keuze'] == 'computer') {
    echo "speler vs computer";
}
if ($_SESSION['keuze'] == 'mens') {
    echo "speler vs speler";
}

$rule['steenpapier'] = 2;
$rule['papiersteen'] = 1;
$rule['papierschaar'] = 2;
$rule['schaarpapier'] = 1;
$rule['steenschaar'] = 1;
$rule['schaarsteen'] = 2;

if ($_SESSION['player1'] == $_SESSION['player2']) {
    echo "<h1>Steen Papier Schaar</h1>";
    echo "<h2>Gelijk spel.</h2>";
    echo "<p>Speler 1 had " . $_SESSION['player1'] . ", speler 2 had " . $_SESSION['player2'] . "</p>";
} else {
    $match = $_SESSION['player1'] . $_SESSION['player2'];
    echo "<h1>Steen Papier Schaar</h1>";
    echo "<h1>Speler $rule[$match] heeft gewonnen!</h1>";
    echo "<p>Speler 1 had " . $_SESSION['player1'] . ", speler 2 had " . $_SESSION['player2'] . "</p>";
}
echo "<br><a href='index.php'>Opnieuw</a>";
