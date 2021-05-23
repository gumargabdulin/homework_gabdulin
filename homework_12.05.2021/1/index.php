<html>
<head>
    <title>Отправка email</title>
</head>
<body>
<?php
if(!isset($_POST['login']) and !isset($_POST['email'])){
    ?> <form action="index.php" method="post">
        <input type="text" name="login" placeholder="Укажите логин" required>
        <input type="text" name="comment" placeholder="Укажите комментарий" required>
        <input type="email" name="email" placeholder="Укажите e-mail" required>
        <input type="submit" value="Отправить">
    </form> <?php
} else {
    $login = $_POST['login'];
    $comment = $_POST['comment'];
    $email = $_POST['email'];


}
?>
</body>
</html>