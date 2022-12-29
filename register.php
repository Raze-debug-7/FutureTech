<?php include('functions.php') ?>


<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/regi.css" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
        input {
            color: black;
        }
        
.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
    </style>

</head>

<body>



<div class="hova">



    <div class="form-container">

        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            <h3>register now</h3>
<div class="input-group">
    <label>Username</label>
    <input type="text" name="username" class="box" value="<?php echo $username; ?>">

</div>
<div class="input-group">
    <label>Email</label>
    <input type="email" name="email" class="box" value="<?php echo $email; ?>">
</div>
<div class="input-group">
    <label>Password</label>
    <input type="password" class="box" name="password_1">
</div>
<div class="input-group">
    <label>Confirm password</label>
    <input type="password" class="box" name="password_2">
</div>
            <input type="submit" name="register_btn" class="btn" value="register now">
            <p>already have an account? <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsplogin
                    now</a></p>
        </form>

    </div>

</div>


    <!-- <div class="header">
        <h2>Register</h2>
    </div> 
    <form method="post" action="register.php">
       
            <?php 
             echo display_error(); 
            ?>
            
       
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
            
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form> -->
</body>

</html>