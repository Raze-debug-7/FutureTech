<?php
$fakeTok = "562random";

// include "php/read.php";
if (isset($fakeTok) && $fakeTok = "562random") {
    include "../custody/db_conn.php";

    $sql = "SELECT * FROM user2 ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
} else {
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
    <header style="width: 210%;">
        <nav class=" navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="../images/NCBA.jpeg" alt="" style="height:6rem"></a>
                </div>
                <ul class="nav navbar-nav">
                  
                    <li><a href="#">Custody products</a></li>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Home</a>
                        </li>
                    </ul>
            </div>
        </nav>
    </header>


    <?php if (mysqli_num_rows($result)) { ?>
    <br />
    <mark>
        <?php if (isset($_GET['ms'])) {
            echo $_GET['ms'];
        } ?>
    </mark>
    <a href="export.php" class="btn btn-primary">Export to Excel</a>
    <table>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Department</th>
            <th>Transaction processing and systems</th>
            <th>Account opening and services</th>
            <th>Processing of benefits and expenses</label></th>
            <th>Reporting and compliance</th>
            <th>Information services</th>
       
        </tr>
        <?php
        $id = 0;
        $sql = "SELECT * FROM user2";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
          foreach ($res as $row) {
            $id++;
        ?>
        <?php
        $i = 0;
        while ($users = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $users['email'] ?></td>
            <td><?= $users['department'] ?></td>
            <td><?= $users['a'] ?></td>
            <td><?= $users['b'] ?></td>
            <td><?= $users['c'] ?></td>
            <td><?= $users['d'] ?></td>
            <td><?= $users['e'] ?></td>

            
        </tr>
    <?php }
            } ?>
    
        <?php } ?>
       
    </table><br />

<?php } ?>
   
    <!--    } 
   print function in javascript -->
    <SCRIPT LANGUAGE="JavaScript">
        if (window.print) {
            document.write('<form><input type=button name=print value="Print Page"onClick="window.print()"></form>');
        }
    </script>

</body>

</html>