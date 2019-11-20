<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Beheren</title>
</head>
<body>


<?php

// 1. Connectie maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'msql_db') or die ('Error connecting');

// 2. Kijken in de database en alle emailadressen tevoorschijn halen
$query = "SELECT * FROM nieuwsbrief";
$result = mysqli_query($dbc, $query) or die ('Error querying');


echo '<table>';

// 3. Loopje waarin alle emailadressen in beeld worden gebracht
while ($row = mysqli_fetch_array($result)) {

    $id = $row['id'];
    $voornaam = $row['voornaam'];
    $tussenvoegsel = $row['tussenvoegsel'];
    $achternaam = $row['achternaam'];
    $emailadres = $row['emailadres'];


    echo '<tr>';
        echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td><td>$emailadres</td>";
        echo '<td>';
            echo '<a href="delete.php?id=' . $id . '">DELETE</a>';
        echo '</td>';
        echo '<td>';
            echo '<a href="edit.php?id=' . $id . '">EDIT</a>';
        echo '</td>';
    echo '</tr>';
}

echo '</table>';


?>

</body>
</html>