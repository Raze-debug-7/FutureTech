<?php
include('functions.php');


if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- font cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .content1 {
            width: 15%;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: grey;
            border-radius: 0px 0px 10px 10px;
            float: right;
        }

        .error1 {
            width: 92%;
            margin: 0px auto;
            padding: 5px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
        }

        .success1 {
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }

        .profile_info1 img {
            display: inline-block;
            width: 40px;
            height: 50px;
            margin: 1px;
            float: left;
        }

        .profile_info1 div {
            display: inline-block;
            margin: 1px;
        }

        .profile_info1:after {
            content: "";
            display: block;
            clear: both;
        }
    </style>
</head>

<body>
 
    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        }
        ;
    }
    ;
    ?>
    <?php include 'header.php'; ?>

    <!-- notification message -->
    <?php if (isset($_SESSION['success'])): ?>
    <div class="error success">
        <h3>
            <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <section class="home" id="home" style="background-image: url(images/ncba6.png); opacity: 1;">

        <div class="content">
            <h3> (TNA) survey questionnaire</h3>
            <p>The training needs assessment survey questionnaire to help us assess the potential areas of
                Relationship Managers(RM) training as we explore to rollout Transactional Banking training
                program</p>
            <a href=" #" class="btn">Fill in yours now</a>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"> <span>Cash management products</span></h1>

        <div class="row">

            <div class="image">
                <img src="images/ncba3.jpeg" alt="">
            </div>

            <div class="content">
                <h3>Wecome to cash management products</h3><br>
                <p>
                    <a href="cash/index.php">Click here to</a> access the questionnaire
                </p>
                <p>Because when you come to NCBA BANK, you are coming home.</p>
                <a href=" #" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <section class="about" id="menu">

        <h1 class="heading"> <span>Trade products</span></h1>

        <div class="row">

            <div class="image">
                <img src="images/ncba5.jpg" alt="">
            </div>

            <div class="content">
                <h3>Welcome to Trade products</h3><br>
                <p>
                    <a href="trade/index.php">Click here to</a> access the questionnaire
                </p>
                <p>Because when you come to NCBA BANK, you are coming home.</p>
                <a href=" #" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <section class="about" id="products">

        <h1 class="heading"> <span>Custody products</span></h1>

        <div class="row">

            <div class="image">
                <img src="images/NCBA1.jpg" alt="">
            </div>

            <div class="content">
                <h3>Wecome to Custody products</h3><br>
                <p>
                    <a href="custody/index.php">Click here to</a> access the questionnaire
                </p>
                <p>Because when you come to NCBA BANK, you are coming home.</p>
                <a href=" #" class="btn">learn more</a>
            </div>

        </div>

    </section>


    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map"
                src="https://maps.google.com/maps?q=upperhill,%20nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" loading="lazy"></iframe>

    </section>

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/ncba2.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Excellence and Commitment</a> <br>


                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/NCBA.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Professionalism and Teamwork</a> <br>


                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/ncba5.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Customer centricity</a> <br>


                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <section class="footer">

        <div class="share">
            <a href="https://www.facebook.com/ncbabank/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/NCBABankKenya" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/ncbabankkenya/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/ncba-group/" class="fab fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCrIGfY1gCXrNjr2KLzQhd3w" class="fab fa-youtube"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#about">Cash Mngt Products</a>
            <a href="#menu">Trade products</a>
            <a href="#products">Custody products</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
            <a href="index.php?logout='1'">Logout</a>
        </div>

        <div class="credit">created by <span>Mr. Ezra</span> | all rights reserved</div>

    </section>

    <script src="js/script.js"></script>

</body>

</html>