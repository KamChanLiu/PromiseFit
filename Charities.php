<?php
	include 'sqlconnect.php';

	$result = mysql_query("SELECT * FROM Charities");

	header('Content-Type: application/json');
	
	$rows = array();

	while ($row = mysql_fetch_array($result)) {
		$rows[] = $row;
	}

	echo json_encode($rows);

	mysql_free_result($result);
	mysql_close();
?>