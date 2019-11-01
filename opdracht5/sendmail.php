<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 01/11/2019
 * Time: 09:27
 */

//mail variabelen.
$to = 'carlijndenhartog@hotmail.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = 'From: ' . $_POST['from'];

//mail versturen
mail($to, $subject, $message, $header) or die ('Error mailing. Could not send your email.');

//bevestiging voor de gebruiker
echo 'Uw email is verzonden.';
?>

