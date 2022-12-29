<?php 
$fakeTok = "562random";

// include "php/read.php";
if (isset($fakeTok) && $fakeTok = "562random") {
	include "db_conn.php";

	$sql = "SELECT * FROM users ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
}else {
	echo "404!";
	exit;
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>View TNA-SURVEY</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <style>
    table,
    tr,
    th,
    td {
        border: 3px groove #aaa;
        border-collapse: collapse;
        padding: 5px;
        margin: auto;
        width: 900px;
    }

    th {
        background: #eee
    }

    a {
        text-decoration: none;
        color: #666;
        font-weight: bold;
        margin-left: 5em;
        font-size: 15px;
    }

    .create {
        margin-left: 18em;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php  
    
     if(isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset ($_SESSION['status']);
                        ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
                         unset($_SESSION['status']);
                    }
                ?>
    <header style="width: 210%;">
        <nav class=" navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="images/NCBA.jpeg" alt="" style="height:6rem"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class=" active"><a href="../index.php">Home</a></li>
                    <li><a href="#about">Cash Mngt products</a></li>
                    <li><a href="index.php">Create choices</a></li>
                    <ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../index.php?logout='1'" style="color: red;font-size: 15px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                            </li>
                        </ul>
            </div>
        </nav>
    </header>


    <?php if(mysqli_num_rows($result)){ ?>
    <br />
    <mark>
        <?php if (isset($_GET['ms'])) {
				echo $_GET['ms'];
			} ?>
    </mark>
    <table>
        <tr class="noExl">
            <th>index</th>
            <th>Email</th>
            <th>Department</th>
            <th>Direct Debit </th>
            <th>Standing Orders & Sweeps </th>
            <th>Tills & Paybills</th>
            <th>Super Agency</th>
            <th>BranchRetail</th>
            <th>M-Pesa Holding</th>
            <th>Internet Banking</th>
            <th>Open Banking (Payment APIs) </th>
            <th>Dividend payments</th>
            <th>Customized Cheque printing</th>
            <th>Cheque Co-branding</th>
            <th>Internal Transfers</th>
            <th>Offsite Cashiering Services </th>
            <th>Branch Agency Services </th>
            <th title="South Sudan Business via Alpha bank">SSBvAB</th>
            <th>Cash Deposit Machines </th>
            <th>Online Cheque Deposit Service </th>
            <th>KPLC</th>
            <th>Nairobi Water </th>
            <th>Post Bank - Deposit & Withdrawal services</th>
            <th>Validation APIs</th>
            <th>Verification APIs</th>
            <th>Customized Account Statements</th>
            <th title="Automation of Inward and outward clearing cheque service">"AIOCCS"</th>
            <th>Check off automation Services </th>
            <th>Integration Services </th>
            <th>Virtual Account Services </th>
            <th>KRA</th>
            <th>NHIF</th>
            <th>Kentrade</th>
            <th>"Komiut" App</th>
            <th>Action</th>
        </tr>
        <?php 
            $i = 0;
            while ($users = mysqli_fetch_assoc($result)) {
            $i++;
		 ?>
        <tr class="noExl">
            <td><?=$i?></td>
            <td><?=$users['email']?></td>
            <td><?=$users['department']?></td>
            <td><?=$users['a']?></td>
            <td><?=$users['b']?></td>
            <td><?=$users['c']?></td>
            <td><?=$users['d']?></td>
            <td><?=$users['e']?></td>
            <td><?=$users['f']?></td>
            <td><?=$users['g']?></td>
            <td><?=$users['h']?></td>
            <td><?=$users['i']?></td>
            <td><?=$users['j']?></td>
            <td><?=$users['k']?></td>
            <td><?=$users['l']?></td>
            <td><?=$users['m']?></td>
            <td><?=$users['n']?></td>
            <td><?=$users['o']?></td>
            <td><?=$users['p']?></td>
            <td><?=$users['q']?></td>
            <td><?=$users['r']?></td>
            <td><?=$users['s']?></td>
            <td><?=$users['t']?></td>
            <td><?=$users['u']?></td>
            <td><?=$users['v']?></td>
            <td><?=$users['w']?></td>
            <td><?=$users['x']?></td>
            <td><?=$users['y']?></td>
            <td><?=$users['z']?></td>
            <td><?=$users['aa']?></td>
            <td><?=$users['bb']?></td>
            <td><?=$users['cc']?></td>
            <td><?=$users['dd']?></td>
            <td><?=$users['ee']?></td>

            <td>
                <a href="update.php?id=<?=$users['id']?>">Edit</a>
                <a href="php/delete.php?id=<?=$users['id']?>">Delete</a>
            </td>
        </tr>

        <?php } ?>
    </table><br />
    
    <a href="index.php">Create</a>
    <?php }else{ ?>
    <h1>Empty!</h1>
    <a href="index.php">Create</a>
    <?php } ?>

    <!-- print function in javascript -->
    <SCRIPT LANGUAGE="JavaScript">
    if (window.print) {
        document.write('<form><input type=button name=print value="Print Page"onClick="window.print()"></form>');
    }
    </script>




</body>

</html>