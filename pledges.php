<?php
	include 'sqlconnect.php';

	$UserId = $_GET["userid"];

	$result = mysql_query("SELECT * FROM pledges WHERE UserId = $UserId ORDER BY Date DESC");

	header('Content-Type: application/json');
	
	$rows = array();

	while ($row = mysql_fetch_array($result)) {
		$rows[] = $row;
	}

	echo json_encode($rows);

	mysql_free_result($result);
	mysql_close();
?>