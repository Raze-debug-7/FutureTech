<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>



<div class="main" style="background-image: url(images/ncba3.jpeg); opacity: 0.8;">
    <div class=" navbar">
        <div class="icon">
            <h2 class="logo">NCBA GROUP PLC</h2>
        </div>
    </div>
    <div class="content">
        <h1>TNA Questionnaire<br><span>Survey</span><br>NCBA</h1>
        <p class="par">Welcome to TNA survey questionnaire .<br>Kindly fill in where you require training.
            Welcome.<br>Your participation will be highly appreciated<br>Continue working with us. Thank you.
        </p>
        <button class="cn"><a href="#">GO FOR IT</a></button>


        <div class="form">
            <h2>LOGIN</h2><br>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group">

                    <input type="text" name="username" required placeholder="Enter Username">
                </div>
                <!-- <div class="input-group">

                    <input type="text" name="email" required placeholder="Enter Email">
                </div> -->
                <div class="input-group">

                    <input type="password" name="password" required placeholder="Enter password">
                </div>

                <button type="submit" class="btn" name="login_btn">Login</button>

                <p>

                    don't have an account? <a href="register.php">Sign in</a>
                </p>
            </form>
    
    </form> 
</body>

</html>