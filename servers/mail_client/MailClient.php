<?php

require_once __DIR__.'/MailSend.php';

class MailClient
{

	private $mailbox = '{'.General::HOST.':'.General::PORT_TO_READ.'/imap/ssl/novalidate-cert}INBOX';

	public function getResponse()
	{
		$response = '';
		$oMailSend = new MailSend;

		$oMailSend->send('testups18@gmail.com', 'Alguien', 'CONSULTA_DATA', 'Hola mundo desde el cliente');

		$is_get_response = false;

		while (true) {
			$conn = imap_open($this->mailbox, General::USERNAME, General::PASSWORD);
			$msg_cnt = imap_num_msg($conn);
			for($i = $msg_cnt; $i >= 1; $i--) {
				$header = imap_headerinfo($conn, $i);
				$subject = trim($header->subject);

				if ($subject == 'ENVIA_RESPONSE') {
					$mail_message = trim(imap_fetchbody($conn,$i, 2));
					imap_delete($conn, $i);
					$response = $mail_message;
					$is_get_response = true;
				}

				break;
			}

			if ($is_get_response) {
				break;
			}
		}
		return $response;
	}

}

?>