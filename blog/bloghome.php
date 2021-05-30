<?php $sharedfolder = '../shared/' ?>

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'teach';

$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);

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

 ?><?php
$offset = $_GET['offset'] ?? 0;
$query = "SELECT * FROM (SELECT * FROM `$dbname`.`blog` ORDER BY blogid DESC LIMIT ". $offset .",5) sub ORDER BY blogid ASC;";
$data = $dbconnection -> query($query);
$records = $data->num_rows;

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="blog.css">
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
        <div class="content1">
        <?php
        if($records <= 0)
        {
            echo "<p style='font-size:2em;'>NO MORE RECORDS</p>";
        }
        $data = $dbconnection -> query($query);
        while($row = $data -> fetch_assoc())
        {
            echo '<div class="inner left slide-in appear">';
                echo '<img src="upload/' . htmlentities(string_in($row['article'],'<image>','</image>')[0] ?? '__113421.png') . '" alt="">';
                echo '<h3>';
                echo htmlentities(string_in($row['article'],'<heads>','</heads>')[0] ?? 'header');
                echo '</h3>';
                echo '<div class="credential upper">';
                    echo '<span style="display: inline-block;"><img src="../Images/clock icon copy.png" alt="date:">' . $row['date'] . '</span>';
                    echo '<span style="display: inline-block;"><img src="../Images/profile.png" alt="profile:">' . htmlentities($row['username']) . '</span>';
                    echo '<span style="display: inline-block;"><img src="../Images/comment.png" alt="comment:">leave a comment</span>';
                echo '</div>';

                echo '<div class="lower">';
                    echo htmlentities(string_in($row['article'],'<para>','</para>')[0] ?? 'header');
                echo '</div>';
                echo '<span class="read"><a href="blogpost.php?blogid='. $row['blogid'] .'">read more</a></span>';
            echo '</div>';
        }
        ?>
        <span id="older"><a href="<?php echo $_SERVER['PHP_SELF'] . '?offset=' . (intval($offset)+5) ?>">older post</a></span>
        </div>
        <div class="content2  right slide-in">
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

            <div class="catagory right slide-in">
                <img src="../Images/knowledge.png" alt="">
                <h4>categories <span></span></h4>
                <div class="folder">
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                    <div><img src="../Images/folder.png" alt="">Build a course</div>
                </div>
            </div>
            <div class="update right slide-in">
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