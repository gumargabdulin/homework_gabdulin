<?php
session_start();
setcookie(session_name(),session_id(),time()+365*24*3600);
if(count($_POST)>0)
{
    if($_POST["login"]==$a || $_POST["password"]==$b)
    {
        if (isset($_SESSION['page']))
        {
            foreach($_SESSION["page"] as $value)
            {
                echo $value;
            }
            exit;
        }
    }
}
else
{
    if (isset($_SESSION['page']))
    {
        foreach($_SESSION["page"] as $value)
        {
            echo $value;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Главная</h1>
<a href="1.php">1.php</a>
<a href="2.php">2.php</a>
<form method="post">
    login
    <p>
        <input type="text" name="login">
    </p>
    password
    <p>
        <input type="password" name="password">
    </p>
    <p>
        <input type="submit">
    </p>
</form>
</body>
</html>