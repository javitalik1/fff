<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/xampp/');
	exit;
?>
<<<<<<< HEAD
Something is wrong with the XAMPP installation :-(|) :-(|) :-(|)
=======
Something is wrong with the XAMPP installation :-(
>>>>>>> 5d19ab8... refs #9962
