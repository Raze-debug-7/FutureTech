<?php

// Include Database connection
include "../custody/db_conn.php";
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");

$user2 = [
  ['Id', 'Email', 'Department', 'Transaction processing and systems', 'Account opening and services', 'Processing of benefits and expenses', 'Reporting and compliance', 'Information services']
];

$id = 0;
$sql = "SELECT * FROM user2";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
   $user2 = array_merge($user2, array(array($id, $row['email'], $row['department'], $row['a'], $row['b'], $row['c'], $row['d'], $row['e'])));
  }
}

$xlsx = SimpleXLSXGen::fromArray($user2);
$xlsx->downloadAs('custody.xlsx'); // This will download the file to your local system

// $xlsx->saveAs('user2.xlsx'); // This will save the file to your server

echo "<pre>";
print_r($user2);