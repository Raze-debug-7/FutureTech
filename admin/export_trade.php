<?php

// Include Database connection
include "../trade/db_conn.php";
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");

$user3 = [
    [
        'Id',
        'Email',
        'Department',
        'LC Issuance',
            'Import Bills for Collection',
            'Import Finance',
            'Import Invoice Financing',
            'Shipping Guarantee',
            'Bankers Acceptance',
            'Pre-shipment Finance',
            'Warehouse Financing',
            'Letter of Indemnity',
            'Borrowing Base Trade Loan',
            'Credit Bills Negotiated - Clean or Discrepant',
            'Export Bills for Collection',
            'Export Bills Discounted',
            'Export Invoice Financing',
            'Trade Receivables Discounting',
            'Bill Discounting (against Buyer Risk)',
            'LC/SBLC Advising',
            'Guarantees & Standby LC',
            'LC Confirmation',
            'Bill Avalisation',
            'Supplier Finance',
            'Buyer/Distributor Finance'
    ]
];

$id = 0;
$sql = "SELECT * FROM user3";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    foreach ($res as $row) {
        $id++;
        $user3 = array_merge($user3, array(array($id, $row['email'], $row['department'], $row['a'], $row['b'], $row['c'], $row['d'], $row['e'], $row['f'], $row['g'], $row['h'], $row['i'], $row['j'], $row['k'], $row['l'], $row['m'], $row['n'], $row['o'], $row['p'], $row['q'], $row['r'], $row['s'], $row['t'], $row['u'], $row['v'])));
    }
}

$xlsx = SimpleXLSXGen::fromArray($user3);
$xlsx->downloadAs('Trade.xlsx'); // This will download the file to your local system

// $xlsx->saveAs('Trade.xlsx'); // This will save the file to your server

echo "<pre>";
print_r($user3);