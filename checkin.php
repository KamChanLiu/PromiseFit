<?php
	include 'sqlconnect.php';

	$UserId = $_GET["userid"];

	$result = mysql_query("SELECT PLEDGES.Frequency AS Pledges, (SELECT COUNT(*) FROM workouts WHERE UserId = $UserId AND pledges.Date >= DATE_ADD(NOW(), INTERVAL -7 DAY)) AS Workouts, PLEDGES.Amount FROM pledges WHERE pledges.UserId = $UserId AND pledges.Date >= DATE_ADD(NOW(), INTERVAL -7 DAY) ORDER BY pledges.Date DESC LIMIT 1"); 

	header('Content-Type: application/json');
	
	$rows = array();

	while ($row = mysql_fetch_array($result)) {
		$rows[] = $row;
	}

	echo json_encode($rows);

	mysql_free_result($result);
	mysql_close();
?>