<?php

//POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$emailadres = $_POST['emailadres'];

//DATA IN DATABASE STOPPEN
//1. Verbinding maken met database
$dbc = mysqli_connect('localhost', 'root', 'root', 'msql_db') or die ('Error connecting');
//2. Opdracht (query) schrijven voor de database
$query = "INSERT INTO nieuwsbrief VALUES (0, '$voornaam', '$tussenvoegsel', '$achternaam', '$emailadres')";
//3. Query uitvoeren
$result = mysqli_query($dbc, $query) or die ('Error querying.');
//4. Verbinding verbreken
mysqli_close($dbc);

//BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'De volgende gegevens zijn toegevoegd aan de database: <br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $emailadres . '<br>';
} else {
    echo 'Sorry er iets misgegaan. Probeer het opnieuw';
}