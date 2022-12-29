
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
    a {
        text-decoration: none;
        color: brown;
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
    </style>
</head>

<body style="color: white;">
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
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="images/NCBA.jpeg" alt="" style="height:6rem"></a>
                </div>
                <ul class="nav navbar-nav" style="width: 80%;">
                    <li class=" active"><a href="../index.php">Home</a></li>
                    <li><a href=" #about">Cash Management products</a></li>
                    <li><a href="read.php">View choices</a></li>
                    <ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                            <li><a href="../index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                            </li>
                        </ul>
            </div>
        </nav>
    </header>
    <section
        style="background-image: url(images/img.jpg); background-size: contain; opacity: 0.9; font-size: 18px; margin: 20px;">
        <a href="#home">NCBA GROUP PLC</a>
        <form action="php/create.php" method="post">
            <fieldset class="cash">
                <legend style="color: white;">Create:</legend>
                <a href=""><input type="submit" value="Create" style="float: right;"></a>
                <br />
                <mark>
                    <?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
                </mark>
                <div>
                    <label>Email</label>
                    <input type=" text" style="color: black;" name="email">
                  
                </div><br />

                <div>
                    <label>Department</label>
                    <input type="radio" name="department" value="Corporate_banking">
                    <label>Corporate banking</label>

                    <input type="radio" name="department" value="Transactional_banking" checked>
                    <label>Transactional banking</label>
                </div><br />

                <a>Cash products</a>

                <div><br>

                    <div class="right">
                        <a href=" #home">Collection / liquidity Products</a>
                        <div class="checkbox"><label><input type="checkbox" name="a" />Direct Debit
                            </label>
                        </div>
                        <div class=" checkbox"><label><input type="checkbox" name="b" />Standing Orders & Sweeps
                            </label>
                        </div><br />

                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Lipa Na M-pesa</a>
                    <div class="checkbox"><label><input type="checkbox" name="c" />Tills &
                            Paybills
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="d" />Super Agency
                        </label>
                    </div>

                    <div class="checkbox">
                        <label title="Over the counter mobile wallet deposit and withdrawal"><input type="checkbox"
                                name="e" />BranchRetail
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="f" />M-Pesa
                            Holding
                        </label>
                    </div>

                </div>

                <div class="right">
                    <a href="#home">Payment Channels</a>
                    <div class="checkbox"><label><input type="checkbox" name="g" />Internet
                            Banking
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="h" />Open
                            Banking (Payment APIs)
                        </label>
                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Payment Product</a>
                    <div class="checkbox"><label><input type="checkbox" name="i" />Dividend
                            payments
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="j" />Customized Cheque printing
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="k" />Cheque
                            Co-branding
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="l" />Internal
                            Transfers
                        </label>
                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Cash In Transit services</a>
                    <div class="checkbox"><label><input type="checkbox" name="m" />Offsite
                            Cashiering Services
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="n" />Branch
                            Agency Services
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="o" />South Sudan Business via Alpha
                            bank
                        </label>
                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Collection Channels</a>
                    <div class="checkbox"><label><input type="checkbox" name="p" />Cash
                            Deposit Machines
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="q" />Online Cheque Deposit Service
                        </label>
                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Utilities</a>
                    <div class="checkbox"><label><input type="checkbox" name="r" />KPLC
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="s" />Nairobi
                            Water
                        </label>
                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Agency</a>
                    <div class="checkbox"><label><input type="checkbox" name="t" />Post Bank - Deposit &
                            Withdrawal
                            services
                        </label>
                    </div>
                </div>

                <div class="right">
                    <a href="#home">Reconciliation Services</a>
                    <div class="checkbox"><label><input type="checkbox" name="u" />Validation
                            APIs
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="v" />Verification
                            APIs
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="w" />Customized Account Statements
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="x" />Automation
                            of
                            Inward
                            and outward clearing cheque service
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="y" />Check
                            off automation Services
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="z" />Integration
                            Services
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="aa" />Virtual
                            Account Services
                        </label>
                    </div><a href="#home">Statutory Collections</a>
                    <div class="checkbox"><label><input type="checkbox" name="bb" />KRA
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="cc" />NHIF
                        </label>
                    </div>
                    <div class="checkbox"><label><input type="checkbox" name="dd" />Kentrade
                        </label>
                    </div>
                </div><br>

                <div class="right">
                    <a href="#home">Digital Matatu Collection services</a>
                    <div class="checkbox"><label title="Komiut App – book a matatu trip and pay fare via M-Pesa"><input
                                type="checkbox" name="ee">Komiut App
                        </label>
                    </div><br>


                </div>
                <a href=""><input type="submit" value="Create"></a>
                <a href="read.php">View</a>
            </fieldset>
        </form>
    </section>


</body>

</html>