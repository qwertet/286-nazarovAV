<?php
//1
$arr = [1, 2, 3, 4, 5, 6];
echo count($arr);
echo "<br>";

//2


//3
var_dump(in_array(3, $arr));
echo "<br>";

//4
echo array_sum($arr);
echo "<br>";

//5
echo array_product($arr);
echo "<br>";

//6
$middle = array_sum($arr) / count($arr);
echo $middle;
echo "<br>";

//7
$arr2 = range(1, 100);
var_dump($arr2);
echo "<br>";

//8
$arr4 = range('a', 'z');
var_dump($arr4);

//9
$arr3 = range(1, 9);
$str = implode('-', $arr3);
var_dump($str);
echo "<br>";

//10
$arr5 = range(1, 100);
$arr5sum = array_sum($arr5);
var_dump($arr5sum);
echo "<br>";

//11
$arr5product = array_product($arr5);
var_dump($arr5product);
echo "<br>";

//12
$massive1 = [1, 2, 3];
$massive2 = ['a', 'b', 'c'];
$massive1_2 = array_merge($massive1, $massive2);
var_dump($massive1_2);
echo "<br>";

//13
$arr7 = [1, 2, 3, 4, 5];
$result = array_slice($arr7, 1, 3);
var_dump($result);
echo "<br>";

//14
$arr8 = [1, 2, 3, 4, 5];
var_dump(array_splice($arr8, 1, -2));
echo '<br>';
//15
$arr9 = [1, 2, 3, 4, 5];
var_dump(array_splice($arr9, 0, -1));
echo '<br>';
echo '<br>';
//16
$arr10 = [1, 2, 3, 4, 5];
var_dump(array_splice($arr10, 3, 0, ['a', 'b', 'c']));
var_dump($arr10);
echo '<br>';
echo '<br>';

//17
echo "17 17 17 17";
$arr11 = [1, 2, 3, 4, 5];
var_dump(array_splice($arr11, 1, 0, ['a']));
var_dump($arr11);
echo '<br>';
echo '<br>';

//18
$arr12 = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = (array_keys($arr12));
$values = (array_values($arr12));
var_dump($keys);
var_dump($values);
echo '<br>';
echo '<br>';

//19
$keys2 = ['a', 'b', 'c'];
$values2 = [1, 2, 3];
$arr13 = array_combine($keys2, $values2);
var_dump($arr13);
echo '<br>';
echo '<br>';

//20
$arr14 = ['a' => 1, 'b' => 2, 'c' => 3];
$arr14_result = array_flip($arr14);
var_dump($arr14_result);
echo '<br>';
echo '<br>';

//21
$arr15 = [1, 2, 3, 4, 5];
$arr15 = array_reverse($arr15);
var_dump($arr15);
echo '<br>';
echo '<br>';

//22
$arr16 = ['a', '-', 'b', '-', 'c', '-', 'd'];
var_dump(array_search('-', $arr16));
echo '<br>';
echo '<br>';

//23
$tested = array_search('-', $arr16);
array_splice($arr16, $tested, 1);
var_dump($arr16);
echo '<br>';
echo '<br>';

//24
$arr17 = ['a', 'b', 'c', 'd', 'e'];
$done = array_replace($arr17, [0 => '!', 3 => '!!']);
var_dump($done);
echo '<br>';
echo '<br>';

//25
$arr18 = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
$res = sort($arr18);
var_dump($arr18);

echo '<br>';

$res = rsort($arr18);
var_dump($arr18);

echo '<br>';

$res = asort($arr18);
var_dump($arr18);

echo "<br>";

$res = ksort($arr18);
var_dump($arr18);

echo "<br>";

krsort($arr18);
var_dump($arr18);

echo "<br>";

usort($arr18);
var_dump($arr18);

echo "<br>";

$res = uasort($arr18);
var_dump($arr18);

echo "<br>";

$res = uksort($arr18);
var_dump($arr18);

echo "<br>";

$res = natsort($arr18);
var_dump($arr18);

echo "<br>";
echo "<br>";

//26
$arr19 = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(array_rand($arr19));
echo "<br>";
echo "<br>";

//27
$arr20 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$thiskey = array_rand($arr20);
var_dump($arr20[$thiskey]);

echo "<br>";
echo "<br>";

//28
$arr21 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
shuffle($arr21);
var_dump($arr21);

echo "<br>";
echo "<br>";

//29
$arr22 = range(1, 25);
shuffle($arr22);
var_dump($arr22);

echo "<br>";
echo "<br>";

//30
$arr23 = range('a', 'z');
shuffle($arr23);
var_dump($arr23);

echo "<br>";
echo "<br>";

//31
$arr24 = range('a', 'z');
shuffle($arr24);
$x = implode($arr24);
$z = substr($x, 0, 6);
echo ($z);

echo "<br>";
echo "<br>";

//32
$arr25 = ['a', 'b', 'c', 'b', 'a'];
$arr25 = array_unique($arr25);
var_dump($arr25);

echo "<br>";
echo "<br>";

//33
$arr26 = [1, 2, 3, 4, 5];
echo (array_shift($arr26)); // выбор 1 элемента
echo " and ";
echo (array_pop($arr26)); // выбор последнего элемента
echo "<br>";
echo "<br>";

//34
$arr27 = [1, 2, 3, 4, 5];
array_unshift($arr27, 0); //0 в начале
array_push($arr27, 6); // 6 в конце
var_dump($arr27);

echo "<br>";
echo "<br>";

//35
$arr28 = [1, 2, 3, 4, 5, 6, 7, 8];
$strm = '';

for ($i = 0;$i < count($arr28);$i++)
{
    $strm .= array_shift($arr28);
    $strm .= array_pop($arr28);
}
echo $strm;

echo "<br>";
echo "<br>";

//36
$arr29 = [1, 2, 3];
$arr29 = array_pad($arr29, 6, '-');
var_dump($arr29);

?>
