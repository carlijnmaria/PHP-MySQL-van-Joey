<?php

// 0. Uitlezen van de POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. Connectie maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'msql_db') or die ('Error connecting');

// 2. Kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT emailadres FROM nieuwsbrief";
$result = mysqli_query($dbc, $query) or die ('Error querying');

// 3. Loopje waarin een bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar: ' . $row['emailadres'] . '<br>';

    // Variabelen voor de mail
    $to = $row['emailadres'];
    $headers = 'From: carlijndenhartog@gmail.com';

    // Mail verzenden
    mail($to, $subject, $message, $headers);
}

echo 'Klaar met verzenden.';
