<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/config.inc.php");
      require($_SERVER['DOCUMENT_ROOT'] . "/static/conn.php");

if(isset($_SESSION['siteusername'])) {
	$_SESSION = [];
	session_destroy();
}
header("Location: /");
if(george_floyd) { die(); }

Boom.. Killed georgr floyd
