
<?php
//1 задача.
$arr=['Яблоко', 'Ананас', 'Дыня', 'Лимон'];

foreach ($arr as $value){
    if (mb_strlen($value)>5)
    {echo mb_substr($value, 5)."..."."<br>";}
    else{echo $value."<br>";}
    //echo substr($value, 9)."<br>";
}
//2.Задача
$st=[a,b,c];
$num=[1,2,3];
$str="abcdacda";
echo str_replace($st,$num,$str)."<br>";
//3.Задача
$str='abc abc abc';
echo strpos($str,'b', 2)."<br>";
//4.Задача
$str='html css php';
$ar=explode(' ', $str);
echo "1 - ".$ar[0]."<br>";
echo "2 - ".$ar[1]."<br>";
echo "3 - ".$ar[2]."<br>";
//5 задача.
$date1=date("12-05-2021");
$date2=date("14-09-1994");
$years_old=strtotime($date1)-strtotime($date2);
echo floor($years_old / (60 * 60 * 24));









