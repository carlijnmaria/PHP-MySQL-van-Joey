<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 31/10/2019
 * Time: 13:31
 */


$voornaam = $_POST['voornaam'];
echo 'Jouw naam is ' .$voornaam. '!';

echo '<br>';

$achternaam = $_POST['achternaam'];
echo 'En jouw achternaam is ' .$achternaam. '!';

echo '<br>';

$woonplaats = $_POST['woonplaats'];
echo 'Wat leuk dat je woont in ' .$woonplaats. '!';

//The advanced exercise
//if ($woonplaats == 'Almere'){
//    echo ' Ik woon ook in Almere!';
//}

switch ($woonplaats) {

    case "Almere":
        echo " Wow daar woon ik ook!";
        break;
    case "Lelystad":
        echo " Oh wat leuk!";
        break;
    case "Amsterdam":
        echo " HUP AJAX!";
        break;
    case "Utrecht":
        echo " Hoe kom ik in u-trecht ;)";
        break;
    case "Rotterdam":
        echo " Gecondoleerd";
        break;
    case "Groningen":
        echo " CO2 who";
        break;
    default:
        echo " Super!";
}
?>


