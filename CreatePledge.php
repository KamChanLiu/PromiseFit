<<<<<<< HEAD
<?php
	$conn = mysqli_connect("localhost", "root", "", "promisefit");
	
	$userid = $_POST["userid"];
	$amount = $_POST["amount"];
	$goodcharityid = $_POST["goodcharityid"];
	$badcharityid = $_POST["badcharityid"];

	$sql = "INSERT INTO pledges (UserId, Amount, GoodCharityId, BadCharityId, Date, Complete) VALUES ($userid, $amount, $goodcharityid, $badcharityid, NOW(), 0)";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));
=======
<?php
	$conn = mysqli_connect("localhost", "root", "", "promisefit");
	
	$userid = $_POST["userid"];
	$amount = $_POST["amount"];
	$goodcharityid = $_POST["goodcharityid"];
	$badcharityid = $_POST["badcharityid"];

	$sql = "INSERT INTO pledges (UserId, Amount, GoodCharityId, BadCharityId, Date, Complete) VALUES ($userid, $amount, $goodcharityid, $badcharityid, NOW(), 0)";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));
>>>>>>> b8313d417e088eb74d71847d2881e6c80f025e66
?>