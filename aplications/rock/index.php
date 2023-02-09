<?php

session_start();
if ($_SESSION['keuze'] == 'computer') {
    $computer = 'checked';
    $mens = '';
} else {
    $mens = 'checked';
    $computer = '';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Steen Papier Schaar</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <h1>Steen Papier Schaar</h1>


    <p>Speler 1 maak uw selectie</p>

    <form method="post" action="selectietwee.php">

        <input type="radio" name="ai" value="0" <?= $mens ?>>Mens
        <input type="radio" name="ai" value="1" <?= $computer ?>>Computer
        <br>
        <label><input type="radio" value="steen" name="player1" class="selector"><img src="images/rock.jpg"></label>
        <label><input type="radio" value="papier" name="player1" class="selector"><img src="images/paper.jpg"></label>
        <label><input type="radio" value="schaar" name="player1" class="selector"><img src="images/scissors.jpg"></label>
        </br>



        <input type="submit" value="verstuur" name="verstuur">
    </form>
</body>

</html>