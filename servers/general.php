<?php

require_once __DIR__.'/tcp_client/TCPClient.php';
require_once __DIR__.'/mail_client/MailClient.php';

header('Content-Type: application/json');

switch ($_GET['op']) {
	case 'getInfoTCPServer':
		$oTcpClient = new TCPClient;
		$response = $oTcpClient->getResponse();
		echo $response;
		break;

	case 'getInfoMailServer':
		$oMailClient = new MailClient;
		$response = $oMailClient->getResponse();
		echo $response;
		break;

	default:
		# code...
		break;
}



?>