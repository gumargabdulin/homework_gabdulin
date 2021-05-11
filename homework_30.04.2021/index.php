
<?php
//1.Задача.
for($i=0;$i<10;$i++){
$rand[]=rand(0,10);
if ($rand[$i] % 2 === 0) {echo "<b>".$rand[$i]."</b>"."<br>";}
else{echo $rand[$i]."<br>";}
}
//2.Задача.
$a = ['Апельсин','Абрикос','Яблоко','Вишня'];
$b = ['Арахис','Вишня','Ананас','Мандарин'];
$c=[$a, $b];
for($i=0; $i < count($c); $i++)
{
    for($q=0; $q < count($c[$i]); $q++)
    {
      if(mb_substr($c[$i][$q], 0, 1)==="А") echo  " - ".$c[$i][$q]."<br>";}
    }
    echo "<br>";
//3 задача.
for ($i=0;$i<10;$i++){
    $arr1[]=rand(0,10);
    $arr2[]=rand(0,10);
    $arr=[$arr1, $arr2];

}
echo "Общее колличество элементов 1го массива ".count($arr1)."<br>";
echo "Общее колличество элементов 2го массива ".count($arr2)."<br>";
$count=count($arr, COUNT_RECURSIVE)-count($arr);
echo "Общее колличество элементов всего массива ".$count."<br>";

