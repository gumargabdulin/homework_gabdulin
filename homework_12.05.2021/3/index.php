<html>
<head>
    <title>Отправка email</title>
</head>
<body>
<?php
if(!isset($_POST['login']) and !isset($_POST['psw'])){
    ?> <form action="index.php" method="post">

        <div>
            <p>1.Считаете ли Вы, что у многих ваших знакомых хороший характер? </p>
            <p><input name="1" type="radio" value="Yes" checked="Yes">Да<input name="1" type="radio" value="No">Нет</p>
             <p>2. Раздражают ли Вас мелкие повседневные обязанности? </p>
            <p><input name="2" type="radio" value="Yes" checked="Yes">Да<input name="2" type="radio" value="No">Нет</p>
             <p>3. Верите ли Вы, что ваши друзья преданы Вам?  </p>
            <p><input name="3" type="radio" value="Yes" checked="Yes">Да<input name="3" type="radio" value="No">Нет</p>
             <p>4.Неприятно ли Вам, когда незнакомый человек делает Вам замечание?  </p>
            <p><input name="4" type="radio" value="Yes" checked="Yes">Да<input name="4" type="radio" value="No">Нет</p>
             <p>5.Способны ли Вы ударить собаку или кошку?  </p>
            <p><input name="5" type="radio" value="Yes" checked="Yes">Да<input name="5" type="radio" value="No">Нет</p>
             <p>6.Часто ли Вы принимаете лекарства?  </p>
            <p><input name="6" type="radio" value="Yes" checked="Yes">Да<input name="6" type="radio" value="No">Нет</p>
             <p>7.Часто ли Вы меняете магазин, в который ходите за продуктами?  </p>
            <p><input name="7" type="radio" value="Yes" checked="Yes">Да<input name="7" type="radio" value="No">Нет</p>
             <p>8.Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?  </p>
            <p><input name="8" type="radio" value="Yes" checked="Yes">Да<input name="8" type="radio" value="No">Нет</p>
             <p>9.Тяготят ли Вас общественные обязанности? </p>
            <p><input name="9" type="radio" value="Yes" checked="Yes">Да<input name="9" type="radio" value="No">Нет</p>
             <p>10.Способны ли Вы ждать более 5 минут, не проявляя беспокойства? </p>
            <p><input name="10" type="radio" value="Yes" checked="Yes">Да<input name="10" type="radio" value="No">Нет</p>
             <p>11.Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
            <p><input name="11" type="radio" value="Yes" checked="Yes">Да<input name="11" type="radio" value="No">Нет</p>
             <p>12.Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
            <p><input name="12" type="radio" value="Yes" checked="Yes">Да<input name="12" type="radio" value="No">Нет</p>
             <p>13.Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
            <p><input name="13" type="radio" value="Yes" checked="Yes">Да<input name="13" type="radio" value="No">Нет</p>
             <p>14.Нравится ли Вам семейная жизнь?</p>
            <p><input name="14" type="radio" value="Yes" checked="Yes">Да<input name="14" type="radio" value="No">Нет</p>
             <p>15.Злопамятны ли Вы? </p>
            <p><input name="15" type="radio" value="Yes" checked="Yes">Да<input name="15" type="radio" value="No">Нет</p>
             <p>16.Находите ли Вы, что стоит погода, типичная для данного времени года? </p>
            <p><input name="16" type="radio" value="Yes" checked="Yes">Да<input name="16" type="radio" value="No">Нет</p>
             <p>17.Случается ли Вам с утра быть в плохом настроении?</p>
            <p><input name="17" type="radio" value="Yes" checked="Yes">Да<input name="17" type="radio" value="No">Нет</p>
             <p>18.Раздражает ли Вас современная живопись? </p>
            <p><input name="18" type="radio" value="Yes" checked="Yes">Да<input name="18" type="radio" value="No">Нет</p>
             <p>19.Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
            <p><input name="19" type="radio" value="Yes" checked="Yes">Да<input name="19" type="radio" value="No">Нет</p>

        </div>
        <input type="submit" value="Отправить">
    </form> <?php
    if (isset($_POST['1'])) {
        $point=0;
        $yes = ['3','9','10','13','14','19'];
        $no = ['1','2','4','5','6','7','8','11','12','15','16','17','18'];
        for ($i = 1; $i <= 19; $i++) {
            $otvet = $_POST[$i];
            if (in_array($i, $yes)) {
                    $point += 1;
            }
            if (in_array($i, $no)) {
                if ($otvet == "No") {
                    $point += 1;
                }
            }
        }
        echo "Колличество баллов - " . $point."<br>";
        if ($point>=15){echo "У Вас покладистый характер";}
        if ($point>=8 and $point<15){echo "Вы не лишены недостатков, но с Вами можно ладить";}
        if ($point<=8){echo "Вашим друзьям можно посочувствовать..";}
    }

}
?>
</body>
</html>