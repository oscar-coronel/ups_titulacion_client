<?php

$host = 'localhost';
$port = 3000;

set_time_limit(0);

// Creación del socket
$oSocket = socket_create(AF_INET, SOCK_STREAM, 0) or die('No se puede crear el socket');

// Conexión al servidor
$oResult = socket_connect($oSocket, $host, $port) or die('No se puede conectar al servidor');

$oPeticion = 'CONSULTA_DATA';

socket_write($oSocket, $oPeticion, strlen($oPeticion)) or die('No se puede enviar la data al servidor');

$newResult = socket_read($oSocket, 1024) or die('No se puede leer la respuesta');

echo "RESPUESTA:\n";
echo $newResult;

socket_close($oSocket);

?>