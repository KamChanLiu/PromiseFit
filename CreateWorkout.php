<?php
	$conn = mysqli_connect("localhost", "root", "", "promisefit");
	
	$userid = $_POST["userid"];
	$workout = $_POST["workout"];
	$time = $_POST["time"];

	$sql = "INSERT INTO workouts (UserId, Workout, Date, Time, Comments) VALUES ($userid, '$workout', NOW(), $time, '')";

	echo $sql;

	

	mysqli_query($conn, $sql) or die(mysqli_error($conn));;
?>