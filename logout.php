<?php
if(!$_COOKIE)
{
    header("Location: homepage/homepage.php");
}else{
    foreach($_COOKIE as $index => $value)
        setcookie( $index , '', time() - 84600);
    }
    header("Location: homepage/homepage.php");
 ?>