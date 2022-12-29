<?php 
    if (isset($_GET['id'])) {
    	$id = $_GET['id'];

    	$fakeTok = "562random";

        
        // include "php/read-single.php";
if (isset($fakeTok) && $fakeTok = "562random") {
	include "db_conn.php";

	$sql = "SELECT * FROM users WHERE id=$id";
	$result = mysqli_query($conn, $sql);
}else {
	echo "404!";
	exit;
}




        if (mysqli_num_rows($result) > 0) {
        	$user = mysqli_fetch_assoc($result);
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
    <title>TNA SURVEY</title>
    <style>
    aa {
        text-decoration: none;
        color: #666;
        font-weight: bold;
        margin-left: 5em;
    }

    .create {
        margin-left: 25em;
        font-weight: bold;
    }

    form {
        display: inline-block;
        margin-left: 15em;
        width: 70%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    input {
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: blue;
    }
    </style>
</head>

<body style="background-image: url(images/ncba3.jpeg);">
    <?php  
    
                    if(isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset ($_SESSION['status']);
                        ?>
    <div class=" alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
                         unset($_SESSION['status']);
                    }
                ?>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="images/NCBA.jpeg" alt="" style="height:6rem"></a>
                </div>
                <ul class="nav navbar-nav" style="width: 75%;">
                    <li class=" active"><a href="../index.php">Home</a></li>
                    <li><a href=" #about">Cash Mngt products</a></li>
                    <li><a href="read.php">View choices</a></li>
                    <ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                            <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                            </li>
                        </ul>
            </div>
        </nav>
    </header>
    <form action="php/update.php" method="post"
        style="background-image: url(images/img.jpg); background-size: contain; opacity: 0.7; font-size: 15px; margin: 5em;padding: 10px; color: white;">
        <fieldset>
            <legend>Edit:</legend>
            <br />
            <input type="submit" style="background-color:azure;color:blue;" value="Update">
            <a href="read.php" style="font-size:25px;float: right;color: white;">View</a>
            <mark>
                <?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
            </mark>
            <div>
                <label>Email</label>
                <input type="text" name="email" value="<?= $user['email'] ?>">
            </div><br />


            <input type="text" name="id" value="<?=$user['id']?>" hidden>

           
            <div>
                <label>Department</label>
                <input type="radio" name="department" value="Corporate_banking"
                    <?php echo ($user['department'] == "Corporate_banking")?"checked":"" ?>>
                <label>Corporate_banking</label>

                <input type="radio" name="department" value="Transactional_banking"
                    <?php echo ($user['department'] == "Transactional_banking")?"checked":"" ?>>
                <label>Transactional_banking</label>
            </div><br />


            <div>
                <input type="checkbox" name="a" <?php echo ($user['a'] == "Yes")?"checked":"" ?>>
                <label>Direct Debit</label>
            </div><br />

            <div>
                <input type="checkbox" name="b" <?php echo ($user['b'] == "Yes")?"checked":"" ?>>
                <label>Standing Orders & Sweeps</label>
            </div><br />

            <div>
                <input type="checkbox" name="c" <?php echo ($user['c'] == "Yes")?"checked":"" ?>>
                <label>Tills & Paybills</label>
            </div><br />

            <div>
                <input type="checkbox" name="d" <?php echo ($user['d'] == "Yes")?"checked":"" ?>>
                <label>Super Agency</label>
            </div><br />

            <div>
                <input type="checkbox" name="e" <?php echo ($user['e'] == "Yes")?"checked":"" ?>>
                <label>BranchRetail</label>
            </div><br />

            <div>
                <input type="checkbox" name="f" <?php echo ($user['f'] == "Yes")?"checked":"" ?>>
                <label>M-Pesa Holding</label>
            </div><br />

            <div>
                <input type="checkbox" name="g" <?php echo ($user['g'] == "Yes")?"checked":"" ?>>
                <label>Internet Banking</label>
            </div><br />

            <div>
                <input type="checkbox" name="h" <?php echo ($user['h'] == "Yes")?"checked":"" ?>>
                <label>Open Banking (Payment APIs)</label>
            </div><br />

            <div>
                <input type="checkbox" name="i" <?php echo ($user['i'] == "Yes")?"checked":"" ?>>
                <label>Dividend payments</label>
            </div><br />

            <div>
                <input type="checkbox" name="j" <?php echo ($user['j'] == "Yes")?"checked":"" ?>>
                <label>Customized Cheque printing</label>
            </div><br />

            <div>
                <input type="checkbox" name="k" <?php echo ($user['k'] == "Yes")?"checked":"" ?>>
                <label>Cheque Co-branding</label>
            </div><br />


            <div>
                <input type="checkbox" name="l" <?php echo ($user['l'] == "Yes")?"checked":"" ?>>
                <label>Internal Transfers</label>
            </div><br />

            <div>
                <input type="checkbox" name="m" <?php echo ($user['m'] == "Yes")?"checked":"" ?>>
                <label>Offsite Cashiering Services</label>
            </div><br />


            <div>
                <input type="checkbox" name="n" <?php echo ($user['n'] == "Yes")?"checked":"" ?>>
                <label>Branch Agency Services</label>
            </div><br />

            <div>
                <input type="checkbox" name="o" <?php echo ($user['o'] == "Yes")?"checked":"" ?>>
                <label>South Sudan Business via Alpha bankCash </label>
            </div><br />

            <div>
                <input type="checkbox" name="p" <?php echo ($user['p'] == "Yes")?"checked":"" ?>>
                <label>Cash Deposit MachinesKPLC</label>
            </div><br />

            <div>
                <input type="checkbox" name="q" <?php echo ($user['q'] == "Yes")?"checked":"" ?>>
                <label>Online Cheque Deposit Service</label>
            </div><br />

            <div>
                <input type="checkbox" name="r" <?php echo ($user['r'] == "Yes")?"checked":"" ?>>
                <label>KPLC</label>
            </div><br />

            <div>
                <input type="checkbox" name="s" <?php echo ($user['s'] == "Yes")?"checked":"" ?>>
                <label>Nairobi Water</label>
            </div><br />

            <div>
                <input type="checkbox" name="t" <?php echo ($user['t'] == "Yes")?"checked":"" ?>>
                <label>Post Bank - Deposit & Withdrawal services</label>
            </div><br />


            <div>
                <input type="checkbox" name="u" <?php echo ($user['u'] == "Yes")?"checked":"" ?>>
                <label>Validation APIs</label>
            </div><br />


            <div>
                <input type="checkbox" name="v" <?php echo ($user['v'] == "Yes")?"checked":"" ?>>
                <label>Verification APIs</label>
            </div><br />

            <div>
                <input type="checkbox" name="w" <?php echo ($user['w'] == "Yes")?"checked":"" ?>>
                <label>Customized Account Statements</label>
            </div><br />

            <div>
                <input type="checkbox" name="x" <?php echo ($user['x'] == "Yes")?"checked":"" ?>>
                <label>Automation of Inward and outward clearing cheque service</label>
            </div><br />

            <div>
                <input type="checkbox" name="y" <?php echo ($user['y'] == "Yes")?"checked":"" ?>>
                <label>Check off
                    automation
                    Services</label>
            </div><br />
            <div>
                <input type="checkbox" name="z" <?php echo ($user['z'] == "Yes")?"checked":"" ?>>
                <label>Integration Services</label>
            </div><br />
            <div>
                <input type="checkbox" name="aa" <?php echo ($user['aa'] == "Yes")?"checked":"" ?>>
                <label>Virtual Account Services</label>
            </div><br />
            <div>
                <input type="checkbox" name="bb" <?php echo ($user['bb'] == "Yes")?"checked":"" ?>>
                <label>KRA</label>
            </div><br />
            <div>
                <input type="checkbox" name="cc" <?php echo ($user['cc'] == "Yes")?"checked":"" ?>>
                <label>NHIF</label>
            </div><br />

            <div>
                <input type="checkbox" name="dd" <?php echo ($user['dd'] == "Yes")?"checked":"" ?>>
                <label>Kentrade</label>
            </div><br />
            <div>
                <input type="checkbox" name="ee" <?php echo ($user['ee'] == "Yes")?"checked":"" ?>>
                <label>Komiut App</label>
            </div><br />


            <input type="submit" style="background-color:azure;color:blue;" value="Update">
            <a href="read.php" style="font-size:25px;float: right;">View</a>
        </fieldset>
    </form>
</body>

</html>

<?php 
	}else {
	    header("Location: read.php");
	    exit;
	} 

}else {
    header("Location: read.php");
    exit;
} 
?>