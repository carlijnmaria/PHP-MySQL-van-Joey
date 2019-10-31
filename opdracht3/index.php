<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 31/10/2019
 * Time: 10:46
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
</head>
<body>
<h2>Komt ie he</h2>
<?php

    /** variabelen */

    $voornaam = 'Carlijn';
    $plaats = 'Almere';
    $leeftijd = '18';
    $lengte ='155';
    $color = 'green';

    /** if statements */

    if ($leeftijd >= 18 ){
        echo 'Je bent oud genoeg om te drinken.';
    }
    else {
        echo 'Je bent te jong om te drinken.';
    }

echo '<br>';

   if ($lengte >= 155){
        echo 'Je bent lang genoeg voor deze attractie!';
   }
   else {
       echo 'Sorry je bent niet lang genoeg om in deze attractie te mogen.';
   }

echo '<br>';

   /** variabelen in een string met concatenatie puntjes */

    echo 'Hi ik ben ' .$voornaam.' en ik ben '.$leeftijd. ' jaar oud en ik woon in ' .$plaats. '.';

echo '<br>';

/** Switch statement */

    switch ($color) {

    case "red":
    echo "Hello";
    break;
    case "green":
    echo "Welcome";
    break;
    }

echo '<br>';

/** for loops */

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

?>
</body>
</html>
