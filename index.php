<?php
$input = $_POST['numbers'];
$array = explode(',', $input);

$sum = 0;

foreach ($array as $item) {
    $sum = $item + $sum;
}

echo " جمع کل اعداد وارد شده :" . $sum . '<br>';

$avg = $sum/count($array);
$max = max($array);

echo " میانگین اعداد  :" .  $avg . "<br>";
echo "برزگترین عدد :  :" . "$max" . "<br>";