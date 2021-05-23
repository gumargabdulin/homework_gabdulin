<html>
<head>
    <title>Отправка email</title>
</head>
<body>
<?php
if(!isset($_POST['login']) and !isset($_POST['psw'])){
    ?> <form action="index.php" method="post">
        <input type="text" name="login" placeholder="Admin" required>
        <input type="text" name="psw" placeholder="123321" required>
        <?echo "Хэш - ".md5('123321')."<br>";?>
        <input type="submit" value="Отправить">
    </form> <?php
} else {
    $login = $_POST['login'];
    $psw = $_POST['psw'];
    $hash=md5($psw);
    echo "Получившийся хеш - ".$hash;
    if ($login=='Admin' and $hash==(md5('123321')))
    {
        echo "Авторизация прошла успешно";
    }
    else
    {
        echo "Ошибка авторизации";
    }


}
?>
</body>
</html>