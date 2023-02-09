<!-- hier haalt de code de gekozen of radom woord op -->
<?php
error_reporting(0);
session_start();
if (isset($_SESSION)) {
    session_unset();
}
$_SESSION['debug'] = 0; //set to 1 to show the riddle

$urlarr = array("https://random-word-api.herokuapp.com/word","https://random-word.ryanrk.com/api/en/word/random");

foreach ($urlarr as $value) { //check which service is available
    $responseHeaders = get_headers($value, 1);
    if (strpos($responseHeaders[0], "200")) {
        $url = $value;
        break ;
    }
}
$generatedword = json_decode(file_get_contents($url));
if ((isset($generatedword)) && ($_GET['method'] == 'auto')) {
    $_SESSION['question'] = strtoupper($generatedword[0]);
    $_SESSION['max'] =  9;
    $_SESSION['counter'] = 0;
    header('Location:galgje.php');
} else {
    ?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<title>Galgje</title>
</head>

<body>

Random word generator unavailable or you selected the manual option.<br>Please add a word manually.<br>
<form action="setword.php" method="$_GET">
<input type="text" name="word">
<input type="submit" value="Play the game!">
</form>
    <?php
}
?>
</body>