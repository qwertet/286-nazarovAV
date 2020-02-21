<?php
$str = "Бережков Андрей Вячеславович";

$word = explode(" ", $str);
print_r($word);
echo substr($word[0], 0, 16) . ' ';
echo substr($word[1], 0, 2) . '.';
echo substr($word[2], 0, 2) . '.';

echo '<br>';
echo '<br>';

$rest = substr("БережковАндрейВячеславович", 0, -36) . ' ';
echo $rest;

$rest2 = substr("БережковАндрейВячеславович", 16, -34) . '.';
echo $rest2;

$rest3 = substr("БережковАндрейВячеславович", 28, -22) . '.';
echo $rest3;






//№1
echo strtoupper('php');

echo '<br>';
echo '<br>';
//№2
echo ucfirst(strtolower('PHP'));

echo '<br>';
echo '<br>';
//№3
echo ucfirst('london');

echo '<br>';
echo '<br>';
//№4
echo lcfirst('London');

echo '<br>';
echo '<br>';
//№5
echo ucwords('london is the capital of great britain');

echo '<br>';
echo '<br>';
//№6
echo ucfirst(strtolower('LONDON'));

echo '<br>';
echo '<br>';
//№7
echo strlen('html css php');

echo '<br>';
echo '<br>';
//№8
$password = 6;

if ($password > 5 & $password < 10)
{
    echo 'ok';
}
else
{
    echo 'Придумайте другой пароль';
}

echo '<br>';
echo '<br>';
//№9
echo substr('html css php', 0, 4);
echo '<br>';
echo substr('html css php', 5, 3);
echo '<br>';
echo substr('html css php', 9, 3);

echo '<br>';
echo '<br>';
//№10
echo substr('hdhdfhgr', -3);

echo '<br>';
echo '<br>';
//№11
$str = 'http://reddit.com/';
if (substr($str, 0, 7) == 'http://')
{
    echo 'да';

}
else
{
    echo 'нет';
}

echo '<br>';
echo '<br>';
//№12
$str1 = 'http://reddit.com/';
if (substr($str1, 0, 7) == 'http://')
{

    if (substr($str1, 0, 8) == 'https://')
    {
        echo 'да';

    }
    else
    {
        echo 'да';
    }
}
else
{

    if (substr($str1, 0, 8) == 'https://')
    {
        echo 'да';

    }
    else
    {
        echo 'нет';
    }
}

echo '<br>';
echo '<br>';
//№13
$str8 = 'random.png'; //13
if (substr($str8, -4) == '.png')
{
    echo 'Да';
}
else
{
    echo 'Нет';
}

echo '<br>';
echo '<br>';
//№14
$str9 = 'random.jpg';
if (substr($str9, -4) == '.png')
{

    if (substr($str9, -4) == '.jpg')
    {
        echo 'да';
    }
    else
    {

        echo 'да';
    }
}
else
{
    if (substr($str9, -4) == '.jpg')
    {
        echo 'да';
    }
    else
    {
        echo 'нет';
    }
}

echo '<br>';
echo '<br>';
//№15
$str10 = 'kgregierjgo';

if (strlen($str10) > 5)
{
    echo substr($str10, 5) . '...';

}
else
{
    echo $str10;
}

echo '<br>';
echo '<br>';

//№16
$str12 = str_replace(".", "-", '31.12.2013');
echo $str12;

echo '<br>';
echo '<br>';

echo '№17';

echo '<br>';

echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'aabbcc');
echo '<br>';

echo '№18';

echo '<br>';

$str13 = '1a2b3c4b5d6e7f8g9h0';

echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str13);

echo '<br>';
echo '<br>';

echo '№19';

echo '<br>';

$str14 = 'aaabbbccc';

echo strtr($str14, ['a' => '1', 'b' => '2', 'c' => '3']);

echo '<br>';
echo strtr($str14, 'abc', '123');

echo '<br>';

echo '№20';

echo '<br>';

$str15 = 'helplmao';

echo substr_replace($str15, '!!!', 2, 5);

echo '<br>';

echo '№21';

echo '<br>';

$str16 = 'abc abc abc';
echo strpos($str16, 'b');

echo '<br>';

echo '№22';

echo '<br>';

echo strrpos($str16, 'b');

echo '<br>';

echo '№23';

echo '<br>';

echo strpos($str16, 'b', 2);

echo '<br>';

echo '№24';

echo '<br>';

$str17 = 'aaa aaa aaa aaa aaa';
echo strpos($str17, ' ', 5);

