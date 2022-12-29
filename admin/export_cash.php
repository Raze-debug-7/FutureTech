<?php

// Include Database connection
include "../cash/db_conn.php";
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");

$users = [
  [
    'Id',
    'Email',
    'Department',
    'Direct Debit',
     'Standing Orders & Sweeps',
      'Tills & Paybills',
            'Super Agency',
            'BranchRetail',
            'M-Pesa Holding',
            'Internet Banking',
            'Open Banking (Payment APIs) ',
            'Dividend payments',
            'Customized Cheque printing',
            'Cheque Co-branding',
            'Internal Transfers',
            'Offsite Cashiering Services ',
            'Branch Agency Services ',
            'SSBvAB',
            'Cash Deposit Machines',
            'Online Cheque Deposit Service',
            'KPLC',
            'Nairobi Water ',
            'Post Bank - Deposit & Withdrawal services',
            'Validation APIs',
            'Verification APIs',
            'Customized Account Statements',
            'Automation of Inward and outward clearing cheque service">"AIOCCS"',
            'Check off automation Services',
            'Integration Services',
            'Virtual Account Services',
            'KRA',
            'NHIF',
            'Kentrade',
            'Komiut App'      
  ]
];

$id = 0;
$sql = "SELECT * FROM users";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
    $users = array_merge($users, array(array($id, $row['email'], $row['department'], $row['a'], $row['b'], $row['c'], $row['d'], $row['e'], $row['f'], $row['g'], $row['h'], $row['i'], $row['j'], $row['k'], $row['l'], $row['m'], $row['n'], $row['o'], $row['p'], $row['q'], $row['r'], $row['s'], $row['t'], $row['u'], $row['v'], $row['w'], $row['x'], $row['y'], $row['z'], $row['aa'], $row['bb'], $row['cc'], $row['dd'], $row['ee'])));
  }
}

$xlsx = SimpleXLSXGen::fromArray($users);
$xlsx->downloadAs('cash.xlsx'); // This will download the file to your local system

// $xlsx->saveAs('cash.xlsx'); // This will save the file to your server

echo "<pre>";
print_r($users);