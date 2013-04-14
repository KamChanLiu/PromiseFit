<?php
	$conn = mysqli_connect("localhost", "root", "", "promisefit");
	
	$userid = $_POST["userid"];
	$amount = $_POST["amount"];
	$goodcharityid = $_POST["goodcharityid"];
	$badcharityid = $_POST["badcharityid"];

	$sql = "INSERT INTO pledges (UserId, Amount, GoodCharityId, BadCharityId, Date, Complete) VALUES ($userid, $amount, $goodcharityid, $badcharityid, NOW(), 0)";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>