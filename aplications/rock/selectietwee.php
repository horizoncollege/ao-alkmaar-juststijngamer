<?php 

session_start();
$_SESSION['player1'] = $_POST['player1'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Steen Papier Schaar</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php
$autoselect[1] = 'steen';
$autoselect[2] = 'papier';
$autoselect[3] = 'schaar';
if ($_POST['ai'] == 1) {
    $_SESSION['player2']  = $autoselect[rand(1, 3)];
    $_SESSION['keuze'] = 'computer';
    header('location: game.php');
} else {
    $_SESSION['keuze'] = 'mens';
    ?>

    <h1>Steen Papier Schaar</h1>

    <p>Speler 2 maak uw selectie</p>
    
        <form method="post" action="setsession.php">
            <label><input type="radio" value="steen" name="player2" class="selector"><img src="images/rock.jpg"></label>
            <label><input type="radio" value="papier" name="player2" class="selector"><img src="images/paper.jpg"></label>
            <label><input type="radio" value="schaar" name="player2" class="selector"><img src="images/scissors.jpg"></label>
            </br>
            <input type="submit" value="speel" name="verstuur">
        </form>

    </body>
</html>
    <?php
}
?>