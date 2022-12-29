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

    if (isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
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
                    <li><a href="#">Custody products</a></li>
                    <li><a href="read.php">View choices</a></li>
                    <ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
                            <li><a href="../index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span>
                                    Logout</a>
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

                <div><br>
                    <div class="right">

                        <!-- <a href=" #home">Topic</a> -->
                        <div class="checkbox"><label><input type="checkbox" name="a" />Transaction processing and
                                systems
                            </label>
                        </div><br>
                        <div class=" checkbox"><label><input type="checkbox" name="b" />Account opening and services
                            </label>
                        </div><br />

                        <div class="checkbox"><label><input type="checkbox" name="c" />Processing of benefits and
                                expenses
                            </label>
                        </div><br>
                        <div class="checkbox"><label><input type="checkbox" name="d" />Reporting and compliance
                            </label>
                        </div><br>

                        <div class="checkbox">
                            <label title="Over the counter mobile wallet deposit and withdrawal"><input type="checkbox"
                                    name="e" />Information services
                            </label>
                        </div><br </div>
                        <a href=""><input type="submit" value="Create"></a>
                        <a href="read.php">View</a>
            </fieldset>
        </form>
    </section>


</body>

</html>