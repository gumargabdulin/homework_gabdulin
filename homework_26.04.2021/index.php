<?
$today = date("H:i");
$mornig=date("8:00");
$evening=date("20:00");
$name='Gumar';
$age="26 years old";
$weather="cold";
    define("pi", 3.14);
    echo $today." ";
    if($morning < $today and $evening >= $today)
    {echo "day";
    echo '<style>body{background-image: url("img/day.jpg");background-size: cover;}</style>';
    }
    else
    {echo"evening";
   echo '<style>body{background-image: url("img/night.jpg");background-size: cover;}</style>';
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Homework_26.04.2021</title>
</head>
<body>
<h1 style="color: firebrick" align="center"><?php echo $name ?></h1>
<h2 style="color: firebrick" align="center"><?php echo $age ?></h2>
<h3 style="color: firebrick" align="center">Число Пи кстати - <?php echo pi ?></h3>
<style></style>
</body>
</html>
