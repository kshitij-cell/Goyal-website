<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teach';

$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


function string_in($string, $start, $end){
    $inner = [];
    $ini = 0;
    while((strpos($string, $start, $ini) !== false) && (strpos($string, $end, $ini) !== false)){
        $ini += strpos($string, $start, $ini) - $ini;
        $ini += strlen($start) - 1;
        $len = strpos($string, $end, $ini) - $ini - 1;
        $inner[] = substr($string, $ini+1, $len);
        $ini += $len;
        $ini += strlen($end);
    }
    return $inner;
}
$id = $_GET['blogid'] ?? 0;

if(isset($_POST['submit']))
{
    $name = htmlentities(strip_tags($_POST['name']));
    $comment = htmlentities(strip_tags($_POST['comment']));
    
    $query = "SELECT * FROM `$dbname`.`blog` where `blogid` = " . $id . " ;";
    $data = $dbconnection -> query($query);
    $row = $data -> fetch_assoc();
    $comment = $row['comment'] . '<comment>' . '<name>' . $name . '</name>' . $comment . '</comment>';
    // echo htmlentities($comment);
    $query = "UPDATE `" . $dbname . "`.`blog` SET `comment`= '" . $comment . "' WHERE `blogid`=$id";
    $dbconnection -> query($query);
    // echo $query;
}

$query = "SELECT * FROM `$dbname`.`blog` where `blogid` = " . $id . ' ;';

$data = $dbconnection -> query($query);
if($data->num_rows <= 0)
    exit;
$row = $data->fetch_assoc();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="blogpost.css">
    <title>Document</title>
</head>
<body>
<header>
        <div>
            <span><a href="../homepage/homepage.php">home</a></span> | <span><a href="../customer/customer.php">get started</a></span>
        </div>
        <div><img src="../Images/social media icons.png" alt=""></div>
    </header>
    <section class="home-intro">
        <h2>learn to teach online</h2>
        <h5>online teaching tricks to create market and sell courses online</h5>
    </section>
    <div class="container">
        <div class="content1 left slide-in">
            <div class="inner">
                <?php echo '<img src="upload/' . htmlentities(string_in($row['article'],'<image>','</image>')[0] ?? '__113421.png') . '" alt="">'; ?>
                <h3>
                    <?php echo htmlentities(string_in($row['article'],'<heads>','</heads>')[0] ?? 'header'); ?> 
                </h3>
                <div class="credential upper">
                    <span style="display: inline-block;"><img src="../Images/clock icon copy.png" alt="date:"><?php echo $row['date'] ?></span>
                    <span style="display: inline-block;"><img src="../Images/profile.png" alt="profile:"><?php echo htmlentities($row['username']) ?></span>
                    <span style="display: inline-block;"><img src="../Images/comment.png" alt="comment:">leave a comment</span>
                </div>
                <div class="lower">
                <section>
                    <?php
                    $header = string_in($row['article'],'<topic>','</topic>');
                    $count = count($header);
                    if($count>0) { echo '<span>Content</span>';}
                    echo '<ol>';
                    for ($i=0; $i < $count; $i++) { 
                        echo '<li><span>' . $header[$i] . '</span></li>';
                    }
                    echo '</ol>'
                    ?>
                </section>
                <?php
                $content = $row['article'];
                $content = strip_tags($content,'<image><topic><para><heads>');
                $headercont = string_in($content,'<heads>','</heads>');
                $ups = count($headercont);
                for ($i=0; $i < $ups; $i++) { 
                    $content = str_replace( '<heads>'. $headercont[$i] .'</heads>' ,'',$content);
                }

                $content = str_replace('<topic>','<h4>',$content);
                $content = str_replace('</topic>','</h4>',$content);
                    
                $content = str_replace('<para>','<p>',$content);
                $content = str_replace('</para>','</p>',$content);
                
                $imagestr = string_in($row['article'],'<image>','</image>');
                $ups = count($imagestr);
                if($ups>0) {
                    $content = str_replace('<image>' . $imagestr[0] .'</image>','',$content);
                    for ($i=1; $i < $ups; $i++) { 
                        $content = str_replace('<image>' . $imagestr[$i] .'</image>','<img src=' . $imagestr[$i] . ' alt="">',$content);
                        
                    }
                }
                echo ($content);
                
                 ?>
                
                </div>

            </div>
            <div id="comment">
                <div class="said">
                    <h2>Comments</h2>
                    <?php
                    $queryanother = "SELECT * FROM `blog` WHERE `blogid` = $id";
                    $dataanother = $dbconnection -> query($query);
                    $rowanother = $dataanother -> fetch_assoc();
                    $comment = $rowanother['comment'];

                    $comment = string_in($comment, '<comment>', '</comment>');
                    $name = string_in($rowanother['comment'], '<name>', '</name>');
                    
                    $count = count($name);
                    foreach ($comment as $value) {
                        $name = get_string_between($value, '<name>', '</name>');
                        $commence = str_replace("<name>$name</name>",'',$value);
                        echo "<p><span><img src='../Images/profile.png' alt='profile:'>$name</span>$commence</p>";
                    }  
                    ?>
                </div>
                <h1>Leave a Reply</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'] . "?blogid=$id"; ?>" method="POST">
                    <p>
                        <input placeholder="Your Name?" name="name">
                    </p>
                    <p>
                        <textarea name="comment" placeholder="Comment"></textarea>
                    </p>
                    <p>
                        <button type="submit" name="submit" value="submit">Post Comment</button>
                    </p>
                </form>
                
            </div>
            
        </div>
        <div class="content2 right slide-in">
        <span>new post</span>
            <?php
            $data = $dbconnection -> query($query);
            while($row = $data -> fetch_assoc())
            {
                echo '<div class="header">';
                echo string_in($row['article'], '<heads>','</heads>')[0] ?? 'string';
                echo '</div>';
            }
            ?>

            <div class="catagory">
                <img src="../Images/knowledge.png" alt="">
                <h4>categories <span></span></h4>
                <div class="folder">
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                </div>
            </div>
            <div class="update">
                <h2>stay update</h2>
                <img src="../Images/update.png" alt="">
                <input type="text" placeholder="Enter Email">
                <span>subscribe</span>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
let targets = document.querySelectorAll('.header');
console.log(targets);
targets[0].style.borderTop = "2px solid #fa6501";
</script>

<script src="../homepage/observer.js"></script>
</html>