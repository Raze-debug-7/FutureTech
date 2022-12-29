<?php

if (isset($fakeTok) && $fakeTok = "562random") {
	include "db_conn.php";

	$sql = "SELECT * FROM user2 ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
} else {
	echo "404!";
	exit;
}