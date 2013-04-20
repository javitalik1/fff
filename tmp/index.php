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
Something is wrong with the XAMPP installation :-(|)
<<<<<<< Updated upstream
branch master1 commit_7
=======
branch master1 commit_5/5
>>>>>>> Stashed changes
