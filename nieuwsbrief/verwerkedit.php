<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$emailadres = $_GET['emailadres'];

$id = $_GET['id'];
$dbc = mysqli_connect('localhost', 'root', 'root', 'msql_db') or die ('Error connecting');
$query ="UPDATE nieuwsbrief ";
$query .= "SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', emailadres = '$emailadres'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($dbc, $query) or die ('Error updating');
header("Location: beheren.php");
