<?php

var_dump($_GET);
$text_paragraf = $_GET["paragrafo"];
$text_word = $_GET["wordx"];
$text_paragraf_modifed = str_replace($text_word, 'xxx', $text_paragraf );








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Il paragrafo è: </h1>
    <p><?php echo $text_paragraf ?></p>
    <h5>la sua lunghezza è <?php echo strlen(trim($text_paragraf)) ?> con gli spazi bianchi </h5>
    
    <h1>Il paragrafo modificato è: </h1>
    <p><?php echo $text_paragraf_modifed ?></p>
    <h5>la sua lunghezza è <?php echo strlen(trim($text_paragraf_modifed)) ?> con gli spazi bianchi </h5>
    

</body>
</html>
