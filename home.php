<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teach';

$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);

$accept = false;
//User authentication :

if(!$_COOKIE['userid'])
{
    mysqli_close($dbconnection);
    header("Location: signup and login/signup.php");
}

if(!(isset($_GET['userid'])))
{
    mysqli_close($dbconnection);
    header("Location: homepage/homepage.php");
}

if($_COOKIE['userid'] !== $_GET['userid'])
{
    mysqli_close($dbconnection);
    header("Location: signup and login/signup.php");
}

if(!($_COOKIE['useremail'] && $_COOKIE['userpass']))
{
    mysqli_close($dbconnection);
    # change this to first visit page
    header("Location: signup and login/signup.php");
}

$sqlquery = "SELECT * FROM `users` WHERE `userid` = {$_GET['userid']};";
$data = $dbconnection -> query($sqlquery);
$row = $data -> fetch_assoc();


if(($row['useremail'] !== $_COOKIE['useremail']) || !(password_verify($_COOKIE['userpass'],$row['password'])))
{
    mysqli_close($dbconnection);
    header("Location: signup and login/signup.php");
}

//USER AUTHENTICATION END;
?><?php

if($_GET)
{
    if(isset($_GET['logout'])){
        if($_GET['logout']==1)
            header('Location: logout.php');
    }
}

 ?><?php
$user=$row['username'];
echo "<script>let user = '$user';</script>";

$query = "SELECT * FROM `$dbname`.`blog` WHERE `username` = '$user' ";
     
    $nameprefix = ($dbconnection -> query($query)) -> num_rows;
    echo "<script>let iterate = $nameprefix; </script>";

if($_FILES)
{

    
    $fileerror = $_FILES['image']['error'];
    foreach($fileerror as $error){
        if(($error) && ($error != 4)){
            echo '<script>alert("something wrong with your images please upload again")</script>';
            exit;
        }
    }
    

    $filename = &$_FILES['image']['name'];
    $i = 0;
    
    // echo $nameprefix;
    foreach($filename as $key => &$value){
        $fileext = explode('.' , $value);
        $value = $user . "[$nameprefix]" . "[$i]" . "." . strtolower(end($fileext));
        $i++;
    }

    $filename = $_FILES['image']['name'];

    $filetmp = $_FILES['image']['tmp_name'];
    $filedestination = 'blog/upload/';

    foreach($filetmp as $index => $name)
    {
        $filenamefinal = $filedestination . $filename[$index];
        move_uploaded_file($name , $filenamefinal);
    }


}
if($_POST)
{
    foreach($_POST as $index => $value)
    {
        // echo htmlentities("$index => $value");
    }
    $date = date("j F, Y");

    //mailing
        // $to = "YOUR EMAIL GOES HERE@gmail.com";
        // $subject = "My subject";
        // $txt = "I've added `{$_POST['description']}` in your page my username is $user on $date";
        // $headers = "From: {$_COOKIE['useremail']}";

        // mail($to,$subject,$txt,$headers);
    //mailing
    $sqlquery = "INSERT INTO `$dbname`.`blog` (`date`, `username`, `article`) VALUES ('$date', '$user', '{$_POST['description']}');";
    $dbconnection -> query($sqlquery);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/homestyle.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div id="option">
            <div class="blog">Blog home</div>
            
        </div>
        <div id="body">     
            <h1>Editing Area</h1>
            <span style="position: absolute; z-index: 2; right:5px; top: 5px;"><a href="<?php echo $_SERVER['PHP_SELF'] . "?userid={$_GET['userid']}&logout=1" ?>">Logout</a></span>
            <div class="blog">

                <textarea id="read" placeholder="Written document will be shown here and do not tampe with the tags" name="description" form="form"></textarea>
                <textarea id="write" placeholder="Type Here"></textarea>
                <span id="add">add paragraph</span>

                <div><input type="text" id="header" placeholder="add header of your article"><span id="headersub" >add header</span></div>
                <div><input type="text" id="subject" placeholder="subject of your paragraph"><span id="subjectsub">add subject</span></div>
                <div><label style="font-size: 1.5em;">do not disselect selected images for the sake of your blog</label></div>
                <div><br/><input type="file" accept="image/png" name="image[]" id="image" form="form" multiple><span id="imageupload">add images</span></div>
                
                <form action="<?php echo $_SERVER['PHP_SELF'] . "?userid={$_GET['userid']}"; ?>" id="form" method="POST" enctype="multipart/form-data">
                    <!-- <input style="display: none;" disabled type="file" accept="image/png" multiple> -->
                    <button type="submit" form="form" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="../javascript/editing.js"></script>
</html>