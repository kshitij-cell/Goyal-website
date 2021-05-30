<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teach';

$accept = false;
$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    
 ?><?php
 if($_POST)
{
    $sqlquery = "INSERT INTO `$dbname`.`users` (`username`, `useremail`, `number`, `password`) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['number']}', '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "');";
    $data;$row;

    if($dbconnection -> query($sqlquery) === true){
        $accept = true;    
        $sqlquery = "SELECT `userid` FROM `users` WHERE `username` = '{$_POST['name']}';";
        $data = $dbconnection -> query($sqlquery);
        $row = $data ->fetch_assoc();

        setcookie("useremail", "{$_POST['email']}", time() + (86400 * 30), "/");
        setcookie("userpass", "{$_POST['password']}", time() + (86400 * 30), "/");
        setcookie("userid", "{$row['userid']}", time() + (86400 * 30), "/");

        #DURING PRODUCTION CHANGE ABOVE TO ->
        #setcookie("username", "{$_POST['username']}", time() + (86400 * 30), "/" , 'domainname.com' , false , true);
        
    }else{
        $error = $dbconnection -> error;
        if(strpos($error , 'username'))
        {
            echo "<script>alert('username already taken.');</script>";
        }elseif(strpos($error , 'email'))
        {
            echo "<script>alert('email already taken.');</script>";
        }
    }

    
    if($accept)
    {
        mysqli_close($dbconnection);
        header("Location: ../home.php" . "?userid={$row['userid']}");
    }
}
//"?id={$row['userid']}
?>

<?php mysqli_close($dbconnection); ?>



<?php $sharedfolder = '../shared/' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/footer.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/homehead.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/secondaryhead.css">
    <style>
        div#third{
            margin-bottom:0px;
            padding-bottom: 18px;
            margin-top: 0px;

        }
        div#fourth,div.buton
        {
            display: none;
        }
    </style>
    <title>Signup</title>
</head>
<body>
    <header>
        <?php require_once '../shared/headmenu.php' ?>
    </header>
    <div id="start" class="home-intro">
        <h3>start your <span>free trial</span> today</h3>
    </div>
    <div id="container">
        <div id="img" class="fade-in">
            <img src="Images/register.png" alt="register">
        </div>
        <div id="signup" class="fade-in">
            <section id="total">
                <section>
                    <h4>Signup for free</h4>
                    <p>*Credit Card not required</p>
                </section>
                <form onsubmit="return verify();" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="form">
                    <p>
                        <input class="escape" type="text" name="name" placeholder="Institute Or Your Name" onclick="choose(this.id);" id="name" autocomplete="off" />
                        <span id="Username" class="under"></span>

                    </p>
                    <p>
                        <input class="escape" type="tel" name="number" placeholder="mobile number" onclick="choose(this.id);" id="pass" autocomplete="off" />
                        <span id="number" class="under"></span>
                    </p>
                    <p>
                        <input class="escape" name="email" placeholder="Enter your business e-mail address" onclick="choose(this.id);" id="text" />
                        <span id="email" class="under"></span>
                    </p>
                    <p>
                        <input class="escape" type="password" name="password" placeholder="Password" onclick="choose(this.id);" id="confirm" autocomplete="off" />
                        <span id="password" class="under"></span>
                    </p>
                    <div id="free"><button class="click" value="submit" type="submit" form="form" style="cursor: pointer;">signup for free</button></div>
                        
                    <p id="account">You have an account already? <span><a href="login.php">login!</a></span></p>
                </form>
            </section>
        </div>
    </div>
    <?php require_once '../shared/footer.php' ?>

</body>
<script src="../javascript/loginpage.js"></script>
<script src="../javascript/verifysignup.js"></script>
<script src="../homepage/observer.js"></script>
</html>