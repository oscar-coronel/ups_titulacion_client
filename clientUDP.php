<?php

$fp = stream_socket_client("udp://localhost:1113", $errno, $errstr);
if (!$fp) {
    echo "ERROR: $errno - $errstr<br />\n";
} else {
    fwrite($fp, "CONSULTA_DATA");
    echo fread($fp, 1024);
    fclose($fp);
}

?>