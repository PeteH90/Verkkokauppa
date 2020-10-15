<?php
// muodostetaan yhteys tietokantaan
try {
 $yhteys = new PDO("mysql:host=localhost;dbname=t9hape00", "t9hape00",
"");
} catch (PDOException $e) {
 die("VIRHE: " . $e->getMessage());
}
// virheenkäsittely: virheet aiheuttavat poikkeuksen
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// merkistö: käytetään latin1-merkistöä; toinen yleinen vaihtoehto on utf8.
$yhteys->exec("SET NAMES latin1");

$kysely = $yhteys->prepare("CALL LisaaOstos(?, ?, ?, ?)");

$kysely->execute(array($_POST["etun"], $_POST["sukun"], $_POST["tu"], $_POST["my"] ));

//Yhteyden poistaminen. Ei välttämättä tarvita
$yhteys = null;