echo '<br>';

echo '№25';

echo '<br>';

$str18 = 'sfwefwe..ewwer';

if (strpos($str18, '..'))
{

    echo 'есть';

}
else
{
    echo 'нет';
}

echo '<br>';

echo '№26';

echo '<br>';

$str19 = 'http://reddit.com/';

if (strpos($str19, 'http://'))
{

    echo 'да';

}
else
{
    echo 'нет';
}

echo '<br>';

echo '№27';

echo '<br>';

$massive = explode(' ', 'html css php');
echo $massive[0] . ' ';
echo $massive[1] . ' ';
echo $massive[2] . ' ';

echo '№28';

echo '<br>';

$massive2 = (['html', 'css', 'php']);
$done = implode(',', $massive2);
echo $done;

echo '<br>';
//29
$date2 = '2013-12-31';
$done2 = explode('-', $date2);
echo $done2[0] . '.';
echo $done2[1] . '.';
echo $done2[2];

echo '<br>';
//30
$str20 = '1234567890';
$done3 = str_split($str20, 2);
var_dump($done3); //Выводит информацию о переменной
echo '<br>';
echo '<br>';

//31
$done4 = str_split($str20, 1);
var_dump($done4); //Выводит информацию о переменной
echo '<br>';
echo '<br>';
//32
echo implode('-', str_split('1234567890', 2));
//33
echo '<br>';
echo '<br>';

$str22 = 'fgdgf dfg dfg efr';
echo (trim($str22));

var_dump(rtrim(' fgdgf dfg dfg efr '));

//34
echo '<br>';
echo '<br>';

echo (trim('/php/', '/'));

echo '<br>';
echo '<br>';

//35
echo (rtrim('слова слова слова.', '.') . '.');
//36
echo '<br>';
echo '<br>';

echo strrev('12345');

echo '<br>';
echo '<br>';
//37
$wordd = 'madam';
$rev = strrev($wordd);

if ($rev == $wordd)
{
    echo 'да';

}
else
{
    echo 'нет';
}

echo '<br>';
echo '<br>';
//38
echo str_shuffle('hgjtyjrr');

echo '<br>';
echo '<br>';
//39
$str24 = 'qwertyuiopasdfghjklzxcvbnm';
echo substr(str_shuffle($str24) , 0, 6);

echo '<br>';
echo '<br>';
//40
$str25 = 12345678;
echo number_format($str25, 0, ' ', ' ');

echo '<br>';
echo '<br>';
//41
for ($i = 1;$i < 10;$i++)
{
    echo str_repeat('x', $i);
    echo '<br>';
}

echo '<br>';
echo '<br>';
//42
for ($i = 1;$i < 10;$i++)
{
    echo str_repeat($i, $i);
    echo '<br>';
}

echo '<br>';
echo '<br>';
//43
$str26 = 'html, <b>php</b>, js';
echo strip_tags($str26);

echo '<br>';
echo '<br>';
//44
$str27 = '<u>html</u>, <b>php</b>, <i>js</i>';
echo strip_tags($str27, '<b>, <i>');

echo '<br>';
echo '<br>';
//45
$str28 = 'html, <b>php</b>, js';
echo htmlspecialchars($str28);

echo '<br>';
echo '<br>';
//46
echo ord('a') . ',';
echo ord('b') . ',';
echo ord('c') . ',';
echo ord(' ');

echo '<br>';
echo '<br>';
//47
echo chr(33);

echo '<br>';
echo '<br>';
//49
$str29 = chr(rand(65, 90));
echo $str29;

echo '<br>';
echo '<br>';
//50


for ($len = 0;$len <= 6;$len++)
{
    $str30 = chr(rand(97, 122));
    echo $str30;
}

echo '<br>';
echo '<br>';
//51
$latterr = 'M';
$code = ord($latterr);

if ($code >= 65 & $code <= 90)
{
    echo 'Большая буква';
}
else
{
    echo 'Маленькая буква';
}

echo '<br>';
echo '<br>';
//52
$str31 = 'ab-cd-ef';
echo strchr($str31, '-');

echo '<br>';
echo '<br>';
//53
$str32 = 'ab-cd-ef';
echo strchr($str32, '-e');

echo '<br>';
echo '<br>';
//54
$str32 = 'ab--cd--ef';
echo strstr($str32, '-');

echo '<br>';
echo '<br>';
//55
$str33 = 'var_test_text';
echo str_replace('_', '', $str33);
?>