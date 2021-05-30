<?php
$sharedfolder = '../shared/';
$student = 1;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Student.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/footer.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/homehead.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/secondaryhead.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
    <style>
        div#third{
            margin-bottom: 26px;
        }
    </style>
    <title>Students</title>
</head>
<body>
    <header>
        <?php require_once '../shared/headmenu.php' ?>
        <?php require_once '../shared/secondaryhead.php' ?>
        <div class="top home-intro">
            <h1>World's Best Online Learning Interface In Your Brand</h1>
            <h3>Using classroom your students can learn efficiently. They can view courses anywhere and anytime.</h3>
            <div><a href="../signup and login/signup.php">Get started Here</a></div>
            <span>No credit cards required, 20 days free trial</span>
        </div>
    </header>
    <h2 id="stu" class="left slide-in" >Best Student Learning Interface</h2>
    <div id="text">
        <div class="left slide-in" >
            <p><span class="check">&#10004; </span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa illum non suscipit, dolore molestiae nihil assumenda ducimus, quo tempore ut totam quis unde enim omnis sed blanditiis voluptatibus laborum.</p>
            <p><span class="check">&#10004; </span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa illum non suscipit, dolore molestiae nihil assumenda ducimus, quo tempore ut totam quis unde enim omnis sed blanditiis voluptatibus laborum.</p>
            <p><span class="check">&#10004; </span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa illum non suscipit, dolore molestiae nihil assumenda ducimus, quo tempore ut totam quis unde enim omnis sed blanditiis voluptatibus laborum.</p>
        </div>
        <div>
            <img src="Images/image.png" class="right slide-in" alt="">
        </div>
    </div>
    <div id ="face">
        <div id="colon" class="left slide-in">&#x201C</div>
            <div id=ceo>
                <div id="exp" class="left slide-in">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusamus necessitatibus ad commodi placeat cupiditate inventore quis nobis omnis sint veritatis, distinctio beatae id culpa ea natus officia ab eum!</p>
                    <h3><span></span> ceo of xyz company</h3>
                </div>
                <div id="img">
                    <img src="../features/Images/cehra.png" class="right slide-in" alt="face">
                </div>
            </div>
        </div>
    </div>

    <div id="container">
        <img src="Images/illustration.png" class="left slide-in" alt="security">
        <div id="demo" class="right slide-in">
            <h3>branded mobile apps </h3>
            <h5>Get your own app in your own brand</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit reiciendis temporibus perferendis praesentium nihil porro enim, commodi perspiciatis minima earum maiores, ex, molestiae nesciunt. Porro similique rerum officiis fugit unde.</p>
            <div id="demobox"><button><a href="../mobileapp/mobileapp.php">get mobile app</a></button></div>
        </div>
    </div>
    <div id="features">
        <h1  class="right slide-in">features</h1>
        <h2 class="left slide-in" style="color:white;">All the features you need to provide best to your students.</h2>
        <div id="diff">
            <div class="row fade-in">
                <div class="detail">
                    <h3>enroll for free</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
                </div>
                <div class="detail">
                    <h3>enroll for free</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
                </div>
                <div class="detail">
                    <h3>enroll for free</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
                </div>
            </div>
            <div class="row fade-in">
                <div class="detail">
                    <h3>enroll for free</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
                </div>
                <div class="detail">
                    <h3>enroll for free</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
                </div>
                <div class="detail">
                    <h3>enroll for free</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis eos ullam quasi id dolorum voluptatem illo laudantium nobis! Quia exercitationem eius obcaecati temporibus est, maxime ut voluptatem facilis molestiae?</p>
                </div>
            </div>
        </div>
    </div>
    <div id="last">
        <div id="head"  class="right slide-in">
            <p>Create And Sell Your <span>beautiful courses online in few minutes</span></p>
        </div>
        <div id="free" class="left slide-in">
            <button><a href="../signup and login/signup.php">signup for free</a></button>
        </div>
        <div id="tree">
            <img src="../features/Images/logotree.png" class="fade-in" alt="logotree">
        </div>
    </div>

    <?php require_once '../shared/footer.php' ?>

    <script src="../homepage/observer.js"></script>
</body>