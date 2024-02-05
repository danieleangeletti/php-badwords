<?php
$text = $_GET["text"];
$bad_word = $_GET["bad-word"];

echo "Testo: ".$text." Lunghezza: ".strlen($text);
echo "<br>";

$new_text = str_replace($bad_word, "***", $text);
echo "Testo con parola cattiva: ".$new_text." Lunghezza: ".strlen($new_text);
?>