<?php


$fp = stream_socket_client("tcp://localhost:1110", $errno, $errstr);
if (!$fp) {
    echo "ERROR: $errno - $errstr<br />\n";
} else {
    fwrite($fp, "CONSULTA_DATA");
    echo fread($fp, 1024);
    fclose($fp);
}


/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = 'test@gmail.com';
$to = 'ocoronel31@gmail.com';
$subject = 'Asunto';
$message = 'Mensaje';
$headers = 'From: '.$from;
mail($to, $subject, $message, $headers);

echo "El mensaje fue enviado.";
*/

?>