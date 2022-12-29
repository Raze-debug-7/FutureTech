<header class="header" >

    <a href="https://ke.ncbagroup.com/for-corporates/" class="logo">
        <img src="images/NCBA.jpeg" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">Cash Mngt products</a>
        <a href="#menu">Trade Products</a>
        <a href="#products">Custody products</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>

    </nav>


    <div id="menu-btn" class="fas fa-bars"></div>

  
    
    <div class="content1" class="icons">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])): ?>
        <div class="error1, success1">
            <h3>
                <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>
        <!-- logged in user information -->
        <div class="profile_info1" style="height: 1em;">
            <img src="images/user_profile.png" style="height: 3rem;">
                <?php if (isset($_SESSION['user'])): ?>
                <strong style="font-size: 15px;"><?php echo $_SESSION['user']['username']; ?></strong>
    <br>
                <small>
                    <i style="color: #B0C4DE; font-size: 15px; width: 50px;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    <br>
                    <a href="index.php?logout='1'" style="color: red;font-size: 15px;">logout</a>
                </small>
    
    
            <div>
                <?php endif ?>
            </div>
        </div>
    </div>



</header>