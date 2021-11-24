<?php

class TCPClient
{
	private $PROTOCOL = 'tcp';
	private $HOST = 'localhost';
	private $PORT = 1110;

	private $fp;
	private $errno;
	private $errstr;

	public function __construct()
	{
		$this->fp = stream_socket_client("$this->PROTOCOL://$this->HOST:$this->PORT", $this->errno, $this->errstr);
	}

	public function getResponse()
	{
		$response = '';
		if (!$this->fp) {
		    echo "ERROR: $this->errno - $this->errstr<br />\n";
		} else {
		    fwrite($this->fp, "CONSULTA_DATA");
		    $response = fread($this->fp, 1024);
		    fclose($this->fp);
		}
		return $response;
	}

}

?>