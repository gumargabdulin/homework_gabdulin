<?php
echo "<p>1 задание:<p>";
foreach (range(5,13) as $number) {
   echo $number."<br>";
}
echo "<p>2 задание:</p>";
echo "while"."<br>";
$num=1000;
$n=0;
while($num>=50){
    $num/=2;
    echo "Число - ".$num."<br>";
    $n++;
}
echo "Конечное число- ".$num."<br>";
echo "Колличество итераций - ".$n."<br>";
//b)
echo "For"."<br>";
$num=1000;
for($num=1000; $num > 50; $n++){
    $num/=2;
    echo "Число - ".$num."<br>";
}
echo "Конечное число- ".$num."<br>";
echo "Колличество итераций - ".$n."<br>";
echo "<p>3 задание:</p>";
$i=3;
for ($a=0;$a<=(10-$i);$a++){
    echo $a."<br>";
}