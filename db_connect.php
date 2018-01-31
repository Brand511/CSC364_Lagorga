<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/clsDatabase.php');

$db = new clsDatabase();


if (! $db->connect()) {
	echo 'There was an error: ' . $db->errorNumber . ' Message: ' . $db->errorMessage;
	die();
}

echo 'We connected <br>';

$db->close();

