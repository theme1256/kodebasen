<?php
	session_start();

	if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == "http"){
		if(!headers_sent()){
			header("Status: 301 Moved Permanently");
			header(sprintf(
				'Location: https://%s%s',
				$_SERVER['HTTP_HOST'],
				$_SERVER['REQUEST_URI']
			));
			exit();
		}
	}
?>