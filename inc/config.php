<?php

require_once "parser-php-version.php";

session_start();
mysql_connect("localhost", "root", "");
mysql_select_db("sicatering");

// settings
$url = "";
$title = "Catering Allen";
$no = 1;

function alert($command)
{
	echo "<script>alert('" . $command . "');</script>";
}
function redir($command)
{
	echo "<script>document.location='" . $command . "';</script>";
}
function validate_admin_not_login($command)
{
	if (empty($_SESSION['iam_admin'])) {
		redir($command);
	}
}
