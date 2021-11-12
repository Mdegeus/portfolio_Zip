<?php

//// empty is needed because the first spot is 0

$chars = ["empty", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

if (isset($_POST['submit'])) {

    $CHAR_TABLE = str_split($_POST['submitedText']);

    array_push($CHAR_TABLE, " ");

    $i = 1;
    $currentWord = "";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rune App</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

    <br>
    <form action="../index.php">
        <button>Go Back</button>
    </form>

    <?php if (isset($_POST['submit'])): ?>

        <?php foreach ($CHAR_TABLE as $char): ?> 
            <?php if (array_search(strtolower($char), $chars)): ?>
                <?php 
                    $i = array_search(strtolower($char), $chars); 
                    $currentWord = $currentWord . $char
                ?>
                <img class="rune" src="../Runes/slice<?=$i?>.png"></img>
            <?php elseif ($char === " "): ?>
                <p><?= $currentWord ?></p>
                <?php $currentWord = ""; ?>
                <div class="space"></div>
            <?php endif; ?>
        <?php endforeach; ?>

    <?php endif; ?>
</body>
</html>