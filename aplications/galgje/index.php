<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Galgje</title>
</head>
<body>

<h2>Hangman: browser edition</h2>
<h5>The rules are the same as regular hangman.</h5>
<h5>The player gets nine turns to guess the word.</h5>

<!-- dit deel laat je kiezen tussen manual en een random woord -->
<div class='selection'>
Do you want to choose your own word or generate a random word?
<form action="chosen.php" method="get">
  <input type="radio" name="method" value="manual" id="manual"><label for="manual"> Manual</label><br>
  <input type="radio" name="method" value="auto" id="auto"><label for="auto"> Auto generate</label><br>
  <input type="submit" value="Select">
</form>
</div>


</body>
