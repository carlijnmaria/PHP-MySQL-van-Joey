<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 01/11/2019
 * Time: 11:24
 */


//connectie maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'mijnschool') or die ('Error connecting.');

//query schrijven
$query = "SELECT * FROM klasgenoten";

//query uitvoeren
$result = mysqli_query($dbc, $query) or die ('Error querying.');

//regel voor regel in beeld brengen
while ($row = mysqli_fetch_array($result)){
    echo $row['klasgenoot_id']. ' / '. $row['voornaam']. ' / ' . $row['tussenvoegsel']. ' / '. $row['achternaam']. '<br>';
}
?>