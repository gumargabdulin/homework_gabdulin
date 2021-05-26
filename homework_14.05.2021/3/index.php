<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form id="1" name="1" method="post" action="" enctype="utf-8">
    <select multiple="multiple" name="name[]">
        <option value="Красный">Красный</option>

        <option value="Синий">Синий</option>
        <option value="Зеленый">Зеленый</option>
    </select>
    <input type="submit" value="Выбрать">
</form>

</body>
</html>
<?php

if (isset($_SESSION['page']))
{
    foreach($_SESSION["page"] as $value)
    {
        echo $value;
    }
}
if(isset($_REQUEST['name'])) {
    foreach($_POST['name'] as $name){
        echo "Вы выбрали - ".$name." цвет <br>";
        switch ($name){
            case 'Красный':echo "<style>body{background-color: red}</style>";break;
            case 'Синий':echo "<style>body{background-color: blue}</style>";break;
            case 'Зеленый':echo "<style>body{background-color: green}</style>";break;
        }

    }

}
