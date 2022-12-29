<?php

if (
	isset($_POST['email']) &&
	isset($_POST['department'])
) {

	include "../db_conn.php";

	$email = $_POST['email'];
	$department = $_POST['department'];

	// first check the database to make sure 
	// a user does not already exist with the same name and/or email
	$user_check_query = "SELECT * FROM user2 WHERE email='$email' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	$user = mysqli_fetch_assoc($result);


	if ($user['email'] === $email) {
		header("Location: ../index.php?ms=Email already exists");
	} else if (empty($email)) {
		header("Location: ../index.php?ms=Email is required");
		exit;
	} else {

		if (isset($_POST['a'])) {
			$a = "YES";
		} else {
			$a = "NO";
		}
		if (isset($_POST['b'])) {
			$b = "YES";
		} else {
			$b = "NO";
		}
		if (isset($_POST['c'])) {
			$c = "YES";
		} else {
			$c = "NO";
		}
		if (isset($_POST['d'])) {
			$d = "YES";
		} else {
			$d = "NO";
		}
		if (isset($_POST['e'])) {
			$e = "YES";
		} else {
			$e = "NO";
		}
		if (isset($_POST['e'])) {
			$e = "YES";
		} else {
			$e = "NO";
		}



		$sql = "INSERT INTO user2(email,department, a, b, c, d, e)
                VALUES('$email', '$department', '$a', '$b', '$c', '$d', '$e')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			$ms = "Successfully created";
			header("Location: ../index.php?ms=$ms");
			exit;
		} else {
			$ms = "Unknown error occurred";
			header("Location: ../index.php?ms=$ms");
			exit;
		}

	}
} else {
	header("Location: ../index.php");
	exit;
}