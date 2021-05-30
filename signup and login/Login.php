<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teach';

$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
$accept=false;
    // if(!(isset($_GET['userid'])))
    // {
    //     header("Location: homepage/homepage.php");
    // }
 ?><?php
if($_POST)
{
    $sqlquery = "SELECT * FROM `users` WHERE `useremail` = '{$_POST['name']}';";
    $data = $dbconnection -> query($sqlquery);
    if($data -> num_rows <= 0){
        echo "<script>alert('invalid email');</script>";
        exit;
    }
    
    $row = $data -> fetch_assoc();

    setcookie("useremail", "{$row['useremail']}", time() + (86400 * 30), "/");
    setcookie("userpass", "{$_POST['password']}", time() + (86400 * 30), "/");
    setcookie("userid", "{$row['userid']}", time() + (86400 * 30), "/");

    if(password_verify($_POST['password'],$row['password']))
        {
        $accept = true;
    }else{
        echo "<script>alert('invalid password');</script>";
    }
    if($accept)
    {
        mysqli_close($dbconnection);
            header("Location: ../home.php" . "?userid={$row['userid']}");
    }
    mysqli_close($dbconnection);
}
?>





<?php $sharedfolder = '../shared/' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/footer.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/homehead.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
    <style>
        div#third{
            padding-bottom: 10px;
            margin-bottom: 0px;
            margin-top: 0px;
            background-color: rgb(250, 101, 1);
        }
        div#fourth
        {
            display: none;
        }
        
        div.buton
        {
            display: none;
        }
    </style>
    <title>Log-in</title>
</head>
<body>
    
    <header>
        <?php require_once '../shared/headmenu.php' ?>
        
    </header>
    <div id="start" class="home-intro">
        <h3>Welcome to the <span>Company</span></h3>
    </div>
    <div id="signup" class="fade-in">
        <section>
            <form onsubmit="return verify();" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <p>
                    <input class="escape" type="text" name="name" placeholder="E-mail" onclick="choose(this.id);" id="name" autocomplete="off" />
                    <span id="Username" class="under"></span>

                </p>
                <p>
                    <input class="escape" type="password" name="password" placeholder="Password" onclick="choose(this.id);" id="pass" autocomplete="off" />
                    <span id="Password" class="under"></span>
                </p>
                <p>
                    <button class="click" value="submit" type="submit">Submit</button>
                </p>
                <p id="account">
                    <span> Remember me?</span>
                    <span>Forgot password?</span>
                </p>
            </form>
        </section>
    </div>
    <?php require_once '../shared/footer.php' ?>

</body>
<script src="../javascript/loginpage.js"></script>
<script src="../javascript/verifylogin.js"></script>
<script src="../homepage/observer.js"></script>
</html>