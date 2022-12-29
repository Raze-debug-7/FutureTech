<?php

if (
	isset($_POST['email']) &&
	isset($_POST['department'])
) {

	include "../db_conn.php";

	$email = $_POST['email'];
	$department = $_POST['department'];

	if (empty($email)) {
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
		if (isset($_POST['f'])) {
			$f = "YES";
		} else {
			$f = "NO";
		}
		if (isset($_POST['g'])) {
			$g = "YES";
		} else {
			$g = "NO";
		}
		if (isset($_POST['h'])) {
			$h = "YES";
		} else {
			$h = "NO";
		}
		if (isset($_POST['i'])) {
			$i = "YES";
		} else {
			$i = "NO";
		}
		if (isset($_POST['j'])) {
			$j = "YES";
		} else {
			$j = "NO";
		}
		if (isset($_POST['k'])) {
			$k = "YES";
		} else {
			$k = "NO";
		}
		if (isset($_POST['l'])) {
			$l = "YES";
		} else {
			$l = "NO";
		}
		if (isset($_POST['m'])) {
			$m = "YES";
		} else {
			$m = "NO";
		}
		if (isset($_POST['n'])) {
			$n = "YES";
		} else {
			$n = "NO";
		}
		if (isset($_POST['o'])) {
			$o = "YES";
		} else {
			$o = "NO";
		}
		if (isset($_POST['p'])) {
			$p = "YES";
		} else {
			$p = "NO";
		}
		if (isset($_POST['q'])) {
			$q = "YES";
		} else {
			$q = "NO";
		}
		if (isset($_POST['r'])) {
			$r = "YES";
		} else {
			$r = "NO";
		}
		if (isset($_POST['s'])) {
			$s = "YES";
		} else {
			$s = "NO";
		}
		if (isset($_POST['t'])) {
			$t = "YES";
		} else {
			$t = "NO";
		}
		if (isset($_POST['u'])) {
			$u = "YES";
		} else {
			$u = "NO";
		}
		if (isset($_POST['v'])) {
			$v = "YES";
		} else {
			$v = "NO";
		}
		if (isset($_POST['w'])) {
			$w = "YES";
		} else {
			$w = "NO";
		}
		if (isset($_POST['x'])) {
			$x = "YES";
		} else {
			$x = "NO";
		}
		if (isset($_POST['y'])) {
			$y = "YES";
		} else {
			$y = "NO";
		}
		if (isset($_POST['z'])) {
			$z = "YES";
		} else {
			$z = "NO";
		}
		if (isset($_POST['aa'])) {
			$aa = "YES";
		} else {
			$aa = "NO";
		}
		if (isset($_POST['bb'])) {
			$bb = "YES";
		} else {
			$bb = "NO";
		}
		if (isset($_POST['cc'])) {
			$cc = "YES";
		} else {
			$cc = "NO";
		}
		if (isset($_POST['dd'])) {
			$dd = "YES";
		} else {
			$dd = "NO";
		}
		if (isset($_POST['ee'])) {
			$ee = "YES";
		} else {
			$ee = "NO";
		}


		$sql = "INSERT INTO user2(email, department, a, b, c, d, e)
                VALUES('$email','$department', '$a', '$b', '$c', '$d', '$e')";
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