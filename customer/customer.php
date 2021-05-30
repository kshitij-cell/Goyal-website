<?php $sharedfolder = '../shared/' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/homehead.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/footer.css">
    <style>
        div#third{
            margin-bottom: 0px;
            padding-bottom: 21px;
        }
    </style>
    <title>Customer</title>
</head>
<body>
<header>
    <?php require_once '../shared/headmenu.php' ?>
</header>

    <div id="love" class="home-intro">
        <h3>customers we love</h3>
        <p>Read about how Learnyst has helped teaching<br> business establish and succeed online. </p>
        <div id="like">
            <img src="Images/likebunch.png" class="right slide-in" alt="Like Bunch">
        </div>
    </div>

    <div id="story">
        <h2 class="left slide-in">customer stories</h2>
        <p class="right slide-in">Our customer stories about successfully connecting with thousand of student using Learnyst.</p>

        <div class="row">
            <div class="detail fade-in">
                <img src="../Images/cehrasquare.png" alt="face">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
            </div>
            <div class="detail fade-in">
                <img src="../Images/cehrasquare.png" alt="face">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
            </div>
            <div class="detail fade-in">
            <img src="../Images/cehrasquare.png" alt="face">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
            </div>
            <div class="detail fade-in">
            <img src="../Images/cehrasquare.png" alt="face">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
            </div>
            <div class="detail fade-in">
            <img src="../Images/cehrasquare.png" alt="face">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
            </div>
        </div>
    </div>

    <div id="last">
        <div id="head" class="right slide-in">
        <p>Create And Sell Your <span>beautiful courses online in few minutes</span></p>
        </div>
        <div id="free" class="left slide-in">
            <button><a href="../signup and login/signup.php">signup for free</a></button>
        </div>
        <div id="tree" class="fade-in">
            <img src="../features/Images/logotree.png" alt="logotree">
        </div>
    </div>
    <?php require_once '../shared/footer.php' ?>
    
    <script src="../homepage/observer.js"></script>
</body>
</html>